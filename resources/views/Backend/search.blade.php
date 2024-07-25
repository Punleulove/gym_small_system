@extends('backend.master')
@section('content')
    <div class="content-wrapper">
    @section('site-title')
        Admin | Search
    @endsection
    @section('page-main-title')
        Search Membership
    @endsection



    <div class="container-xxl flex-grow-1 container-p-y">
        <div class=" form-controll">
            <form action="/search" method="get">
                <input type="number"name="search_code" class="box" placeholder="Code">
                <button class="btn btn-primary">
                    <i class="menu-icon tf-icons bx bx-search"></i>Search
                </button>
            </form>
        </div>
        @if (Session::has('deletesuccess'))
            <script>
                Swal.fire({
                    title: "Good job!",
                    text: "Delete Successfully !",
                    icon: "success"
                });
            </script>
        @endif
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>code</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>Duration</th>
                            <th>Type member</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">


                        @foreach ($rand_code as $item)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $item->rand_code }}</strong>
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}|$</td>
                                <td>{{ $item->interval }} /Day</td>
                                <td>{{ $item->pname }}</td>
                                <td>{{ $item->join_date }}</td>
                                <td>{{$item->end_date}}</td>
                                {{-- <td>{{ $end_date= $item->join_date->addDays($item->Duration) }}</td> --}}
                                <td>
                                    @if ($item->end_date< ToDay())
                                        <p style="color: red">Inactive</p>
                                    @else
                                        <p style="color: green">Active</p>
                                    @endif
                                </td>


                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/print/{{ $item->id }}"> <i
                                                    class="bi bi-receipt"></i> Invoice</a>
                                            <a class="dropdown-item"><i class="bx bx-edit-alt me-1"></i> Edit</a>

                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal"
                                                id="remove-post-key" data-value="{{ $item->id }}"
                                                href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-3">
            <form action="/delete-membership" method="post">
                @csrf
                <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Are you sure to remove this post?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="remove-val" name="remove_id">
                                <button type="submit" class="btn btn-danger">Confirm</button>
                                <button type="button" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        {{-- <form action="/print" method="post">
            @csrf --}}
        <!-- Modal -->
        <div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="invoiceModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="invoiceModalLabel">Invoice Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="invoiceDetails">
                        <!-- Invoice details will be loaded here -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="printInvoice()">Print</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- </form> --}}
        <hr class="my-5" />
    </div>
    <!-- / Content -->
</div>
</div>

@endsection
