@extends('userlayout.app')

@section('header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Category</h1>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

@endsection

@section('content')

<style>
    .category {
        text-align: center;
        margin-bottom: 50px;
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
    @foreach($categories as $category)
        <div class="col-md-4">
            <div class="category">
                <a href="{{ route('getitem.getItem', ['id' => $category->category_id]) }}">
                    <img src="{{ asset($category->image_url) }}" alt="{{ $category->category_name }}">
                    <h3 class="category-name">{{ $category->category_name }}</h3>
                </a>
            </div>
        </div>
    @endforeach
</div>

@endsection
