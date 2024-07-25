@extends('backend.master')
@section('content')

@section('site-title')
    Admin | Home
@endsection
@section('page-main-title')
    Dashboard
@endsection

<!-- Content wrapper -->
<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1 text-success">Total Sales</h4>
                        <div class="stats-figure">${{$total}}  <i class="bi bi-cash-stack"></i></div>
                        <div class="stats-meta text-success">

                        </div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="#"></a>
                </div><!--//app-card-->
            </div><!--//col-->

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1 text-primary">Membership</h4>
                        <div class="stats-figure">{{$member}} <i class="bi bi-people"></i></div>
                        <div class="stats-meta text-success">

                        </div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="#"></a>
                </div><!--//app-card-->
            </div><!--//col-->
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1 text-warning">Typemembers</h4>
                        <div class="stats-figure">{{$type}} <i class="bi bi-person-vcard"></i></div>

                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="#"></a>
                </div><!--//app-card-->
            </div><!--//col-->
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1 text-success">Users</h4>
                        <div class="stats-figure">{{$users}} <i class="bi bi-people-fill"></i></div>
                    </div><!--//app-card-body-->

                </div><!--//app-card-->
            </div><!--//col-->
        </div><!--//row-->



        <div class="col-xl-12 d-flex p-5">
            <!-- File input -->
            @foreach ($data_ui as $item)
                <div class="plan">
                    <div class="inner">
                        <span class="pricing">
                            <span>
                                ${{ $item->price }} <small>/ m</small>
                            </span>
                        </span>
                        <p class="title">{{ $item->type_name }}</p>
                        <p class="info">
                            {{ $item->description }}
                        </p>
                        <ul class="features">
                            <li>
                                <span class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path fill="currentColor"
                                            d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                        </path>
                                    </svg>
                                </span>
                                <span><strong>Unlock:</strong> all Machine</span>
                            </li>
                            <li>
                                <span class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path fill="currentColor"
                                            d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                        </path>
                                    </svg>
                                </span>
                                <span>Time: <strong>7:00 AM To 9:00 PM</strong></span>
                            </li>
                            <li>
                                <span class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path fill="currentColor"
                                            d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                        </path>
                                    </svg>
                                </span>
                                <span>File sharing</span>
                            </li>
                        </ul>
                        <div class="action">
                            <a class="button btn-warning" href="/addmebership">
                                Choose plan
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</div>

@endsection
