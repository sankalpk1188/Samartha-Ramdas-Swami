@extends('layouts/frontLayout/front_design')
@section('content')

    <section class="section banner-contact bg-10 bg-size"
        style="background-image: url('assets/imgs/gallery_srs.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
    </section>
    
    <section class="section">
        <div class="container">
            <div class="row mt-50">
                <div class="col-lg-3 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="card-offer card-we-do hover-up" style="background-color: #fff4ed;">
                        <div class="card-image">
                            <img src="assets/imgs/music_icon.png" alt="iori">
                        </div>
                        <div class="card-info">
                            <h5 class="color-brand-1 mb-10">
                                <a class="color-brand-1" href="Seamless importing and round-tripping of Microsoft Project plans, Excel files &amp; CSV files.">जय जय रघुवीर समर्थ</a>
                            </h5>
                            <div class="box-button-offer">
                                <a href="https://samarthramdas400.in/wp-content/uploads/audio/Jay-Jay-Raghuveer-Samarth.mp3" class="btn btn-default font-sm-bold pl-0 color-brand-1">फाइल डाउनलोड करा <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="card-offer card-we-do hover-up" style="background-color: #fff4ed;">
                        <div class="card-image">
                            <img src="assets/imgs/music_icon.png" alt="iori">
                        </div>
                        <div class="card-info">
                            <h5 class="color-brand-1 mb-10">
                                <a class="color-brand-1" href="Seamless importing and round-tripping of Microsoft Project plans, Excel files &amp; CSV files.">जय जय रघुवीर समर्थ</a>
                            </h5>
                            <div class="box-button-offer">
                                <a href="https://samarthramdas400.in/wp-content/uploads/audio/Jay-Jay-Raghuveer-Samarth.mp3" class="btn btn-default font-sm-bold pl-0 color-brand-1">फाइल डाउनलोड करा <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="card-offer card-we-do hover-up" style="background-color: #fff4ed;">
                        <div class="card-image">
                            <img src="assets/imgs/music_icon.png" alt="iori">
                        </div>
                        <div class="card-info">
                            <h5 class="color-brand-1 mb-10">
                                <a class="color-brand-1" href="Seamless importing and round-tripping of Microsoft Project plans, Excel files &amp; CSV files.">जय जय रघुवीर समर्थ</a>
                            </h5>
                            <div class="box-button-offer">
                                <a href="https://samarthramdas400.in/wp-content/uploads/audio/Jay-Jay-Raghuveer-Samarth.mp3" class="btn btn-default font-sm-bold pl-0 color-brand-1">फाइल डाउनलोड करा <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="card-offer card-we-do hover-up" style="background-color: #fff4ed;">
                        <div class="card-image">
                            <img src="assets/imgs/music_icon.png" alt="iori">
                        </div>
                        <div class="card-info">
                            <h5 class="color-brand-1 mb-10">
                                <a class="color-brand-1" href="Seamless importing and round-tripping of Microsoft Project plans, Excel files &amp; CSV files.">जय जय रघुवीर समर्थ</a>
                            </h5>
                            <div class="box-button-offer">
                                <a href="https://samarthramdas400.in/wp-content/uploads/audio/Jay-Jay-Raghuveer-Samarth.mp3" class="btn btn-default font-sm-bold pl-0 color-brand-1">फाइल डाउनलोड करा <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('scripts')
    <script>
        $(document).ready(function() {

            // required elements
            var imgPopup = $('.img-popup');
            var imgCont = $('.container__img-holder');
            var popupImage = $('.img-popup img');
            var closeBtn = $('.close-btn');

            // handle events
            imgCont.on('click', function() {
                var img_src = $(this).children('img').attr('src');
                imgPopup.children('img').attr('src', img_src);
                imgPopup.addClass('opened');
            });

            $(imgPopup, closeBtn).on('click', function() {
                imgPopup.removeClass('opened');
                imgPopup.children('img').attr('src', '');
            });

            popupImage.on('click', function(e) {
                e.stopPropagation();
            });

        });
    </script>
@endsection('scripts')
@endsection('content')
