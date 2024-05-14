<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfirmOrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeliveryPartnerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/','customer.home')->name('customer.home');

Route::view('/login','login')->name('login.login');
Route::view('/signup','signup')->name('signup.signup');

Route::post('registercustomer',[AuthController::class,'register'])->name('registercustomer.register');
Route::post('loginuser',[AuthController::class,'login'])->name('loginuser.login');
Route::view('testapp','test')->name('test.test');


Route::middleware('auth')->group(function () {
    Route::view('customercategory','customer.category')->name('customer.category');
    Route::view('customerproducts','customer.products')->name('customer.products');

    Route::post('logout',[AuthController::class,'logout'])->name('logout.logout');
    Route::view('category','user.category')->name('user.category');
    Route::view('order','user.order')->name('user.order');
    // Route::view('myorder','user.myorders')->name('user.myorders');
    // Route::view('shoppingcart','user.shoppingcart')->name('user.shoppingcart');
    Route::view('test','admin.products')->name('admin.products');
    Route::view('admincategory','admin.category')->name('admin.category');
    Route::view('adminhome','admin.home')->name('admin.home');

    Route::view('addcategory','admin.addcategory')->name('admin.addcategory');
    Route::view('addproduct','admin.addproduct')->name('admin.addproduct');
    Route::post('createproduct',[ProductController::class,'createProduct'])->name('createproduct.createProduct');
    Route::get('listcategory',[CategoryController::class,'listcategory'])->name('listcategory.listcategory');
    Route::get('listproduct',[ProductController::class,'listproduct'])->name('listproduct.listproduct');
    Route::post('createcategory',[CategoryController::class,'addCategory'])->name('createcategory.addCategory');

    Route::get('showcustomers',[CustomerController::class,'Customers'])->name('showcustomers.Customers');

    //customer
    Route::get('listcategoryuser',[CategoryController::class,'listcategoryatuser'])->name('listcategoryatuser.listcategoryatuser');
    //delete product
    Route::post('deleteProductById',[ProductController::class,'deleteProductById'])->name('deleteProductById.deleteProductById');
    //editproduct
    Route::post('retrieveProductById',[ProductController::class,'retrieveProductById'])->name('retrieveProductById.retrieveProductById');
    Route::view('editproduct','admin.editproduct')->name('admin.editproduct');
    Route::post('UpdateProductById',[ProductController::class,'UpdateProductById'])->name('UpdateProductById.UpdateProductById');

    //editcategory
    Route::post('retrieveCategoryById',[CategoryController::class,'retrieveCategoryById'])->name('retrieveCategoryById.retrieveCategoryById');
    Route::view('editcategory','admin.editcategory')->name('admin.editcategory');
    Route::post('UpdateCategoryById',[CategoryController::class,'UpdateCategoryById'])->name('UpdateCategoryById.UpdateCategoryById');

    //delete category
    Route::post('deleteCategoryById',[CategoryController::class,'deleteCategoryById'])->name('deleteCategoryById.deleteCategoryById');


    Route::get('productbyid/{id}',[ProductController::class,'listproductsbyId'])->name('productbyid.listproductsbyId');

    Route::post('action',[ActionController::class,'action'])->name('action.action');
        //'addtocart.addToCart'
    Route::post('addtocart',[CartController::class,'addToCart'])->name('addtocart.addToCart');

    Route::get('shoppingcart',[CartController::class,'ListShoppingCartById'])->name('shoppingcart.ListShoppingCartById');

    Route::view('shoppingcartproduct','customer.shoppingcart')->name('customer.shoppingcart');

    Route::post('makeorder',[OrderController::class,'Makeorder'])->name('makeorder.Makeorder');
    Route::view('customerprofile','customer.profile')->name('customer.profile');
    Route::view('nodata','customer.nodata')->name('customer.nodata');
    Route::view('paymentpage','customer.paymentpage')->name('customer.paymentpage');
    Route::get('admincustomer',[CustomerController::class,'AdminCustomer'])->name('admincustomer.AdminCustomer');

    Route::get('totalorderlist',[OrderController::class,'TotalOrderlist'])->name('totalorderlist.TotalOrderlist');
    Route::view('success','customer.success')->name('customer.success');

    Route::view('myorders','customer.myorders')->name('customer.myorders');

    Route::get('myorder',[OrderController::class,'MyOrders'])->name('myorder.MyOrders');
    Route::view('orderss','admin.orders')->name('admin.orders');
    Route::get('Orders',[OrderController::class,'Orders'])->name('Orders.Orders');
    Route::view('vieworder','admin.vieworder')->name('admin.vieworder');

    Route::get('orderaction',[OrderController::class,'OrderAction'])->name('orderaction.OrderAction');

    //delete order
    Route::post('deleteorder',[OrderController::class,'DeleteOrder'])->name('deleteorder.DeleteOrder');

    //confirm order
    Route::post('confirmorder',[ConfirmOrderController::class,'ConfirmOrder'])->name('confirmorder.ConfirmOrder');
    Route::view('viewpartners','admin.deliverypartners')->name('admin.deliverypartners');
    Route::view('addpartner','admin.addpartner')->name('admin.addpartner');
    Route::post('adddpartner',[DeliveryPartnerController::class,'AddPartner'])->name('adddpartner.AddPartner');
    Route::get('listpartners',[DeliveryPartnerController::class,'partners'])->name('listpartners.partners');
    Route::post('assignpartner',[DeliveryPartnerController::class,'AssignPartner'])->name('assignpartner.AssignPartner');
    Route::post('makeoffline',[DeliveryPartnerController::class,'MakeOffline'])->name('makeoffline.MakeOffline');

    Route::get('customerinfo',[CustomerController::class,'CustomerInfo'])->name('customerinfo.CustomerInfo');

    //change password
    
    Route::post('changepassword',[AuthController::class,'change_password'])->name('changepassword.change_password');
    Route::post('updatecustomer',[CustomerController::class,'UpdateCustomer'])->name('updatecustomer.UpdateCustomer');
    Route::view('customerinvoice','customer.invoice')->name('customer.invoice');
    Route::get('invoice/{orderId}',[CustomerController::class,'Invoice'])->name('invoice.Invoice');
    
});

use Illuminate\Http\Request;





