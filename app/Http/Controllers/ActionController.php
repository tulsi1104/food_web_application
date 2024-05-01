<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ActionController extends Controller
{
    
    public function action(Request $request)
    {
       
        if ($request->input('action') === 'addToCart') 
        {
            return redirect()->route('addtocart.addToCart', [], 307); // 307 indicates the POST method
        } 
        elseif ($request->input('action') === 'buyNow') 
        {
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
            return view('customer.paymentpage',['email'=>$email,'name'=>$name,'phone_number'=>$phone_number,'street'=>$streetAddress,'area'=>$area,'city'=>$city,'state'=>$state,'zipcode'=>$postalCode,'address'=>$address]); 
            // return view('user.order',['products'=>$products]);
        }
        elseif($request->input('action')==='additem'){
            
        }
    }
}
