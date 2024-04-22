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
        @foreach($Product as $product)
        <div class="products-row">
            <button class="cell-more-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" />
                </svg>
            </button>
            <form action="{{route('action.action')}}" method="POST">
            @csrf
            <div class="product-cell image">
                <img src="{{ asset('storage/' . $product->image_url) }}" alt="product">
                <span>{{$product->product_name}}</span>
            </div>
            <div class="product-cell stock">{{$product->description}}</div>
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="hidden" name="category_id" value="{{$product->category_id}}">
            <div class="product-cell price"><span class="cell-label">Price:</span>{{$product->price}}</div>
            <!-- Add to Cart, Buy Now, and Quantity buttons -->
            <div class="product-cell buttons">
                <button class="add-to-cart-button" type="submit" name="action" value="addToCart">Add to Cart</button>
                <div class="quantity-button">
                    <input type="number" class="quantity-input" name="quantity">
                </div>
            </div>
        </form>
        </div>
        @endforeach
    </div>
    <script>
    function addToCart(button) {
        window.location.href = '';
    }
    </script>
</x-userlayout>
