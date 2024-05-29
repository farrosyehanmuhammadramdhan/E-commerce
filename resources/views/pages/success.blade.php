@extends('layouts.success')


@section('title')
    Success Page
@endsection

@section('content')
<div class="page-content page-success">
    <div class="section-success">
        <div class="container">
            <div class="row align-items-center row-login justify-content-center">
                <div class="col-lg-6 text-center">
                    <img src="/images/success.svg" alt="" class="mb-4" data-aos="fade-up" data-aos-delay="600" />
                    <h2 data-aos="fade-up" data-aos-delay="800">Transation Processed !</h2>
                    <p data-aos="fade-up" data-aos-delay="1000">
                        Please wait for confirmation email from us and We will inform you of the receipt as soon as possible!
                    </p>
                    <div>
                        <a href="/dashboard.html" class="btn btn-warning text-white w-50 mt-4" data-aos="fade-up" data-aos-delay="1200">
                            My Dashboard
                        </a>
                        <a href="/index.html" class="btn btn-signup w-50 mt-2" data-aos="fade-up" data-aos-delay="1400">
                            Go To Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection