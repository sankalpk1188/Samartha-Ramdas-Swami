@extends('layouts/frontLayout/front_design')
@section('content')
<main class="main">
    <section class="section box-404">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-sm-12 mb-30 text-center text-md-start"><img src="{{asset('assets/imgs/page/404/404.png')}}" alt="iori"></div>
                        <div class="col-md-7 col-sm-12 text-center text-md-start">
                            <h1 class="color-brand-1 font-84 mb-10 wow animate__animated animate__fadeIn" data-wow-delay=".0s">@yield('code')</h1>
                            <h3 class="color-brand-1 mb-25 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Oops, nothing to see here</h3>
                            <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">Unfortunately, we couldn't find what you were looking for or the page no longer exists.</p>
                            <div class="mt-50 wow animate__animated animate__fadeIn" data-wow-delay=".3s"><a class="btn btn-default color-grey-900 pl-0" href="{{url('/')}}">
                                <svg class="w-6 h-6 icon-16 mr-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>Back to Homepage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-bottom bd-grey-80 mt-110 mb-0"></div>
        </div>
    </section>
</main>
@endsection('content')
