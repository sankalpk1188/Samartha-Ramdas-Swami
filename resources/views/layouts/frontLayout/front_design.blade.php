<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/favicon_srs.png')}}">
    <title>@if(!empty($meta_title)){{ $meta_title }} @else {{config('app.name')}} @endif</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(!empty($meta_description)) <meta name="description" content="{{ $meta_title }}"> 
    @else <meta name="description" content="{{config('app.name')}}"> @endif

    <meta property="og:title" content="{{config('app.name')}}" />
    <meta property="og:type" content="site" />
    <meta property="og:description" content="{{config('app.name')}}" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image"  content="{{asset('assets/imgs/favicon_srs.png')}}"  />
    
    <meta name="twitter:title" content="{{config('app.name')}}">
    <meta name="twitter:description" content="{{config('app.name')}}">
    <meta name="twitter:image"  content="{{asset('assets/imgs/favicon_srs.png')}}" >
    <meta name="twitter:card" content="summary_large_image">

    <!-- Stylesheets-->
    <link href="{{asset('assets/css/style.css?v=5.0.0')}}" rel="stylesheet">

    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    @yield('styles')

</head>
<body>
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="page-loading">
                    <div class="page-loading-inner">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
    <!-- Page Header-->
    @include('layouts/frontLayout/front_header')

    @yield('content')

    <div class="lang-switch">
        <button id="langButton" class="lang-button">
            <i class="fa fa-language" style="color: #ffffff; font-size: 25px;"></i>&nbsp;&nbsp; Language
        </button>
    </div>

    <div id="langModal" class="modal">
        <div class="modal-content">
            <div class="modal-header p-1"> 
                <h5 style="color: #902e01;">Select Language</h5>
                <span class="close">&times;</span>
            </div>
            <div class="d-flex">    
                <a href="{{ url('swicth-lang/mr') }}" class="modal-lang-option">Marathi</a>
                <a href="{{ url('swicth-lang/en') }}" class="modal-lang-option">English</a>
            </div>
        </div>
    </div>

    @include('layouts/frontLayout/front_footer')

    <script src="{{asset('assets/js/vendors/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/waypoints.js')}}"></script>
    <script src="{{asset('assets/js/vendors/wow.js')}}"></script>
    <script src="{{asset('assets/js/vendors/magnific-popup.js')}}"></script>
    <script src="{{asset('assets/js/vendors/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/isotope.js')}}"></script>
    <script src="{{asset('assets/js/vendors/scrollup.js')}}"></script>
    <script src="{{asset('assets/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/noUISlider.js')}}"></script>
    <script src="{{asset('assets/js/vendors/slider.js')}}"></script>
    <!-- Count down-->
    <script src="{{asset('assets/js/vendors/counterup.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jquery.countdown.min.js')}}"></script>
    <!-- Count down-->
    <script src="{{asset('assets/js/vendors/jquery.elevatezoom.js')}}"></script>
    <script src="{{asset('assets/js/vendors/slick.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="{{asset('assets/js/main.js?v=5.0.0')}}"></script>
    <script src="{{asset('assets/js/ali-animation.js?v=1.0.0')}}"></script>
    <script>
        const langButton = document.getElementById('langButton');
        const langModal = document.getElementById('langModal');
        const closeModal = document.querySelector('.close');

        langButton.onclick = function() {
            langModal.style.display = 'block';
        };

        closeModal.onclick = function() {
            langModal.style.display = 'none';
        };

        window.onclick = function(event) {
            if (event.target == langModal) {
                langModal.style.display = 'none';
            }
        };
    </script>
    @yield('scripts')

</body>
</html>