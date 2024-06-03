@extends('layouts.dashboard')


@section('title')
    Dashboard Product Page
@endsection

@section('content')
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
        <div class="container-fluid">
            <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                &laquo; Menu
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                            <img src="/images/iconusernew1.png" alt="" class="rounded-circle mr-2 profile-picture" />
                            Hi, Liem
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                            <a href="/dashboard-account.html" class="dropdown-item">
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('home')}}"> Logout </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block mt-2">
                            <img src="/images/icon-cart-filled.svg" alt="" />
                            <div class="card-badge">3</div>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="#" class="nav-link"> Hi, Liem </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block"> Cart </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">My Products</h2>
                <p class="dashboard-subtitle">Manage it well and get money</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('dashboard-products-create')}}" class="btn btn-warning text-white">
                            Add New Product
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/productcard1.png" alt="" class="w-100 mb-2" />
                                <div class="product-title">JBL Medium</div>
                                <div class="product-category">Headset</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/productcard2.png" alt="" class="w-100 mb-2" />
                                <div class="product-title">Consol Ps4</div>
                                <div class="product-category">Console</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/productcard3.png" alt="" class="w-100 mb-2" />
                                <div class="product-title">Cyberpunk Razer Yellow</div>
                                <div class="product-category">Mouse</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/productcard4.png" alt="" class="w-100 mb-2" />
                                <div class="product-title">Black Razer Series</div>
                                <div class="product-category">Mouse</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="card card-dashboard-product d-block">
                            <div class="card-body">
                                <img src="/images/productcard5.png" alt="" class="w-100 mb-2" />
                                <div class="product-title">JBL Level 3</div>
                                <div class="product-category">Headset</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
