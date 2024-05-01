<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $current_customer=Auth::user();
        $id=$current_customer->id;
        $email=$current_customer->email;
        $name=$current_customer->name;

        $customer=Customer::where('user_id',$id)->first();
        $phone_number=$customer->phone_number;
        $address=$customer->address;
        $parts = explode(',', $address);
        $parts = array_map('trim', $parts);

        $streetAddress = $parts[0]; // Type-3/Block No.32/3
        $area = $parts[1]; // Type-3/Block No.32/3
        $city = $parts[2]; // Gandhinagar
        $state = $parts[3]; // Gujarat
        $postalCode = $parts[4]; // 382130
        return view('customer.profile',['email'=>$email,'name'=>$name,'phone_number'=>$phone_number,'street'=>$streetAddress,'area'=>$area,'city'=>$city,'state'=>$state,'zipcode'=>$postalCode,'address'=>$address]);
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
}
