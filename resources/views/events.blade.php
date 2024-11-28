@extends('layouts/frontLayout/front_design')
@section('content')

    <main class="main">
        <section class="section banner-contact bg-10 bg-size"
            style="background-image: url('assets/imgs/gallery_srs.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
        </section>
        
        <section class="section mt-40">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-6">
                        <h2 class="color-brand-1 mb-50 wow animate__ animate__fadeInUp animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">कार्यक्रम आणि बातम्या</h2>
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col-lg-3 col-md-6 col-sm-6 wow animate__ animate__fadeIn animated" data-wow-delay=".s" style="visibility: visible; animation-name: fadeIn;">
                        <div class="card-team mb-30">
                            <div class="card-image">
                                <img src="{{asset('assets/imgs/event_photo.png')}}" alt="event">
                            </div>
                            <div class="card-info">
                                <a class="font-lg" href="#">कार्यक्रम किंवा बातम्यांचे नाव</a>
                                <div class="mb-10 mt-10">
                                    <span class="font-xs color-grey-500">November 17, 2022</span>
                                    <span class="font-xs color-grey-500 icon-read">लेखकाचे नाव</span>
                                </div>
                                <p class="font-xs color-grey-400">कार्यक्रमाचे वर्णन येथे दिसेल</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow animate__ animate__fadeIn animated" data-wow-delay=".s" style="visibility: visible; animation-name: fadeIn;">
                        <div class="card-team mb-30">
                            <div class="card-image">
                                <img src="{{asset('assets/imgs/event_photo.png')}}" alt="event">
                            </div>
                            <div class="card-info">
                                <a class="font-lg" href="#">कार्यक्रम किंवा बातम्यांचे नाव</a>
                                <div class="mb-10 mt-10">
                                    <span class="font-xs color-grey-500">November 17, 2022</span>
                                    <span class="font-xs color-grey-500 icon-read">लेखकाचे नाव</span>
                                </div>
                                <p class="font-xs color-grey-400">कार्यक्रमाचे वर्णन येथे दिसेल</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow animate__ animate__fadeIn animated" data-wow-delay=".s" style="visibility: visible; animation-name: fadeIn;">
                        <div class="card-team mb-30">
                            <div class="card-image">
                                <img src="{{asset('assets/imgs/event_photo.png')}}" alt="event">
                            </div>
                            <div class="card-info">
                                <a class="font-lg" href="#">कार्यक्रम किंवा बातम्यांचे नाव</a>
                                <div class="mb-10 mt-10">
                                    <span class="font-xs color-grey-500">November 17, 2022</span>
                                    <span class="font-xs color-grey-500 icon-read">लेखकाचे नाव</span>
                                </div>
                                <p class="font-xs color-grey-400">कार्यक्रमाचे वर्णन येथे दिसेल</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow animate__ animate__fadeIn animated" data-wow-delay=".s" style="visibility: visible; animation-name: fadeIn;">
                        <div class="card-team mb-30">
                            <div class="card-image">
                                <img src="{{asset('assets/imgs/event_photo.png')}}" alt="event">
                            </div>
                            <div class="card-info">
                                <a class="font-lg" href="#">कार्यक्रम किंवा बातम्यांचे नाव</a>
                                <div class="mb-10 mt-10">
                                    <span class="font-xs color-grey-500">November 17, 2022</span>
                                    <span class="font-xs color-grey-500 icon-read">लेखकाचे नाव</span>
                                </div>
                                <p class="font-xs color-grey-400">कार्यक्रमाचे वर्णन येथे दिसेल</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection('content')
