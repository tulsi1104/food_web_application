<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Deliverypartner;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Orderlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    function Makeorder(Request $request){
        $user = Auth::user();
        $user_id = $user->id;
    
        $product_ids = $request->input('product_id');
        $quantities = $request->input('quantity');
        $prices = $request->input('price');
        $amount = $request->input('amount');
        $payment_method = $request->input('payment_method');
        $phone = $request->input('phone_number');
    
        // Address
        $address = $request->input('address') . ', ' .
                   $request->input('city') . ', ' .
                   $request->input('state') . ', ' .
                   $request->input('postal_code');
    
        // Create the order
        $order = Order::create([
            'customer_id' => $user_id,
            'date' => now(),
            'payment_method' => $payment_method,
            'status' => "PENDING",
            'amount' => $amount
        ]);
    
        if($order){
            // Update customer information
            $customer = Customer::where('user_id', $user_id)->first();
            $customer->update([
                'address' => $address,
                'phone_number' => $phone
            ]);
    
            // Prepare data for order items
            $orderItemsData = [];
            foreach ($product_ids as $index => $product_id) {
                $orderItemsData[] = [
                    'order_id' => $order->id,
                    'product_id' => $product_id,
                    'quantity' => $quantities[$index],
                    'unit_price' => $prices[$index]
                ];
            }
    
            // Create order items
            Order_item::insert($orderItemsData);
    
            return view('customer.success');
        }
    }

    function MyOrders(Request $request){
        $user = Auth::user();
        $user_id = $user->id;

        $orders=Order::where('customer_id',$user_id)->get();
        // dd($orders);
        if($orders){
            return view('customer.myorders',['Order'=>$orders]);
        }
    }

    function Orders(Request $request){
        $orders = DB::table('orders')
        ->join('users', 'orders.customer_id', '=', 'users.id')
        ->select('orders.*', 'users.name')
        ->get();

        $items = [];

        foreach($orders as $order) {
            // Retrieve items for each order and append them to the $items array
            $orderItems = DB::table('order_items')
                        ->join('products', 'order_items.product_id', '=', 'products.id')
                        ->where('order_items.order_id', $order->id)
                        ->select('products.product_name', 'order_items.*')
                        ->get();
            $items[$order->id] = $orderItems;

            if($order->status == "CONFIRM ORDER" || $order->status == "DELIVERY PARTNER ASSIGNED"){
                $button = "OUT FOR DELIVERY";
            }
            else if($order->status == "OUT FOR DELIVERY"){
                $button = "DELIVERED";
            }
            else if($order->status == "DELIVERED"){
                $button="";
            }
            else{
                $button = "CONFIRM ORDER";
            }

            $order->button = $button;
        }

        $partners=Deliverypartner::all();
        // dd($items);
        return view('admin.orders',['Orders'=>$orders,'Items'=>$items,'Partner'=>$partners]);
    }

    function OrderAction(Request $request,$id){
        $order=Order_item::where('order_id',$id);
        return view();
    }

    function DeleteOrder(Request $request){
        $order_id=$request->order_id;
        $order=Order::findOrFail($order_id);
        $deleted=$order->delete();
        if($deleted){
            return redirect()->route('Orders.Orders');
        }
    }
    
    
}
//     $user=Auth::user();
//     $user_id=$user->id;
//     $orderlist=Orderlist::where('customer_id',$user_id)->get();

//     $product_id=$orderlist->product_id;
//     $product = Product::find($product_id);

//     $items=$product;
//     $items['quantity']=$orderlist->quantity;

//     if($product){
//         return view('customer.paymentpage',['Product'=>$items]);
//     }
// }
