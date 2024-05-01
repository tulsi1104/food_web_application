<x-layout>
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
        @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
        .content-customer {
            width: 100%;
            height: auto;
            overflow-Y: scroll;
        }
    </style>
    <div class="content-customer">
        <div class="card-header">
            <h5 class="mb-0">Customers</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-nowrap">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Address</th>
                        <th></th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach($customer as $customerr)
                            <tr>
                                <td>
                                    <img alt="..." src="{{ asset('storage/user.png') }}" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            {{$customerr->name}}
                                        </a>
                                </td>
                                <td>
                                    {{$customerr->email}}
                                </td>
                                <td>
                                    {{$customerr->phone_number}}
                                </td>
                                <td>
                                    {{$customerr->address}}
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
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