<x-layout>
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
        @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");

        .content-customer{
            width:100%;
            height:auto;
            overflow-Y:scroll;
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($Orders as $order)
                                <tr>
                                    <td>
                                        <img alt="..." src="{{ asset('storage/user.png') }}" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            {{$order->name}}
                                        </a>
                                    </td>
                                    <td>
                                        {{$order->date}}
                                    </td>
                                    <td>
                                        <a class="text-heading font-semibold" href="#">
                                            # {{$order->id}}
                                        </a>
                                    </td>
                                    <td>
                                        {{$order->amount}}
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>{{$order->status}}
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{route('')}}" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                        <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                    </div>
                </div>
</x-layout>