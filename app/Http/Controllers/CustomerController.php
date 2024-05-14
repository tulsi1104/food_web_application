<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class CustomerController extends Controller
{
    function Customers(Request $request){
        $customer=Customer::all();

        //total orders
        $orders=Order::all();
        $totalorders=$orders->count();

        //pending orders
        $porder=$orders->where('status',"PENDING");
        $pendingorder=$porder->count();

        //delivered orders
        $dorder=$orders->where('status',"DELIVERED");
        $deliverdorder=$dorder->count();

        $deliveredOrderAmountSum = 0;

        // Calculate sum of amounts of delivered orders
        foreach ($dorder as $order) {
            $deliveredOrderAmountSum += $order->amount;
        }
        return view('admin.home',['customer'=>$customer,'TotalOrder'=>$totalorders,'PendingOrder'=>$pendingorder,'DeliveredOrder'=>$deliverdorder,'Budget'=>$deliveredOrderAmountSum]);
    }

    function AdminCustomer(Request $request){
        // Paginate customers
        $customers = Customer::all(); // Change the number as per your requirement
    
        // Retrieve orders for each customer
        foreach ($customers as $customer) {
            $orders = DB::table('orders')
                ->where('customer_id', $customer->id)
                ->select('date', 'amount')
                ->get();
    
            $customer->orders = $orders;
        }

    
        return view('admin.customer', ['customer' => $customers]);
    }

    function CustomerInfo(){
        $current_customer = Auth::user();
        $id = $current_customer->id;
        $email = $current_customer->email;
        $name = $current_customer->name;
    
        $customer = Customer::where('user_id', $id)->first();
        $phone_number = $customer->phone_number;
        $address = $customer->address;
    
        // Check if address is set
        if ($address) {
            $parts = explode(',', $address);
            $parts = array_map('trim', $parts);
    
            $streetAddress = isset($parts[0]) ? $parts[0] : ''; // Type-3/Block No.32/3
            $area = isset($parts[1]) ? $parts[1] : ''; // Type-3/Block No.32/3
            $city = isset($parts[2]) ? $parts[2] : ''; // Gandhinagar
            $state = isset($parts[3]) ? $parts[3] : ''; // Gujarat
            $postalCode = isset($parts[4]) ? $parts[4] : ''; // 382130
        } else {
            $streetAddress = '';
            $area = '';
            $city = '';
            $state = '';
            $postalCode = '';
        }
    
        return view('customer.profile', [
            'email' => $email,
            'name' => $name,
            'phone_number' => $phone_number,
            'street' => $streetAddress,
            'area' => $area,
            'city' => $city,
            'state' => $state,
            'zipcode' => $postalCode,
            'address' => $address
        ]);
    }
    

    function UpdateCustomer(Request $request){
        // dd($request->all());

        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $street=$request->street;
        $city=$request->city;
        $state=$request->state;
        $zipcode=$request->zipcode;

        $address = $street . ', ' .
                   $city . ', ' .
                   $state . ', ' .
                   $zipcode;

        $user=Auth::user();
        $user_id=$user->id;

        $customer=User::find($user_id);
        $customer_updated=$customer->update([
            'email'=>$email,
            'name'=>$name
        ]);
            if($customer_updated){
                $customerr=Customer::where('user_id',$user_id)->first();
                $customerr_updated=$customerr->update([
                    'name'=>$name,
                    'email'=>$email,
                    'phone_number'=>$phone,
                    'address'=>$address
                ]);
                if($customerr_updated){
                    return redirect()->route('customerinfo.CustomerInfo');
                }
            }

    }

    function Invoice($order_id){
        $user = Auth::user();
        $user_id = $user->id;
        // $order_id=$request->order_id;
        $customer=Customer::where('user_id',$user_id)->first();
        $orders=Order::find($order_id);
        // dd($orders);
            $orderItems = DB::table('order_items')
                        ->join('products', 'order_items.product_id', '=', 'products.id')
                        ->where('order_items.order_id', $order_id)
                        ->select('products.*', 'order_items.*')
                        ->get();

                        if($orders){
                            // Load the view and pass data to it
                            return view('customer.invoice',['Order'=>$orders, 'Item'=>$orderItems, 'Customer'=>$customer]);
                            // $pdf=Pdf::loadView('customer.invoice',['Order'=>$orders, 'Item'=>$orderItems, 'Customer'=>$customer]);
                            // return $pdf->stream();
                        }
    
}
}