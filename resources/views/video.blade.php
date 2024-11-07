@extends('layouts/frontLayout/front_design')
@section('content')

    <section class="section banner-contact bg-10 bg-size"
        style="background-image: url('assets/imgs/gallery_srs.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
    </section>
    <section class="section mt-50 mb-50 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <iframe 
                        width="400" 
                        height="300" 
                        src="https://www.youtube.com/embed/YIR3g9VAhBg?si=SWlscCBc3aoD-PMU" 
                        frameborder="0" 
                        allow="autoplay; encrypted-media" 
                        allowfullscreen
                        style="width:100%; height: 315px;">
                    </iframe>
                </div>
                <div class="col-lg-4">
                    <iframe
                        width="400" 
                        height="300"
                        src="https://www.youtube.com/embed/YIR3g9VAhBg?si=MfSQI8u9CUunMpYr"
                        frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen
                        style="width:100%; height: 315px;">
                    </iframe>
                </div>
                <div class="col-lg-4">
                    <iframe 
                        width="400" 
                        height="300" 
                        src="https://www.youtube.com/embed/YIR3g9VAhBg?si=SWlscCBc3aoD-PMU" 
                        frameborder="0" 
                        allow="autoplay; encrypted-media" 
                        allowfullscreen
                        style="width:100%; height: 315px;">
                    </iframe>
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
