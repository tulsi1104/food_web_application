<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return view('customer.paymentpage'); 
            // return view('user.order',['products'=>$products]);
        }
        elseif($request->input('action')==='additem'){
            
        }
    }
}
