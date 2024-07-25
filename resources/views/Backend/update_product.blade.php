@extends('backend.master')
@section('content')

@section('site-title')
    Admin | Update Product
@endsection
@section('page-main-title')
    Update Product
@endsection

<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xl-12">
            <!-- File input -->
            <form action="/update-product" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    @if (Session::has('message'))
                        <p class="text-danger text-center">{{ Session::get('message') }}</p>
                    @endif
                    <div class="card-body">

                        <div class="row">
                            <div class="mb-3 col-6">
                                <input type="text" name="update_id" value="{{$data->id}}" id="">
                                <label for="formFile" class="form-label">Name</label>
                                <input class="form-control" value="{{ $data->type_name }}" type="text"
                                    name="name" />
                            </div>
                            <div class="mb-3 col-6">
                                <label for="formFile" class="form-label">Price</label>
                                <input class="form-control" value="{{ $data->price }}" type="text" name="price" />
                            </div>
                            <div class="mb-3 col-6">
                                <label for="formFile" class="form-label">Duration</label>
                                <input class="form-control" value="{{ $data->Duration }}" type="number"
                                    name="Duration" />
                            </div>


                            <div class="mb-3 col-6">
                                <label for="formFile" class="form-label">Discount</label>
                                <select name="discount" class="form-control size-color" multiple="multiple">
                                    <option value="0" @if ($data->discount == 0) selected @endif>0%</option>
                                    <option value="5" @if ($data->discount == 5) selected @endif>5%</option>
                                    <option value="10" @if ($data->discount == 10) selected @endif>10%
                                    </option>
                                    <option value="20" @if ($data->discount == 20) selected @endif>20%
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="formFile" class="form-label text-danger">Description</label>
                                <textarea name="description" class="form-control" cols="30" rows="10">{{ $data-> description }}</textarea>
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
