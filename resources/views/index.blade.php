@extends('layouts/frontLayout/front_design')
@section('content')

@section('styles')
<style> 
    
</style>
@endsection('styles')

<main class="main">

    {{-- <section class="banner-6">
        <div class="container">
            <div class="banner-1">
                <div class="row align-items-center">
                    <div class="col-lg-5 d-none d-lg-block wow animate__animated animate__fadeIn">
                        <img class="img-main" src="assets/imgs/banner_srs.png" alt="iori">
                    </div>
                    <div class="col-lg-7">
                        <h1 class="color-brand-1 mb-20 text-anim">मना सज्जना भक्तिपंथेचि जावें । तरी श्रीहरी पाविजेतो स्वभावें ॥ <br>जनीं निंद्य तें सर्व सोडूनि द्यावें । जनीं वंद्य ते सर्व भावे करावे ॥</h1>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="banner-6">
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

    <section class="section d-none">
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

    <section class="section ptb-50">
        <div class="container">
            <div class="box-container">
                <div class="row mb-0 project-revert align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 mt-30">
                        <h2 class="color-brand-1 mt-10 mb-15">जीवन चरित</h2>
                        <p class="font-md color-grey-400 text-justify">समर्थ रामदास का मूल नाम 'नारायण सूर्याजीपंत कुलकर्णी' (ठोसर) था। इनका जन्म महाराष्ट्र के जालना जिले के जांब नामक स्थान पर रामनवमी के दिन मध्यान्ह में जमदग्नी गोत्र के देशस्थ ऋग्वेदी ब्राह्मण परिवार में शके १५३० सन १६०८ में हुआ। समर्थ रामदास जी के पिता का नाम सूर्याजी पन्त था। वे सूर्यदेव के उपासक थे और प्रतिदिन 'आदित्यह्रदय' स्तोत्र का पाठ करते थे। वे गाँव के पटवारी थे लेकिन उनका बहुत सा समय उपासना में ही बीतता था। उनकी माता का नाम राणुबाई था। वे संत एकनाथ जी के परिवार की दूर की रिश्तेदार थी। वे भी सूर्य नारायण की उपासिका थीं। सूर्यदेव की कृपा से सूर्याजी पन्त को दो पुत्र गंगाधर स्वामी और नारायण (समर्थ रामदास) हुए। समर्थ रामदास जी के बड़े भाई का नाम गंगाधर था। उन्हें सब 'श्रेष्ठ' कहते थे। वे अध्यात्मिक सत्पुरुष थे। उन्होंने 'सुगमोपाय ' नामक ग्रन्थ की रचना की है। मामा का नाम भानजी गोसावी था। वे प्रसिद्ध कीर्तनकार थे।</p>
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
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
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
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
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
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
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
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
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
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
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
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
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
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
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
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
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
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
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
                        {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">नवविध भक्ती</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">मनाचे श्लोक निरुपण</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">दैनंदिन उपासना</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">समर्थ चरित्र</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">समर्थान्ची काव्यसृष्टी</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">गुरू तत्व</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">आरती</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">इतर</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow animate__ animate__fadeIn animated" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                            <div class="card-small">
                                <div class="card-image">
                                    <a href="{{url('author')}}">
                                        <div class="box-image">
                                            <img src="assets/imgs/page/homepage3/certification.png" alt="iori">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-info">
                                    <a href="{{url('author')}}">
                                        <h6 class="color-brand-1 icon-up">श्लोक</h6>
                                    </a>
                                </div>
                            </div>
                        </div> --}}

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
                                    <img src="assets/imgs/page/team/banner1.png" alt="iori">
                                </div>
                            </div>
                            <div class="banner-col-2">
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".2s">
                                    <img src="assets/imgs/page/team/banner2.png" alt="iori">
                                </div>
                                <div class="img-banner hasBorder wow animate__animated animate__zoomIn" data-wow-delay=".4s">
                                    <img src="assets/imgs/page/team/banner3.png" alt="iori">
                                </div>
                            </div>
                            <div class="banner-col-3">
                                <div class="img-banner hasBorder2 wow animate__animated animate__zoomIn" data-wow-delay=".6s">
                                    <img src="assets/imgs/page/team/banner4.png" alt="iori">
                                </div>
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".8s">
                                    <img src="assets/imgs/page/team/banner5.png" alt="iori">
                                </div>
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay="1s">
                                    <img src="assets/imgs/page/team/banner6.png" alt="iori">
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