@extends('layouts/frontLayout/front_design')
@section('content')
    <style>
        .img-round {
            border-radius: 10px;
            transition: transform 0.3s ease, border-radius 0.3s ease;
        }

        .img-round:hover {
            transform: scale(1.05);
            border-radius: 20px;
        }

        .img-popup {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 75%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9;
            display: none;
        }

        .img-popup img {
            max-width: 40%;
            width: 100%;
            opacity: 0;
            transform: translateY(-100px);
            -webkit-transform: translateY(-100px);
            -moz-transform: translateY(-100px);
            -ms-transform: translateY(-100px);
            -o-transform: translateY(-100px);
        }

        @media only screen and (max-width: 767px) {
            .img-popup img {
                max-width: 95%;
            }
        }

        .close-btn {
            width: 35px;
            height: 30px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }

        .close-btn .bar {
            height: 4px;
            background: #fff;
        }

        .close-btn .bar:nth-child(1) {
            transform: rotate(45deg);
        }

        .close-btn .bar:nth-child(2) {
            transform: translateY(-4px) rotate(-45deg);
        }

        .opened {
            display: flex;
            z-index: 9999;
        }

        .opened img {
            animation: animatepopup 1s ease-in-out .8s;
            -webkit-animation: animatepopup .3s ease-in-out forwards;
        }

        @keyframes animatepopup {
            to {
                opacity: 1;
                transform: translateY(0);
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
            }
        }

        @media screen and (max-width: 880px) {
            .container__img-holder:nth-child(3n+1) {
                margin-left: 16px;
            }
        }

        .img-size {
            min-height: -webkit-fill-available;
        }
    </style>

    <section class="section banner-contact bg-10 bg-size"
        style="background-image: url('assets/imgs/gallery_srs.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
    </section>
    <section class="section mt-50 mb-50 ">
        <div class="container">
            <div class="mt-30 mb-60">
                <ul class="list-buttons list-buttons-circle nav nav-tabs color-brand-1" role="tablist">
                    <li class="wow animate__ animate__fadeIn animated " data-wow-delay=".0s"
                        style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;"><a href="#tab-explore-1"
                            data-bs-toggle="tab" role="tab" aria-controls="tab-explore-1" aria-selected="true"
                            class="active">सज्जनगडावरील दर्शनीय स्थळे</a>
                        </li>
                    <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><a href="#tab-explore-2"
                            data-bs-toggle="tab" role="tab" aria-controls="tab-explore-2" aria-selected="false"
                            class="">सज्जनगड परिसर</a></li>
                    <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;"><a href="#tab-explore-3"
                            data-bs-toggle="tab" role="tab" aria-controls="tab-explore-3" aria-selected="false"
                            class="">उत्सव फोटो </a></li>
                    {{-- <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;"><a href="#tab-explore-4"
                            data-bs-toggle="tab" role="tab" aria-controls="tab-explore-4" aria-selected="false">Travel
                            Camera</a></li> --}}
                </ul>
                <div class="tab-content wow animate__ animate__fadeIn animated" data-wow-delay=".0s"
                    style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                    <div class="tab-pane fade active show" id="tab-explore-1" role="tabpanel"
                        aria-labelledby="tab-explore-1">
                        <div class="container">
                            <div class=" row ">
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img class="img-round"
                                        src="assets/imgs/gallery/1.png">
                                </div>
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img class="img-round"
                                        src="assets/imgs/gallery/2.png">
                                </div>
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img class="img-round"
                                        src="assets/imgs/gallery/3.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-explore-2" role="tabpanel" aria-labelledby="tab-explore-2">
                        <div class="container">
                            <div class=" row ">
                                <div class="col-sm-4 hover-up container__img-holder">

                                    <img class="img-round"
                                        src="assets/imgs/gallery/p1.png">
                                </div>
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img class="img-round"
                                        src="assets/imgs/gallery/p2.png">
                                </div>
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img
                                        class="img-round"src="assets/imgs/gallery/p3.png">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-explore-3" role="tabpanel" aria-labelledby="tab-explore-3">
                        <div class="container">
                            <div class=" row ">
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img class="img-round"
                                        src="assets/imgs/gallery/u1.png">
                                </div>
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img class="img-round"
                                        src="assets/imgs/gallery/u2.png">
                                </div>
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img class="img-round"
                                        src="assets/imgs/gallery/u3.png">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-explore-4" role="tabpanel" aria-labelledby="tab-explore-4">
                        <div class="container">
                            <div class=" row ">
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img class="img-round"
                                        src="assets/images/gallery/u1.png">
                                </div>
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img class="img-round"
                                        src="https://arthbodh.ycstech.co/assets/images/gallery/1712715603.media2.jpg">
                                </div>
                                <div class="col-sm-4 hover-up container__img-holder">
                                    <img class="img-round"
                                        src="https://arthbodh.ycstech.co/assets/images/gallery/1712715603.media2.jpg">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="img-popup">
                        <img src="" alt="Popup Image">
                        <div class="close-btn">
                            <div class="bar"></div>
                            <div class="bar"></div>
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
