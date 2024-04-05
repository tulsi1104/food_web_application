@extends('userlayout.app')
@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Your Orders</h1>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

@endsection
@section('content')

<style>
    .product {
        text-align: center;
        margin-bottom: 30px;
        background-color: #ffffff;
        transition: all 0.3s ease;
        margin:50px;
        padding: 50px;
    }


    .product img {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .product h3.product-name {
        margin: 20px 0 10px 0;
        color: #333333;
        font-size: 1.5rem;
        font-weight: 600;
    }

    .product p.product-description {
        margin: 10px 0;
        color: #666666;
    }

    .product p.product-price {
        margin: 10px 0;
        color: #ff0000; /* Adjust color as needed */
        font-weight: bold;
    }

    .card {
        background-color: transparent;
        border: none;
    }

    /* Slider */
    .carousel-inner img {
        width: 100%;
        height: 300px;
    }
</style>
<div class="row justify-content-center">
<div class="col-md-8">
        <div class="product" style="padding: 50px;" >
                    <form action="{{route('ordermanage.ordermanage')}}" method="POST">
                    @csrf
                        @php
                        $totalAmount = 0;
                        @endphp

                        <input type="hidden" name="customer_id" value="{{ session('user')['customer_id'] }}">

                        <label>Products</label>

                        @foreach($products as $product)
                        <div class="row justify-content-center" style="background-color:#f8f9fa;margin:10px;">
                        <input type="hidden" name="product_id[]" value="{{$product->product_id}}">
                        
                        <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="product_name[]" value="{{$product->product_name}}">
                        </div>

                        <div class="form-group">
                        <input type="number" class="form-control form-control-sm" name="quantity[]" id="quantity" value="{{$quantity}}">
                        </div>

                        <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="unit_price[]" value="{{$product->price}}">
                        </div>
                        
                        @php
                        $totalAmount += $quantity * $product->price;
                        @endphp

                        </div>
                        @endforeach

                        <!-- end added item -->

                        <button type="submit" name="action" value="additem" style="background-color: blue;
                            border: none;
                            color: white;
                            padding: 9px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            margin: 4px 2px;
                            cursor: pointer;
                            border-radius: 10px;">Add Item</button></br></br>

                        <!-- Address -->
                        <div class="form-group">
                        <label>Address</label>
                        </div>
                        @foreach($address as $ad)
                        <input type="text" class="form-control form-control-sm" name="address" value="{{$ad->address}}">
                        <input type="text" class="form-control form-control-sm" name="city" value="{{$ad->city}}">
                        <input type="text" class="form-control form-control-sm" name="state" value="{{$ad->state}}">
                        <input type="text" class="form-control form-control-sm" name="zipcode" value="{{$ad->zipcode}}">
                        <!-- end address -->
                        @endforeach
                        <button type="submit" name="action" value="addaddress" style="background-color: blue;
                            border: none;
                            color: white;
                            padding: 9px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            margin: 4px 2px;
                            cursor: pointer;
                            border-radius: 10px;">Add Address</button></br></br>

                        <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" class="form-control form-control-sm" name="amount" value="{{$totalAmount}}">
                        </div></br>
                        
                        <div class="form-group">
                        <label>Payment Method:</label>
                        </div>
                        <select class="form-control form-control-sm" name="payment">
                            <option class="form-control form-control-sm" value="Credit card" selected>Credit card</option>
                            <option class="form-control form-control-sm" value="UPI">UPI</option>
                            <option class="form-control form-control-sm" value="Debit card">Debit Card</option>
                            <option class="form-control form-control-sm" value="Net Banking">Net Banking</option>
                            <option class="form-control form-control-sm" value="Cash on Delivery">Cash On Delivery</option>
                        </select>
                        <input type="hidden" name="status" value="PENDING"></br></br></br></br>
                        

                        <button type="submit" name="action" value="Clickonorder" style="background-color: #4CAF50; /* Green */
                            border: none;
                            color: white;
                            padding: 9px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            margin: 4px 2px;
                            cursor: pointer;
                            border-radius: 10px;">Click to Pay  |  &#8377;{{$totalAmount}}</button>
                      
                    </form>
                </div>
</div>
</div>

                
@endsection
