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
                        .gradient-custom {
            /* fallback for old browsers */
            background: #cd9cf2;

            /* Chrome 10-25, Safari 5.1-6 */
            background: #ffff;
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: #ffff;
            }
            .track-line {
            height: 2px !important;
            background-color: #488978;
            opacity: 1;
            }

            .dot {
            height: 10px;
            width: 10px;
            margin-left: 3px;
            margin-right: 3px;
            margin-top: 0px;
            background-color: #488978;
            border-radius: 50%;
            display: inline-block;
            }

            .big-dot {
            height: 25px;
            width: 25px;
            margin-left: 3px;
            margin-right: 3px;
            margin-top: 0px;
            background-color: #488978;
            border-radius: 50%;
            display: inline-block;
            }

            .big-dot i {
            font-size: 12px;
            }

            .card-stepper {
            z-index: 0
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
        <div class="trackcontent" id="trackcontent{{$order->id}}" style="display:none;">
        <div class="row d-flex justify-content-center align-items-center" style="margin: 1% 12.25%; width: 80%;">

            <div class="col">
                <div class="card card-stepper" style="border-radius: 10px;">
                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column">
                        <span class="lead fw-normal">Your order has been delivered</span>
                        <span class="text-muted small">by DHFL on 21 Jan, 2020</span>
                    </div>
                    </div>
                    <hr class="my-4">
                    <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                    @if($order->status == 'PENDING')
                        <span class="dot"></span>
                    
                    @elseif($order->status == 'CONFIRM ORDER')
                        <span class="dot"></span>
                        <hr class="flex-fill track-line">
                        <span class="dot"></span>
                    
                    @elseif($order->status == 'DELIVERY PARTNER ASSIGNED')
                        <span class="dot"></span>
                        <hr class="flex-fill track-line">
                        <span class="dot"></span>
                        <hr class="flex-fill track-line">
                        <span class="dot"></span>
                    
                    @elseif($order->status == 'OUT FOR DELIVERY')
                        <span class="dot"></span>
                        <hr class="flex-fill track-line">
                        <span class="dot"></span>
                        <hr class="flex-fill track-line">
                        <span class="dot"></span>
                        <hr class="flex-fill track-line">
                        <span class="dot"></span>
                    
                    @else
                    
                        <span class="dot"></span>
                        <hr class="flex-fill track-line">
                        <span class="dot"></span>
                        <hr class="flex-fill track-line">
                        <span class="dot"></span>
                        <hr class="flex-fill track-line">
                        <span class="dot"></span>
                        <hr class="flex-fill track-line">
                        <span class="d-flex justify-content-center align-items-center big-dot dot"><i class="fa fa-check text-white"></i></span>

                    
                    @endif
                    </div>

                    <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="d-flex flex-column align-items-start"><span>15 Mar</span><span>Pending Order</span></div>
                    <div class="d-flex flex-column justify-content-center"><span>15 Mar</span><span>Order Confirmed</span></div>
                    <div class="d-flex flex-column justify-content-center align-items-center"><span>15 Mar</span><span>Delivery Partner Assigned</span></div>
                    <div class="d-flex flex-column align-items-center"><span>15 Mar</span><span>Out for delivery</span></div>
                    <div class="d-flex flex-column align-items-end"><span>15 Mar</span><span>Delivered</span></div>
                    </div>

                </div>
                </div>
            </div>
        </div>
        </div>
        <div class="table-content" id="tablecontent{{$order->id}}">
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
                <input type="hidden" name="order_id" value="">
                <button type="submit" id="viewcontent" class="action view-btn" data-order-id="{{$order->id}}">View</button>
                    <button data-mdb-button-init data-mdb-ripple-init type="submit" class="action btn-outline-primary track-btn" data-track-id="{{$order->id}}">Track Order</button>
            </div>
                <div class="card-body contentofview" id="contentofview{{$order->id}}" style="display:none;width: 100%;">
                            <div class="row d-flex justify-content-center align-items-center" style="width:100%">
                                        <div class="card-body p-4">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <p class="lead fw-normal mb-0" style="color: #a8729a;">OrderId #{{$order->id}}</p>
                                            </div>
                                            @foreach($Items[$order->id] as $products)
                                            <div class="card shadow-0 border mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="{{ asset('storage/' . $products->image_url) }}" class="img-fluid" alt="Phone">
                                                        </div>
                                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0">{{$products->product_name}}</p>
                                                        </div>
                                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0 small"></p>
                                                        </div>
                                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0 small"></p>
                                                        </div>
                                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0 small">Quantity:{{$products->quantity}}</p>
                                                        </div>
                                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0 small">Price:{{$products->unit_price}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="d-flex justify-content-between pt-2">
                                                <p class="fw-bold mb-0">Order Details</p>
                                                <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> &#8377;{{$order->amount}}</p>
                                            </div>
                                            <div class="d-flex justify-content-between pt-2">
                                                <p class="text-muted mb-0">Invoice Number : 788152</p>
                                                <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> &#8377;19.00</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="text-muted mb-0">Invoice Date : 22 Dec,2019</p>
                                                <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> &#8377;12.00</p>
                                            </div>
                                            <div class="d-flex justify-content-between mb-5">
                                                <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p>
                                                <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                                            </div>
                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <!-- <div class="text-left">
                                                    <button type="button" id="submit" class="btn btn-">Download</button>
                                                    </div> -->
                                                    <div class="text-right">
                                                    <p class="text-muted mb-2"><span class="fw-bold me-4">Total Paid:</span>&#8377;{{$order->amount}}</p>

                                                    <a href="{{url('invoice',$order->id)}}">View</a>
                                                        <button type="submit" id="submit" class="btn btn-primary">Cancel Order</button>
                                                        <button type="button" id="cancelbutton" class="btn btn-secondary cancel-btn" data-order-id="{{$order->id}}">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                </div>
        </div>
        @endforeach
    </div>

    <script>
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('view-btn')) {
                var orderId = event.target.getAttribute('data-order-id');
                var modal = document.getElementById('contentofview' + orderId);
                var tablecontent=document.getElementById('tablecontent' + orderId);
                modal.style.display = modal.style.display === 'block' ? 'none' : 'block';
            } else if (event.target.classList.contains('cancel-btn')) {
                var orderId = event.target.getAttribute('data-order-id');
                var modal = document.getElementById('contentofview' + orderId);
                modal.style.display = 'none';
            }
            else if (event.target.classList.contains('track-btn')) {
                var orderId = event.target.getAttribute('data-track-id');
                var modal = document.getElementById('trackcontent' + orderId);
                modal.style.display = modal.style.display === 'block' ? 'none' : 'block';
            } else if (event.target.classList.contains('cancel-btn')) {
                var orderId = event.target.getAttribute('data-order-id');
                var modal = document.getElementById('contentofview' + orderId);
                modal.style.display = 'none';
            }
        });
    </script>
</x-userlayout>