@extends('layouts/frontLayout/front_design')
@section('content')

@section('styles')
<style> 
    
</style>
@endsection('styles')

<main class="main">
    <section class="section banner-6">
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

    <section class="section mt-50 mb-30">
        <div class="container">
            <div class="row mb-30 mt-30 project-revert">
                <div class="col-xl-5 col-lg-6">
                    <span class="btn btn-tag wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Business</span>
                    <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Build your brand and reach out to social followers</h3>
                    <p class="font-md color-grey-400 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Sharing content online allows you to craft an online persona that reflects your personal values and professional skills. Even if you only use social media occasionally, what you create, share or react to feeds into this public narrative. How you conduct yourself online is now just as important as your behavior offline especially when it comes to your digital marketing career.</p>
                    <div class="mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                        <ul class="list-ticks">
                            <li>
                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>Send & Schedule Posts
                            </li>
                            <li>
                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>Live Chat Request
                            </li>
                            <li>
                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>Push Notification
                            </li>
                            <li>
                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>Create fully integrated campaigns
                            </li>
                            <li>
                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>Online Visitors
                            </li>
                            <li>
                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>Directly send or schedule posts
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="box-images-project">
                        <div class="box-images mt-50">
                            <img class="img-main-2" src="assets/imgs/page/homepage1/project2.png" alt="iori">
                            <div class="image-2 shape-3">
                                <img src="assets/imgs/page/homepage1/Union.png" alt="iori">
                            </div>
                            <div class="image-3 shape-1">
                                <img src="assets/imgs/page/homepage1/eye.png" alt="iori">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</main>

@section('scripts')

@endsection('scripts')

@endsection('content')
