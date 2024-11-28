@extends('layouts/frontLayout/front_design')
@section('content')

@section('styles')

<style> 
    
</style>
@endsection('styles')

<main class="main">

    <section class="banner-6">
        <div class="container">
            <div class="banner-1">
                <div class="row align-items-center">
                    <div class="col-lg-5 d-none d-lg-block wow animate__animated animate__fadeIn">
                        <img class="img-main" src="assets/imgs/banner_srs.png" alt="iori">
                    </div>
                    <div class="col-lg-7">
                        <h3 class="color-brand-1 mb-20 mt-5 wow animate__animated animate__fadeIn text-center" data-wow-delay=".1s" style="font-size: 33px!important; line-height: 54px!important;">मना सज्जना भक्तिपंथेचि जावें । तरी श्रीहरी पाविजेतो स्वभावें ॥
                            <br>जनीं निंद्य तें सर्व सोडूनि द्यावें । जनीं वंद्य ते सर्व भावे करावे ॥</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-6 d-none">
        <div class="container">
            <div class="row align-items-center">
                @if(Session::has('lang') && Session::get('lang')=='mr'|| empty(Session::get('lang')))
                    <div class="col-xl-6 d-none d-xl-block">
                        <div>
                            <img class="img-main" src="assets/imgs/banner_srs.png" alt="iori">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-banner-right-home6">
                            {{-- <span class="title-line line-48 wow animate__animated animate__fadeIn" data-wow-delay=".s">Think. Creative. Solve</span> --}}
                            <h4 class="color-brand-1 mb-20 mt-5 wow animate__animated animate__fadeIn" data-wow-delay=".1s">मना सज्जना भक्तिपंथेचि जावें । तरी श्रीहरी पाविजेतो स्वभावें ॥
                            <br>जनीं निंद्य तें सर्व सोडूनि द्यावें । जनीं वंद्य ते सर्व भावे करावे ॥</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="font-md color-grey-500 mb-30 wow animate__animated animate__fadeIn text-justify" data-wow-delay=".2s">बलशाली आणि चारित्र्यसम्पन्न मानवधर्म हे ज्यांचे उद्दिष्ट असे सार्वकालिक संत! त्यांच्या वाणीने सुमारे चारशे वर्षांपूर्वी मरगळलेल्या महाराष्ट्राला संजीवनी दिली होती.<br><br>आजचा भारत गरीबी, भ्रष्ट्राचार दुबळेपणा स्वैराचार, उपभोगवाद, यांच्या जाळ्यात सापडला आहे. विवेक आणि योग्य आचारधर्माची शिकवण देणारे समर्थान्चे विचारच दिशाहीन भरकटणार्‍या आजच्या तरुणाईला योग्य मार्गावर आणू शकतात. आत्मसन्मान, आत्मसंयम, आरोग्य आणि समय व्यवस्थापनाचे भान आणून देणारी श्री रामदासांची शिकवण ही आपली जणू वडिलार्जित संपत्ति ! तिचे आपण संपादन करु या. परमार्थाची कास न सोडता निर्मिलेली खरी व्यवहारवादी आणि त्याच वेळी कर्मयोगी आणि चारित्र्यवान जीवनाची मंत्राक्षरी म्हणजे समर्थवचन!<br><br>ह्या धनाची ही आम्हाला सापडलेली गुरुकिल्ली ! जितके यात भागीदार होतील तितकेच हे धन वृद्‍धिंगत होईल तेव्हा या गुरुकिल्लीचा विनामुल्य वापर करुन हे अनमोल धन आत्मसात करा आणि वृद्‍धिंगत करा, असे जाहीर आवाहन!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="box-banner-6">
                            {{-- <img class="img-main" src="assets/imgs/banner/rss-swami-home-img.png" alt="iori"> --}}
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="box-banner-right-home6">
                            {{-- <span class="title-line line-48 wow animate__animated animate__fadeIn" data-wow-delay=".s">Think. Creative. Solve</span> --}}
                            <h1 class="color-brand-1 mb-20 mt-5 wow animate__animated animate__fadeIn" data-wow-delay=".1s">Shri Samarth Ramdas Swami</h1>
                            <div class="row" style="visibility: hidden;">
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
                    <h3 class="color-brand-1 mb-15 wow animate__ animate__fadeInUp animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">कार्यक्रम आणि बातम्या</h3>
                </div>
                <div class="mt-30 wow animate__ animate__fadeInUp animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item-core mb-30">
                                    <div class="item-image">
                                        <img src="{{asset('assets/imgs/event_photo.png')}}" alt="iori">
                                    </div>
                                    <div class="item-desc">
                                        <p class="font-md color-grey-400 mb-15">कार्यक्रमाचे वर्णन येथे दिसेल</p>
                                        <h6 class="color-brand-1">कार्यक्रम किंवा बातम्यांचे नाव</h6>
                                        <span class="color-grey-500 font-xs">November 26, 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item-core mb-30">
                                    <div class="item-image">
                                        <img src="{{asset('assets/imgs/event_photo.png')}}" alt="iori">
                                    </div>
                                    <div class="item-desc">
                                        <p class="font-md color-grey-400 mb-15">कार्यक्रमाचे वर्णन येथे दिसेल</p>
                                        <h6 class="color-brand-1">कार्यक्रम किंवा बातम्यांचे नाव</h6>
                                        <span class="color-grey-500 font-xs">November 26, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section ptb-50">
        <div class="container">
            <div class="box-container">
                <div class="row mb-0 project-revert align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 mt-30">
                        <h2 class="color-brand-1 mt-10 mb-15">जीवन चरित</h2>
                        <p class="font-md color-grey-400 text-justify">सर्व वयोगटातील एक संत ज्यांचे ध्येय सामर्थ्यवान आणि सद्गुणी मानव धर्म निर्माण करण्याचे आहे. तो चार शतकांपूर्वी जगला असला तरी त्याची शिकवण काळाच्या सर्व मर्यादा ओलांडते. त्यांच्या तत्त्वज्ञानाने महाराष्ट्राच्या तत्कालीन नशिबात आलेल्या आत्म्याला केवळ पुनर्जागृत केले आणि नवसंजीवनी दिली नाही, तर भ्रष्टाचार, दारिद्र्य, उद्धटपणा आणि बेपर्वा उपभोगतावाद यांनी ग्रासलेल्या आजच्या भारतीय परिस्थितीसाठीही ते तितकेच वैध आहे.त्याच्या तत्त्वज्ञानाचे नियमन करणारी तत्त्वे पाळण्यास अतिशय सोपी आणि तरीही अद्वितीय आहेत कारण ती सामान्यज्ञानाला आकर्षित करतात, जीवनात कृतीची मागणी करतात आणि वास्तविक वर्तणुकीतील बदलांद्वारे चारित्र्य निर्माण करण्याचे उद्दिष्ट ठेवतात. समर्थ रामदासांच्या मते, “वेळ व्यवस्थापन” हा यशस्वी जीवनाचा गाभा आहे.हे आधुनिक व्यवस्थापकीय शब्दजाल सारखेच नाही का? जे सर्वोच्च सत्याकडे प्रभावीपणे निर्देशित केले जाते. केवळ समर्थांचे तत्त्वज्ञानच आज आपल्या देशाला सध्याच्या संकटातून सोडवू शकते, तरुणांना स्वाभिमानाचे शिक्षण देऊन आणि आत्मसन्मान आत्मसात करून राष्ट्राला आरोग्य आणि संपत्तीच्या बाजूने घेऊन जाऊ शकते.</p>
                        <div class="mt-30 text-start">
                            <a class="btn btn-brand-1 hover-up" href="{{url('about-us')}}">अधिक जाणून घ्या</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 mt-30">
                        <div class="box-images-cover text-end">
                            <div class="box-images-inner">
                                <div class="img-reveal">
                                    <img class="img-project bd-rd16" src="{{asset('assets/imgs/jivan_charitra.png')}}" alt="iori">
                                </div>
                                <div class="image-7 shape-3">
                                    <img src="{{asset('assets/imgs/jivan_charitra.svg')}}" alt="iori" style="width: 113px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-0 pb-50 bg-core-value bg-grey-60">
        <div class="container">
            <div class="row box-list-core-value mt-70">
                <div class="col-lg-4 mb-70 px-4">
                    <div class="box-core-value">
                        <div class="shape-left shape-1"></div>
                        <h3 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">विषयानुरूप वर्गीकरण</h3>
                        <p class="font-md color-grey-400 wow animate__animated animate__fadeIn text-justify" data-wow-delay=".2s">बलशाली आणि चारित्र्यसम्पन्न मानवधर्म हे ज्यांचे उद्दिष्ट असे सार्वकालिक संत! त्यांच्या वाणीने सुमारे चारशे वर्षांपूर्वी मरगळलेल्या महाराष्ट्राला संजीवनी दिली होती.<br>आजचा भारत गरीबी, भ्रष्ट्राचार दुबळेपणा स्वैराचार, उपभोगवाद, यांच्या जाळ्यात सापडला आहे. विवेक आणि योग्य आचारधर्माची शिकवण देणारे समर्थान्चे विचारच दिशाहीन भरकटणार्‍या आजच्या तरुणाईला योग्य मार्गावर आणू शकतात. </p>
                        <div class="mt-30">
                            <a class="btn btn-brand-1 hover-up" href="{{url('literature')}}">अधिक जाणून घ्या</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row pt-20">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/granth-07.svg" alt="iori" style="width: 60px;">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">दासबोध</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/granth-07.svg" alt="iori" style="width: 60px;">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">मनाचे श्लोक</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/granth-07.svg" alt="iori" style="width: 60px;">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">निरुपण</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/granth-07.svg" alt="iori" style="width: 60px;">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">श्रीमत् दासबोध वाचन</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/granth-07.svg" alt="iori" style="width: 60px;">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">श्री मनाचे श्लोक प्रवचने</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/granth-07.svg" alt="iori" style="width: 60px;">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">समर्थकृपेची वचने</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/granth-07.svg" alt="iori" style="width: 60px;">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">भजन</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/granth-07.svg" alt="iori" style="width: 60px;">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">करुणाष्टके</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/granth-07.svg" alt="iori" style="width: 60px;">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">दासनवमी दासबोध आढावा</h6>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section ptb-50">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8 col-md-8">
                    <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">दासवाणी</h2>
                </div>
                <div class="col-lg-4 col-md-4 text-md-end text-start wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <a href="{{url('daswani')}}" class="btn btn-default font-sm-bold pl-0" style="color: #902e01;">सर्व पहा <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row mt-20">
                <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="card-blog-grid card-blog-grid-2 hover-up">
                        <div class="card-image img-reveal">
                            <a href="#" onclick="openModal('assets/imgs/daswani-bg.png')">
                                <img src="{{asset('assets/imgs/daswani-bg.png')}}" alt="iori" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="card-blog-grid card-blog-grid-2 hover-up">
                        <div class="card-image img-reveal">
                            <a href="#" onclick="openModal('assets/imgs/daswani-bg.png')">
                                <img src="{{asset('assets/imgs/daswani-bg.png')}}" alt="iori" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="card-blog-grid card-blog-grid-2 hover-up">
                        <div class="card-image img-reveal">
                            <a href="#" onclick="openModal('assets/imgs/daswani-bg.png')">
                                <img src="{{asset('assets/imgs/daswani-bg.png')}}" alt="iori" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section banner-team ptb-50">
        <div class="container">
            <div>
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">समर्थ रामदास स्वामींचा वारसा मांडणारे विचारवंत लेखक</h2>
                        <div class="box-button mt-30 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                            <a class="btn btn-brand-1 hover-up" href="{{url('author')}}">अधिक जाणून घ्या</a>
                        </div>
                        <p class="font-md color-grey-500 mb-25 wow animate__animated animate__fadeIn text-justify" data-wow-delay=".4s">प्रत्येक प्रगल्भ शिकवणीमागे समर्थ रामदासस्वामींचे ज्ञान जपण्यासाठी आणि शेअर करण्यासाठी समर्पित उत्कट लेखकांचा संघ असतो. हे लेखक त्याचे कालातीत तत्त्वज्ञान आणि मूल्ये जिवंत करण्यासाठी समर्पित आहेत, त्याच्या अंतर्दृष्टीचा विचारपूर्वक अर्थ लावतात आणि ते सर्वांसाठी प्रवेशयोग्य बनवतात. त्यांच्या वारशाबद्दल मनापासून आदर ठेवून, समर्थ रामदास स्वामींचे ज्ञान पिढ्यानपिढ्या गुंजत राहील याची खात्री करून वाचकांना प्रेरणा, मार्गदर्शन आणि उन्नती करण्याचे त्यांचे ध्येय आहे.</p>
                    </div>
                    <div class="col-lg-7 d-none d-lg-block">
                        <div class="box-banner-team">
                            <div class="arrow-down-banner shape-1"></div>
                            <div class="arrow-right-banner shape-2"></div>
                            <div class="banner-col-1">
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".0s">
                                    <img src="assets/imgs/author/sushamatai.png" alt="iori">
                                </div>
                            </div>
                            <div class="banner-col-2">
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".2s">
                                    <img src="assets/imgs/author/makarandnath.png" alt="iori">
                                </div>
                                <div class="img-banner hasBorder wow animate__animated animate__zoomIn" data-wow-delay=".4s">
                                    <img src="assets/imgs/author/chaitanya_maharaj.png" alt="iori">
                                </div>
                            </div>
                            <div class="banner-col-3">
                                <div class="img-banner hasBorder2 wow animate__animated animate__zoomIn" data-wow-delay=".6s">
                                    <img src="assets/imgs/author/varadanand_bhrati.png" alt="iori">
                                </div>
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".8s">
                                    <img src="assets/imgs/author/mohabua_ramdasi.png" alt="iori">
                                </div>
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay="1s">
                                    <img src="assets/imgs/author/caphle.png" alt="iori">
                                </div>
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