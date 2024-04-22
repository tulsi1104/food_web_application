<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function addCategory(Request $request){
        $category=$request->category;
        $description=$request->description;
        $image = $request->file('image');

        if ($image) {
            $imageName = $image->getClientOriginalName();    
            $imagePath = $image->storeAs('category-images', $imageName, 'public');  

        } else {
            $imagePath = null;
        }
        $create=Category::create([
            'category_name'=>$category,
            'description'=>$description,
            'image_url' => $imagePath, // Store the image path instead of the URL
        ]);

        if($create){
            return redirect()->route('listcategory.listcategory');
        }else
        {
            return "Failed";
        }
    }

    function listcategory(Request $request){
        $category=Category::all();
        return view('admin.category',['Category'=>$category]);
    }

    function listcategoryatuser(Request $request){
        $category=Category::all();
        return view('customer.category',['Category'=>$category]);
    }

    function retrieveCategoryById(Request $request){
        $category_id=$request->category_id;
        $category=Category::find($category_id);
        if($category){
            return view('admin.editcategory',['Category'=>$category]);
        }
    }

    function UpdateCategoryById(Request $request){
        $category_id=$request->category_id;
        $category=$request->category;
        $updated_image=$request->file('updated_image');
        $description=$request->description;

        $categoryy=Category::find($category_id);

        if($updated_image){
            $imageName = $updated_image->getClientOriginalName();    
            $imagePath = $updated_image->storeAs('category-images', $imageName, 'public'); 
        }
        else{
            $imagePath=$categoryy->image_url;
        }

        $updated = $categoryy->update([
            'category_name' => $category,
            'description' => $description,
            'image_url' => $imagePath, 
        ]);

        if($updated){
            return redirect()->route('listcategory.listcategory');
        }
    }

    function deleteCategoryById(Request $request){
        $category_id=$request->category_id;

        $category=Category::findOrFail($category_id);
        $deleted=$category->delete();

        if($deleted){
            return redirect()->route('listcategory.listcategory');
        }
    }
}
