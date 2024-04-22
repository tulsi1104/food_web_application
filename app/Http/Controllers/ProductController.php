<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    function createProduct(Request $request){
        $product = $request->product;
        $description = $request->description;
        $category = $request->category;
        $categoryall = Category::where('category_name', $category)->first();
        $image = $request->file('image');
        $price = $request->price;
    
        if ($image) {
            $imageName = $image->getClientOriginalName();   
            $imagePath = $image->storeAs('product-images', $imageName, 'public');  
        } 
        else 
        {
            $imagePath = null;
        }
    
        $create = Product::create([
            'product_name' => $product,
            'description' => $description,
            'category_id' => $categoryall->id,
            'image_url' => $imagePath, 
            'price'=>$price
        ]);
    
        if($create){
            return redirect()->route('listproduct.listproduct');
        } else {
            return "Failed";
        }
    }

    function listproduct(Request $request){
        $products = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.*', 'categories.category_name')
        ->get();
        return view('admin.products',['Product'=>$products]);
    }

    // 'customer.products'
    function listproductsbyId(Request $request,$category_id){
        // $category_id=$request->input('category_id');
        $products=Product::where('category_id',$category_id)->get();
        return view('customer.products',['Product'=>$products]);
    }

    function deleteProductById(Request $request){
        $product_id=$request->product_id;

        $product=Product::findOrFail($product_id);
        $deleted=$product->delete();

        if($deleted){
            return redirect()->route('listproduct.listproduct');
        }
    }

    function retrieveProductById(Request $request){
        $product_id=$request->product_id;

        $product = Product::join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.*', 'categories.category_name')
        ->where('products.id', $product_id)
        ->first();
        // $image=$product->image_url;
        // $imageName = basename($image);
        // $imageName = $image->getClientOriginalName();   
        // $imagename = pathinfo($image, PATHINFO_FILENAME);
        // dd($product);
        // dd($image);
        if($product){
            return view('admin.editproduct',['Product'=>$product]);
        }
    }

    function UpdateProductById(Request $request){
        $product_id=$request->product_id;
        $product = $request->product;
        $description = $request->description;
        $category = $request->category;
        $categoryall = Category::where('category_name', $category)->first();
        // $image = $request->file('image');
        $updated_image = $request->file('updated_image');
        $price = $request->price;

        $products=Product::find($product_id);

        if($updated_image) {
            $imageName = $updated_image->getClientOriginalName();   
            $imagePath = $updated_image->storeAs('product-images', $imageName, 'public');  
        } 
        else 
        {
            $imagePath=$products->image_url;
        }
    
        $create = $products->update([
            'product_name' => $product,
            'description' => $description,
            'category_id' => $categoryall->id,
            'image_url' => $imagePath, 
            'price'=>$price
        ]);
    
        if($create){
            return redirect()->route('listproduct.listproduct');
        } else {
            return "Failed";
        }
    }
}
