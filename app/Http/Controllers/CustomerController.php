<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function Customers(Request $request){
        $customer=Customer::all();
        return view('admin.home',['customer'=>$customer]);
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
}
