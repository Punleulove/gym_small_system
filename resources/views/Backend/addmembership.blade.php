@extends('backend.master')
@section('content')

@section('site-title')
    User | Add Membership
@endsection
@section('page-main-title')
    Add Membership
@endsection

<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- @if (Session::has('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "insert Success !",
                icon: "success"
            });
        </script>
        @endif --}}
        @if (Session::has('unsuccess'))
            <script>
                Swal.fire({
                    title: " Error!",
                    text: " wrong data!",
                    icon: "error"
                });
            </script>
        @endif
        <div class="col-xl-12">
            <!-- File input -->
            <form action="/addmebership" method="post">
                @csrf
                <div class="card">

                    <div class="card-body">

                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="formFile" class="form-label">Name</label>
                                <input class="form-control" type="text" name="name" />
                            </div>
                            <div class="mb-3 col-6">
                                <label for="formFile" class="form-label">Membership type</label>
                                <select name="gender" id="" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="formFile" class="form-label">phonenumber</label>
                                <input class="form-control" type="text" name="phonenumber" />
                            </div>
                            <div class="mb-3 col-6">
                                <label for="formFile" class="form-label">Membership type</label>
                                <select name="type_member" class="form-control">
                                    @foreach ($type as $item)
                                        {
                                        <option value="{{ $item->id }}">{{ $item->type_name }}</option>
                                        }
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="formFile" class="form-label">Start date</label>
                                <input class="form-control" type="date" name="start_date" />
                            </div>
                              <div class="mb-3 col-6">
                                <label for="formFile" class="form-label">End date</label>
                                <input class="form-control" type="date" name="end_date" />
                            </div>



                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" value="Add Post">
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
