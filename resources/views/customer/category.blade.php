<x-userlayout>
    <style>
        * {
                box-sizing: border-box;
            }

            body,
            html {
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%;
                font-family: "Poppins", sans-serif;
            }


            .gridView {
                display: flex;
                flex-wrap: wrap;
                margin: 0 -8px;
            }

            .gridView .products-row {
                margin: 8px;
                width: calc(25% - 16px);
                background-color: #1d283c;
                padding: 8px;
                border-radius: 10px;
                cursor: pointer;
                transition: transform 0.2s;
                position: relative;
            }

            .gridView .products-row:hover {
                transform: scale(1.01);
            }

            .gridView .products-row:hover .cell-more-button {
                display: flex;
            }

            .gridView .products-row .cell-more-button {
                border: none;
                padding: 0;
                border-radius: 10px;
                position: absolute;
                top: 16px;
                right: 16px;
                z-index: 1;
                display: none;
            }

            .gridView .product-cell {
                color: #fff;
                font-size: 14px;
                margin-bottom: 8px;
            }

            .gridView .product-cell:not(.image) {
                display: flex;
                justify-content: space-between;
            }

            .gridView .product-cell.image span {
                font-size: 18px;
                line-height: 24px;
            }

            .gridView .product-cell img {
                width: 100%;
                height: 160px;
                border-radius: 10px;
                margin-bottom: 16px;
            }

    </style>
        <div class="products-area-wrapper gridView">
                @foreach($Category as $category)
                    <div class="products-row">
                        <button class="cell-more-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                        </button>
                        <a href="{{route('productbyid.listproductsbyId',['id' => $category->id] )}}">
                            <div class="product-cell image">
                                <img src="{{ asset('storage/' . $category->image_url) }}" alt="product">
                                <span>{{ $category->category_name}}</span>
                            </div>
                            <div class="product-cell stock">{{$category->description}}</div>
                            <input type="hidden" name="category_id" value="{{$category->id}}">
                        </a>
                    </div>
                @endforeach
        </div>
</x-userlayout>
