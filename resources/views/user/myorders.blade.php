@extends('userlayout.app')
@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">My Orders</h1>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

@endsection

@section('content')

<style>
    .category {
        text-align: center;
        margin-bottom: 30px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin:50px;
    }

    .category:hover {
        transform: translateY(-5px);
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
    }

    .category img {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .category h3.category-name {
        margin: 20px 0 10px 0;
        color: #333333;
        font-size: 1.5rem;
        font-weight: 600;
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
                    @foreach($product as $products)
                        <div class="col-md-4">
                            <div class="category">
                                    <img src="{{ asset($products->image_url) }}" alt="{{ $products->product_name }}">
                                    <h3 class="category-name">{{ $products->product_name }}</h3>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
@endsection
