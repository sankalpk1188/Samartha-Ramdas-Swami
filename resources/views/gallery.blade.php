@extends('layouts/frontLayout/front_design')
@section('content')

@section('styles')
<style>
    .container__img-holder {
        cursor: pointer;
    }
    .container__img-holder:nth-child(3n+1) {
        margin-left: 0;
    }
    .container__img-holder img {
        width: 100%;
        height: 280px;
        display: block;
        object-fit: cover;
    }
    /* Popup Styling */
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
        max-width: 50%;
        width: 100%;
        opacity: 0;
        transform: translateY(-100px);
        -webkit-transform: translateY(-100px);
        -moz-transform: translateY(-100px);
        -ms-transform: translateY(-100px);
        -o-transform: translateY(-100px);
    }
    @media only screen and (max-width: 767px){
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
</style>
@endsection('styles')

<main class="main">
    <section class="section mt-50 mb-30">
        <div class="container">
            <div class="text-center">
                <h3 class="color-brand-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Photo Gallery </h3>
                {{-- <p class="font-md color-grey-300 wow animate__animated animate__fadeIn" data-wow-delay=".1s"></p> --}}
            </div>
            <div class="mt-30 mb-60">
                <ul class="list-buttons nav nav-tabs border-0 mb-15" role="tablist">
                    @foreach($category as $cat)
                    <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                        <a class="@if((Request()->id == $cat->id) || ($activeId == $cat->id)) active @endif" href="{{url('gallery/'.$cat->id.'/'.Str::slug($cat->name))}}">{{$cat->name}}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="tab-content wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="row d-flex justify-content-center mt-50">
                        @if(count($photos) > 0)
                        @foreach($photos as $row)
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card-plan-style-2 hover-up container__img-holder mb-15">
                                <img class="bd-rd16" src="{{asset('assets/imgs/gallery/'.$row->image)}}" alt="">
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-md-8 col-sm-12">
                            <div class="alert alert-dark fw-bold">No photos available</div>
                        </div>
                        @endif

                        <nav class="justify-content-center d-flex mt-10">
                            <ul class="pagination">
                                {{$photos->appends(request()->query())->links('pagination::bootstrap-4')}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-popup">
            <img src="" alt="Popup Image">
            <div class="close-btn"><div class="bar"></div><div class="bar"></div></div>
        </div>
    </section>
</main>

@section('scripts')
<script>
    $(document).ready(function() {

  // required elements
  var imgPopup = $('.img-popup');
  var imgCont  = $('.container__img-holder');
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
