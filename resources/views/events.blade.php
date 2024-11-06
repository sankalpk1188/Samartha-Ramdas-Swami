@extends('layouts/frontLayout/front_design')
@section('content')

    <main class="main">
        <section class="section banner-contact bg-10 bg-size"
            style="background-image: url('assets/imgs/gallery_srs.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
        </section>
        <section class="section mt-">
            <div class="container">
                <div class="row mt-55">
                    <div class="col-xl-3 mb-20 col-lg-6 col-md-6 wow animate__ animate__fadeIn animated" data-wow-delay=".0s"
                        style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                        <div class="card-blog-grid card-blog-grid-2 hover-up">
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe style="height: 400px; width: 100%;" src="{{ asset('assets/imgs/gallery/February_2013.pdf') }}"></iframe>
                            </div>
                            <div class=" text-center border-top">
                                <a href='{{ asset('assets/imgs/gallery/February_2013.pdf') }}' target="_blank">
                                    <h6 class="color-brand-1 mt-5">January 2013 Report</h6>
                                </a>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
    </main>
@endsection('content')
