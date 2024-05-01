<x-layout>
    <style>
        /* Your CSS styles here */
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
        @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");

        .content-customer {
            width: 100%;
            height: auto;
            overflow-Y: scroll;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-dialog {
            margin: 10% auto;
            width: 80%;
        }

        .modal-content {
            background-color: #fff;
            border-radius: 0.25rem;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-body {
            padding: 1.5rem;
        }

        .modal-footer {
            padding: 1rem 1.5rem;
            border-top: none;
        }

        .btn-close {
            background: transparent;
            border: none;
            position: absolute;
            top: 1rem;
            right: 1.5rem;
            font-size: 1.5rem;
            color: black;
            cursor: pointer;
        }
    </style>

    <div class="content-customer">
        <div class="card-header">
            <h5 class="mb-0">Orders</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-nowrap">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Order Id</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Delivery Partner</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Orders as $order)
                    <tr>
                        <td>
                            <img alt="..." src="{{ asset('storage/user.png') }}" class="avatar avatar-sm rounded-circle me-2">
                            <a class="text-heading font-semibold" href="#">{{$order->name}}</a>
                        </td>
                        <td>{{$order->date}}</td>
                        <td><a class="text-heading font-semibold" href="#"># {{$order->id}}</a></td>
                        <td>&#8377;{{$order->amount}}</td>
                        <td>
                            <span class="badge badge-lg badge-dot"><i class="bg-success"></i>{{$order->status}}</span>
                        </td>
                        <td>
                        @if($order->deliverypartner_id == null)
                                <form action="{{ route('assignpartner.AssignPartner') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{$order->id}}">
                                    <div class="d-flex">
                                    <select class="form-select form-select-sm" name="partner_id" style="width: 216px;">
                                            <option value="">Select Delivery Partner</option>
                                            @foreach($Partner as $partner)
                                                @if($partner->availability == 'available')
                                                    <option value="{{ $partner->id }}">{{ $partner->namee }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary btn-sm mb-1 ms-2" style="background-color: #35558a; padding: 0.25rem 0.5rem;">Assign Partner</button>
                                    </div>
                                </form>
                            @else
                                @foreach($Partner as $partner)
                                        @if($partner->id == $order->deliverypartner_id)
                                        <div class="product-cell image">
                                            <img src="{{ asset('storage/' . $partner->profile_photo) }}" class="avatar avatar-sm rounded-circle me-2" alt="product">
                                            <span>{{$partner->namee}}</span>
                                        </div>
                                        @endif
                                @endforeach
                            @endif
                        </td>

                            <td class="text-end">
                            <a href="#" class="btn btn-sm btn-neutral modalButton" data-modal-id="{{ 'modal_' . $order->id }}">View</a>
                            <div id="{{ 'modal_' . $order->id }}" class="modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0 d-flex justify-content-between align-items-center">
                                            <h3>OrderId #{{$order->id}}</h3>
                                            <button type="button" class="btn-close" aria-label="Close"><i class="bi bi-x"></i></button>
                                        </div>
                                        <div class="modal-body text-start text-black p-4">
                                            <h5 class="modal-title text-uppercase mb-5">{{$order->name}}</h5>
                                            <p class="mb-0" style="color: #35558a;">Payment summary</p>
                                            <hr class="mt-2 mb-4" style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">
                                            @foreach($Items[$order->id] as $product_n)
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-bold mb-0">{{$product_n->product_name}}({{$product_n->quantity}})</p>
                                                <p class="text-muted mb-0">&#8377;{{$product_n->unit_price}}</p>
                                            </div>
                                            @endforeach
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-bold">Total</p>
                                                <p class="fw-bold" style="color: #35558a;">&#8377;{{$order->amount}}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center border-top-0 py-4">
                                        @if($order->status=="DELIVERED")
                                            <form action="{{route('deleteorder.DeleteOrder')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                <button type="button" class="btn btn-primary btn-lg mb-1" style="background-color: #35558a;">Delete Order</button>
                                            </form>
                                        @else
                                            <form action="{{route('confirmorder.ConfirmOrder')}}" method="POST">
                                                @csrf
                                                @foreach($Partner as $partner)
                                                    @if($partner->id == $order->deliverypartner_id)
                                                        <input type="hidden" name="partner_id" value="{{ $order->deliverypartner_id }}">
                                                    @endif
                                                @endforeach
                                                <input type="hidden" name="button" value="{{ $order->button }}">
                                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                <button type="submit" class="btn btn-primary btn-lg mb-1" style="background-color: #35558a;">{{ $order->button }}
                                                </button>
                                            </form>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('modalButton')) {
                var modalId = event.target.getAttribute('data-modal-id');
                document.getElementById(modalId).style.display = 'block';
            } else if (event.target.classList.contains('btn-close')) {
                event.target.closest('.modal').style.display = 'none';
            }
        });
    </script>
</x-layout>
