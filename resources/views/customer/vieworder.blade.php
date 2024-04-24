<x-userlayout>
    <style>
        * {
            padding: 0;
            margin: 0;
            position: relative;
            box-sizing: border-box;
            }

            .listing-section, .cart-section {
            width: 100%;
            float: left;
            padding: 1%;
            border-bottom: 0.01em solid #dddbdb;
            }

            .product {
            float: left;
            width: 23%;
            border-radius: 2%;
            margin: 1%;
            }

            .product:hover {
            box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
            -webkit-box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);  
            -moz-box-shadow:    1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
            }

            .image-box {
            width: 100%;
            overflow: hidden;
            border-radius: 2% 2% 0 0;
            }

            .images {
            height: 15em;
            background-size: cover; 
            background-position: center center; 
            background-repeat: no-repeat;
            border-radius: 2% 2% 0 0;
            transition: all 1s ease;
            -moz-transition: all 1s ease;
            -ms-transition: all 1s ease;
            -webkit-transition: all 1s ease;
            -o-transition: all 1s ease;
            }

            .images:hover {
            transform: scale(1.2);
            overflow: hidden;
            border-radius: 2%;
            }


            .text-box {
            width: 100%;
            float: left;
            border: 0.01em solid #dddbdb;
            border-radius: 0 0 2% 2%;
            padding: 1em;
            }

            h2, h3 {
            float: left;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 1em;
            text-transform: uppercase;
            margin: 0.2em auto;
            }

            .item, .price {
            clear: left;
            width: 100%;
            text-align: center;
            }

            .price {
            color: white;
            }

            input:focus {
            outline-color: #fdf;
            }

            label {
            width: 60%;
            }

            .text-box input {
            width: 15%;
            clear: none;
            }


            .table-heading, .table-content {
            width: 80%;
            margin: 1% 12.25%;
            float: left;
            background-color: #1d283c;
            color: White;
            border-radius:15px;
            }

            .table-heading h2 {
            padding: 1%;
            margin: 0;
            text-align: center;
            }

            .cart-product {
            width: 50%;
            float: left;
            }

            .cart-price {
            width: 15%;
            float: left;
            }

            .cart-quantity {
            width: 10%;
            float: left;
            }

            .cart-total {
            width: 25%;
            float: left;
            }

            .cart-image-box {
            width: 20%;
            overflow: hidden;
            border-radius: 2%;
            float: left;
            margin: 1%;
            }

            .cart-images {
            height: 7em;
            background-size: cover; 
            background-position: center center; 
            background-repeat: no-repeat;
            }

            .cart-item {
            width: 20%;
            float: left;
            margin: 3.2em 1%;
            text-align: center;
            }
            .cart-description {
            width: 53%;
            float: left;
            margin: 3.2em 1%;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            font-size: 1em;
            text-align: center;
            }

            .cart-price h3, .cart-total h3 {
            margin: 3.2em 5% 3.2em 20%;
            width: 60%;
            }

            .cart-quantity input {
            margin: 3.2em 1%;
            border: none;
            }

            .remove {
            width: 10%;
            margin: 1px;
            float: right;
            clear: right;
            }

            .coupon {
            width: 20%;
            background-color: #1d283c;
            margin: 1% 1% 1% 12.25%;
            float: left;
            height: 6em;
            }

            .coupon input {
            width: 60%;
            border: none;
            margin: 12.75% 5%;
            padding: 1%;
            }

            .coupon button {
            width: 25%;
            float: left;
            clear: right;
            margin: 12% 5% 12% 0;
            }

            .keep-shopping {
            width: 15%;
            height: 6em;
            float: left;
            margin: 1% auto;
            padding: 1%;
            background-color: #1d283c;
            }

            .keep-shopping button {
            text-transform: uppercase;
            margin: 12% auto;
            
            }

            .checkout {
            width: 37.25%;
            margin: 1% 12.75% 1% 1%;
            float: right;
            background-color: #1d283c;
            height: 6em;
            }

            .checkout button {
            width: 30%;
            clear: none;
            margin: 5.4% 0 5.4% 5.5%;
            text-transform: uppercase;
            }

            .final-cart-total {
            width: 15%;
            float: right;
            margin: 7%;
            background-color: White;
            }

            .final-cart-total h3 {
            color: Black;
            } 
            .action{
                width:10%;
                float:left;
                margin:3.2em 1% 3.2em 1%;
            } 
    </style>

<div class="cart-section">
    <div class="table-heading">
        <h2 class="cart-price">#Order Id</h2>
        <h2 class="cart-price">Status</h2>
        <h2 class="cart-price">Total</h2>
        <h2 class="cart-price">Payment Method</h2>
        <h2 class="cart-price">Ordered Date</h2>
        <h2 class="cart-price"></h2>
    </div> 
    @foreach($Order as $order) 
        <div class="table-content">
                <div class="cart-price">
                    <h3 class="price">#{{$order->id}}</h3>
                </div>
                <div class="cart-price">
                    <h3 class="price">{{$order->status}}</h3>
                </div>
                <div class="cart-price">
                    <h3 class="price">&#8377;{{$order->amount}}</h3>
                </div>
                <div class="cart-price">
                    <h3 class="price">{{$order->payment_method}}</h3>
                </div>
                <div class="cart-price">
                    <h3 class="price">{{$order->date}}</h3>
                </div>
                <div class="cart-action">
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <button type="submit" class="action">View</button>
                    </form>
                    <form action="" method="POST">
                        @csrf
                        <button type="submit" class="action">Track Order</button>
                    </form>
                </div>
        </div>
    @endforeach
</x-userlayout>
