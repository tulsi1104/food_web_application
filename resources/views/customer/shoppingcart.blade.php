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
                height: auto;
                width:auto;
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
            .proceed-button{
                padding:10px;
                width:100%;
                background-color: #1d283c;
                color:white;
                border-radius: 10px;
                margin-bottom:15px;
                position: relative;
            }
            .quantity-input{
                width:100%;
            }
            .buy-now-button{
                width:100%;
                margin:9px;
            }

            .cell-more-checkbox {
                position: absolute;
                top: 15px; /* Adjust as needed */
                right: 15px; /* Adjust as needed */
                z-index: 1; /* Ensure it's above the image */
            }
            

    </style>
    <form action="{{route('action.action')}}" method="POST">

    <div class="">
        <button class="proceed-button" id="checkbox-count" type="submit" name="action" value="buyNow">
            Proceed to Buy
        </button>
    </div>
   <div class="products-area-wrapper gridView">
        @foreach($Shopping_product as $product)
        <div class="products-row">
            <form action="{{route('action.action')}}" method="POST">
            @csrf
                <input type="checkbox" class="cell-more-checkbox" id="cell-more-checkbox">
            <div class="product-cell image">
                <img src="{{ asset('storage/' . $product->image_url) }}" alt="product">
                <span>{{$product->product_name}}</span>
            </div>
            <div class="product-cell stock">{{$product->description}}</div>
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="hidden" name="category_id" value="{{$product->category_id}}">
            <input type="hidden" name="price" value="{{$product->price}}">
            <div class="product-cell price"><span class="cell-label">Price:</span>{{$product->price}}</div>
            <div class="quantity-button">
                <input type="number" class="quantity-input" name="quantity" value="{{$product->quantity}}">
            </div>            
        </form>
        </div>
        @endforeach
    </div>
    <script>
        const checkboxes = document.querySelectorAll('.cell-more-checkbox');

        function updateCount() {
            const checkedCount = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;
            document.getElementById('checkbox-count').textContent = `Proceed to Buy (${checkedCount})`;
        }
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateCount);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const proceedButton = document.querySelector('.proceed-button');
            const checkboxes = document.querySelectorAll('.cell-more-checkbox');

            proceedButton.addEventListener('click', function() {
                const productData = [];

                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) 
                    {
                        const form = checkbox.closest('form');
                        const product = {
                            product_name: form.querySelector('.product-cell.image span').textContent,
                            product_img: form.querySelector('.product-cell.image img').src,
                            product_details: form.querySelector('.product-cell.stock').textContent,
                            product_id: form.querySelector('input[name="product_id"]').value,
                            category_id: form.querySelector('input[name="category_id"]').value,
                            price: form.querySelector('input[name="price"]').value,
                            quantity: form.querySelector('.quantity-input').value
                        };
                        productData.push(product);
                    }
                });

                localStorage.setItem('cartData', JSON.stringify(productData));
            });

            function updateCount() {
                const checkedCount = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;
                document.getElementById('checkbox-count').textContent = `Proceed to Buy (${checkedCount})`;
            }

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateCount);
            });
        });
    </script>
</x-userlayout>
