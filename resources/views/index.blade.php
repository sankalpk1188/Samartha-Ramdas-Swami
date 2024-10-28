@extends('layouts/frontLayout/front_design')
@section('content')

@section('styles')
<style> 
    
</style>
@endsection('styles')

<main class="main">
    <section class="banner-6">
        <div class="container">
            <div class="row align-items-end">
                @if(Session::has('lang') && Session::get('lang')=='mr'|| empty(Session::get('lang')))
                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="box-banner-6">
                            <img class="img-main" src="assets/imgs/banner/rss-swami-home-img.png" alt="iori">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-banner-right-home6">
                            {{-- <span class="title-line line-48 wow animate__animated animate__fadeIn" data-wow-delay=".s">Think. Creative. Solve</span> --}}
                            <h1 class="color-brand-1 mb-20 mt-5 wow animate__animated animate__fadeIn" data-wow-delay=".1s">श्री समर्थ रामदास स्वामी</h1>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="font-md color-grey-500 mb-30 wow animate__animated animate__fadeIn text-justify" data-wow-delay=".2s">बलशाली आणि चारित्र्यसम्पन्न मानवधर्म हे ज्यांचे उद्दिष्ट असे सार्वकालिक संत! त्यांच्या वाणीने सुमारे चारशे वर्षांपूर्वी मरगळलेल्या महाराष्ट्राला संजीवनी दिली होती.<br><br>आजचा भारत गरीबी, भ्रष्ट्राचार दुबळेपणा स्वैराचार, उपभोगवाद, यांच्या जाळ्यात सापडला आहे. विवेक आणि योग्य आचारधर्माची शिकवण देणारे समर्थान्चे विचारच दिशाहीन भरकटणार्‍या आजच्या तरुणाईला योग्य मार्गावर आणू शकतात. आत्मसन्मान, आत्मसंयम, आरोग्य आणि समय व्यवस्थापनाचे भान आणून देणारी श्री रामदासांची शिकवण ही आपली जणू वडिलार्जित संपत्ति ! तिचे आपण संपादन करु या. परमार्थाची कास न सोडता निर्मिलेली खरी व्यवहारवादी आणि त्याच वेळी कर्मयोगी आणि चारित्र्यवान जीवनाची मंत्राक्षरी म्हणजे समर्थवचन!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="box-banner-6">
                            <img class="img-main" src="assets/imgs/banner/rss-swami-home-img.png" alt="iori">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-banner-right-home6">
                            {{-- <span class="title-line line-48 wow animate__animated animate__fadeIn" data-wow-delay=".s">Think. Creative. Solve</span> --}}
                            <h1 class="color-brand-1 mb-20 mt-5 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Shri Samarth Ramdas Swami</h1>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="font-md color-grey-500 mb-30 wow animate__animated animate__fadeIn text-justify" data-wow-delay=".2s">Eternal saints whose goal is strong and characterful humanity! His voice gave life to Maharashtra which had died about four hundred years ago.<br><br>Today, India is caught in the web of poverty, corruption, weakness, immorality, and consumerism. The teachings of Samarth Ramdas, which promote wisdom and righteous conduct, are the very thoughts that can guide the lost and directionless youth of today onto the right path. The teachings of Shri Ramdas, which bring awareness of self-respect, self-discipline, health, and time management, are like an inherited treasure for us. Let us cherish and adopt these teachings. The mantra of a truly practical, yet spiritually rooted life, which upholds both Karma Yoga and strong character, is encapsulated in the words of Samarth!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif    
            </div>
        </div>
    </section>

    <section class="section">
        <div class="box-radius-bottom">
            <div class="container">
                <div class="text-center">
                    <h3 class="color-brand-1 mb-15 wow animate__animated animate__fadeInUp d-none" data-wow-delay=".0s">Loved By Developers, Trusted By Enterprises</h3>
                </div>
                <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                    <div class="row">
                        <div class="col-lg-4 text-center">
                            <img src="assets/imgs/author.png" alt="highlight" class="border-image">
                            <h5 class="color-brand-1 mb-20 mt-5 wow animate__animated animate__fadeIn text-center" data-wow-delay=".1s">विषय</h5>
                        </div>
                        <div class="col-lg-4 text-center">
                            <img src="https://www.ramdasswami.org/wp-content/uploads/2021/08/sahitya-circle-img-wb-01.png" alt="highlight" class="border-image">
                            <h5 class="color-brand-1 mb-20 mt-5 wow animate__animated animate__fadeIn text-center" data-wow-delay=".1s">लेखक</h5>
                        </div>
                        <div class="col-lg-4 text-center">
                            <img src="https://www.ramdasswami.org/wp-content/uploads/2021/08/sahitya-circle-img-wb-01.png" alt="highlight" class="border-image">
                            <h5 class="color-brand-1 mb-20 mt-5 wow animate__animated animate__fadeIn text-center" data-wow-delay=".1s">दासवाणी</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section mt-50 mb-30">
        <div class="container">
            <div class="box-container">
                <div class="row mb-0 project-revert align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-6 mt-30">
                        <span class="btn btn-tag">Business</span>
                        <h2 class="color-brand-1 mt-10 mb-15">Grow your online business now</h2>
                        <p class="font-md color-grey-400">Access advanced order types including limit, market, stop limit and dollar cost averaging. Track your total asset holdings, values and equity over time. Monitor markets, manage your portfolio, and trade crypto on the go.</p>
                        <div class="mt-50 text-start">
                            <a class="btn btn-brand-1 hover-up" href="#">Know More</a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6 mt-30">
                        <div class="box-images-cover text-end">
                            <div class="box-images-inner">
                                <div class="img-reveal">
                                    <img class="img-project bd-rd16" src="assets/imgs/page/homepage5/img-project2.png" alt="iori">
                                </div>
                                <div class="image-7 shape-3">
                                    <img src="assets/imgs/page/homepage1/finger.png" alt="iori">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section mt-100 d-none">
        <div class="container">
            <div class="row mt-50 align-items-center">
                <div class="col-lg-6 mb-30">
                    <div class="title-line mb-10 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">What We Do, What You Get</div>
                    <h2 class="color-brand-1 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">We facilitate the creation of strategy and design</h2>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeIn">
                    <div class="card-offer card-we-do hover-up">
                        <div class="card-image">
                            <img src="assets/imgs/page/homepage2/we-do3.png" alt="iori">
                        </div>
                        <div class="card-info">
                            <h4 class="color-brand-1 mb-10">
                                <a class="color-brand-1" href="What makes us different from others? We give holistic solutions with strategy, design &amp; technology.">Employee Assessments</a>
                            </h4>
                            <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                            <div class="box-button-offer">
                                <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeIn">
                    <div class="card-offer card-we-do hover-up">
                        <div class="card-image">
                            <img src="assets/imgs/page/homepage2/we-do.png" alt="iori">
                        </div>
                        <div class="card-info">
                            <h4 class="color-brand-1 mb-10">
                                <a class="color-brand-1" href="No lag time, no lost effort when priorities change, no email black hole. As team collaboration improves">Smart Installation Tools</a>
                            </h4>
                            <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                            <div class="box-button-offer">
                                <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeIn">
                    <div class="card-offer card-we-do hover-up">
                        <div class="card-image">
                            <img src="assets/imgs/page/homepage2/we-do4.png" alt="iori">
                        </div>
                        <div class="card-info">
                            <h4 class="color-brand-1 mb-10">
                                <a class="color-brand-1" href="Share updates instantly within our project management software, and get the entire team collaborating">Collaborative to the core.</a>
                            </h4>
                            <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                            <div class="box-button-offer">
                                <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeIn">
                    <div class="card-offer card-we-do hover-up">
                        <div class="card-image">
                            <img src="assets/imgs/page/homepage2/we-do2.png" alt="iori">
                        </div>
                        <div class="card-info">
                            <h4 class="color-brand-1 mb-10">
                                <a class="color-brand-1" href="Seamless importing and round-tripping of Microsoft Project plans, Excel files &amp; CSV files.">Manage budgets and resources</a>
                            </h4>
                            <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                            <div class="box-button-offer">
                                <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeIn">
                    <div class="card-offer card-we-do hover-up">
                        <div class="card-image">
                            <img src="assets/imgs/page/homepage2/we-do5.png" alt="iori">
                        </div>
                        <div class="card-info">
                            <h4 class="color-brand-1 mb-10">
                                <a class="color-brand-1" href="What makes us different from others? We give holistic solutions with strategy, design &amp; technology.">Unlimited ways to work</a>
                            </h4>
                            <p class="font-md color-grey-500 mb-5">Your site is not complete with only landings. Get essential inner pages using our ready demos.</p>
                            <div class="box-button-offer">
                                <a class="btn btn-default font-sm-bold pl-0 color-brand-1">Learn More <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-button text-center mt-10 wow animate__animated animate__fadeIn">
                <a class="btn btn-brand-1 hover-up" href="#">Download App</a>
                <a class="btn btn-default font-sm-bold hover-up" href="#">Learn More <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</main>

@section('scripts')

@endsection('scripts')

@endsection('content')
