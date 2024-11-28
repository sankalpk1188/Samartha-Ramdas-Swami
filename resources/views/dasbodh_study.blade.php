@extends('layouts/frontLayout/front_design')
@section('content')

<main class="main">
    <section class="section banner-contact bg-10 bg-size" style="background-image: url('assets/imgs/daswani_srs.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
    </section>

    <section class="section pt-0 pb-50">
        <div class="container">
            <div class="row box-list-core-value mt-70">
                <div class="col-lg-6 px-4">
                    <img class="img-project bd-rd16" src="{{asset('assets/imgs/dasbodh_study.png')}}" alt="iori">
                </div>
                <div class="col-lg-6 mb-70 px-4">
                    <div class="box-core-value">
                        <div class="shape-left shape-1"></div>
                        <h3 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">दासबोध अभ्यासाबद्दल माहिती इथे दिसून येईल</h3>
                        <p class="font-md color-grey-400 wow animate__animated animate__fadeIn text-justify" data-wow-delay=".2s">वर्णन येथे दिसेल</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-50 pb-50 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-70 px-4">
                    <div class="box-core-value">
                        <div class="shape-left shape-1"></div>
                        <h2 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">जगभरातील विविध देशांमध्ये दासबोधचा अभ्यास करणारे विद्यार्थी</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="map" style="height: auto;"></div>
                </div>
            </div>
        </div>
    </section>

</main>

<script src="{{asset('assets/js/mapdata.js')}}"></script>
<script src="{{asset('assets/js/worldmap.js')}}"></script>
@endsection('content')