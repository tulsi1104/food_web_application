<?php

namespace App\Http\Controllers;

use App\Models\Shopping_cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    //'addtocart.addToCart'
    function addToCart(Request $request){
        $product_id=$request->input('product_id');
        $category_id=$request->input('category_id');
        $quantity=$request->input('quantity');

        $user = Auth::user();
        $user_id=$user->id;

        $created=Shopping_cart::create([
            'product_id'=>$product_id,
            'category_id'=>$category_id,
            'quantity'=>$quantity,
            'user_id'=>$user_id
        ]);

        if($created){
            // return redirect()->route('');
            return redirect()->route('listcategoryatuser.listcategoryatuser');
        }
    }

    function ListShoppingCartById(Request $request){

        $user=Auth::user();
        $user_id=$user->id;

        $shoppingcart=Shopping_cart::where('user_id',$user_id)
            ->join('products', 'shopping_carts.product_id', '=', 'products.id')
            ->select('products.product_name', 'products.image_url', 'products.price', 'shopping_carts.quantity','products.category_id','products.id','products.description')
            ->get();

        $totalproduct=$shoppingcart->count();
        if ($totalproduct === 0) {
            return redirect()->route('customer.nodata');
        }
        return view('customer.shoppingcart',['Shopping_product'=>$shoppingcart,'totalproduct'=>$totalproduct]);
    }
}
