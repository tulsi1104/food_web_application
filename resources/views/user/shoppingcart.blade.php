@extends('userlayout.app')
@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">My Cart</h1>
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
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin:50px;
    }

    .product:hover {
        transform: translateY(-5px);
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
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

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="product">
                    <img src="{{ asset($product->image_url)}}" alt="Product Image">
                    <h3 class="product-name">{{$product->product_name}}</h3>
                    <p class="product-description">{{$product->description}}</p>
                    <p class="product-price">{{$product->price}}</p>
                    
                    <form action="{{ route('order.order') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                        <input type="hidden" name="customer_id" value="{{ session('user')['customer_id'] }}">
                        <div style="display: flex; justify-content: center;">
                            <input type="number" name="quantity" value="1" min="1" class="form-control" style="width: 100px; padding: 10px; border-radius: 5px; border: 1px solid #ccc; text-align: center;">
                        </div>
                        <input type="hidden" name="unit_price" value="{{$product->price}}">
                        <button type="submit" name="action" value="buyNow" style="background-color: #4CAF50; /* Green */
                                            border: none;
                                            color: white;
                                            padding: 9px 32px;
                                            text-align: center;
                                            text-decoration: none;
                                            display: inline-block;
                                            font-size: 16px;
                                            margin: 4px 2px;
                                            cursor: pointer;
                                            border-radius: 10px;">Buy Now</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
<script>

    function incrementQuantity(productId) {
        var quantityElement = document.getElementById('quantity' + productId);
        var currentQuantity = parseInt(quantityElement.innerText);
        quantityElement.innerText = currentQuantity + 1;
    }

    function decrementQuantity(productId) {
        var quantityElement = document.getElementById('quantity' + productId);
        var currentQuantity = parseInt(quantityElement.innerText);
        if (currentQuantity > 1) {
            quantityElement.innerText = currentQuantity - 1;
        }
    }
    function addToCart(productId) {
        // Implement logic to add the product to the cart
        console.log('Adding product with ID ' + productId + ' to cart...');
    }

    function buyNow(productId) {
        // Implement logic to handle the "Buy Now" action
        console.log('Buying product with ID ' + productId + '...');
    }
</script>
@endsection
