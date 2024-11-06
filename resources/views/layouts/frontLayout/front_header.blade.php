@php 
    $url = url()->current(); 
    $allServices = App\Models\ServiceCategory::with('services')->where('status',1)->get();
@endphp

<div class="box-notify bg-brand-1">
    <div class="container position-relative">
        <div class="box-container-sw">
            <div class="box-button-slider">
                <div class="swiper-button-prev swiper-button-prev-notify">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </div>
                <div class="swiper-button-next swiper-button-next-notify">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </div>
            </div>
            <div class="box-swiper">
                <div class="swiper-container swiper-notify">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <span class="d-inline-block font-md color-brand-2">रामदासीं रामदास । हाचि खरा आत्मविश्वास ।
                                साधावी समर्थाची कृपा । सोडोनी मोहमाया ।।</span>
                        </div>
                        <div class="swiper-slide text-center">
                            <span class="d-inline-block font-md color-brand-2">रामदासांची सदा भक्ती । दूर करी सर्व दुःखरूपी शक्ती ।
                                नाम स्मरावे रात्रंदिन । हाचि खरा साधन ||</span>
                        </div>
                        <div class="swiper-slide text-center">
                            <span class="d-inline-block font-md color-brand-2">रामदासांचा उपदेश । देई जिवाला साहस ।
                                चालावे त्यांच्या पंथाने । होतील विघ्ने दूरचि ||</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-close">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </a>
</div>
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo">
                    <a class="d-flex" href="{{url('/')}}">
                        <img alt="logo" src="{{asset('/assets/imgs/Logo_srs.svg')}}" >
                    </a>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li>
                                <a class="active" href="{{url('/')}}">मुखपृष्ठ</a>
                            </li>
                            <li class="has-children">
                                <a href="javascript:void">आमच्याबद्दल</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{url('about-us')}}">जीवन प्रवास</a>
                                    </li>
                                    <li>
                                        <a href="{{url('about-us#charitra')}}">श्री समर्थ चरित्र</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="has-children">
                                <a href="javascript:void">समर्थ</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/set-language/en') }}">{{ __('messages.english') }}</a></li>
                                    <li><a href="{{ url('/set-language/mr') }}">{{ __('messages.marathi') }}</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="has-children">
                                <a class="active" href="javascript:void">Services</a>
                                <div class="sub-menu two-col bg-core-value">
                                    <div class="row d-flex">
                                        @foreach($allServices as $serviceCat)
                                        <div class="col-2">
                                            <h5>{{$serviceCat->name}}</h5><hr>
                                            <ul class="menu-inner">
                                                @foreach($serviceCat->services as $service)
                                                <li>
                                                    <a href="{{url('/services/'.$service->id.'/'.Str::slug($serviceCat->name).'/'.Str::slug($service->title))}}">{{$service->title}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li> --}}
                            
                            <li>
                                <a href="{{url('literature')}}">विषय</a>
                            </li>
                            <li>
                                <a href="{{url('author')}}">लेखक</a>
                            </li>
                            <li>
                                <a href="{{url('daswani')}}">दासवाणी</a>
                            </li>
                            <li class="has-children">
                                <a href="javascript:void">मीडिया</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{url('events')}}">ऑडिओ</a>
                                    </li>
                                    <li>
                                        <a href="{{url('gallery')}}">व्हिडिओ</a>
                                    </li>
                                    <li>
                                        <a href="{{url('events')}}">प्रकाशने</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('contact-us')}}">संपर्क</a>
                            </li>
                            <li class="has-children d-none">
                                <a href="javascript:void">Insights</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{url('swicth-lang/mr')}}" class="lang-button">Marathi</a>
                                    </li>
                                    <li>
                                        <a href="{{url('swicth-lang/en')}}" class="lang-button">English </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo">
                <a class="d-flex" href="{{url('/')}}">
                    <img alt="Kirtane & Pandit" src="{{asset('/assets/imgs/template/logo.png')}}">
                </a>
            </div>
            <div class="burger-icon">
                <span class="burger-icon-top"></span>
                <span class="burger-icon-mid"></span>
                <span class="burger-icon-bottom"></span>
            </div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <ul class="nav nav-tabs nav-tabs-mobile mt-25" role="tablist">
                        <li>
                            <a class="active" href="#tab-menu" data-bs-toggle="tab" role="tab" aria-controls="tab-menu" aria-selected="true">
                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                                Menu 
                            </a>
                        </li>
                        <li>
                            <a href="#tab-services" data-bs-toggle="tab" role="tab" aria-controls="tab-services" aria-selected="false">
                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                                Services 
                            </a>
                        </li>
                        {{-- <li>
                            <a href="#tab-notification" data-bs-toggle="tab" role="tab" aria-controls="tab-notification" aria-selected="false">
                                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                                Notification 
                            </a>
                        </li> --}}
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tab-menu" role="tabpanel" aria-labelledby="tab-menu">
                            <nav class="mt-15">
                                <ul class="mobile-menu font-heading">
                                    <li>
                                        <a class="active" href="{{url('/')}}">मुखपृष्ठ</a>
                                    </li>
                                    <li class="has-children">
                                        <a href="javascript:void">आमच्याबद्दल</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{url('about-us')}}">जीवन प्रवास</a>
                                            </li>
                                            <li>
                                                <a href="{{url('about-us')}}">श्री समर्थ चरित्र</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="javascript:void">Insights</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{url('reports-and-publications')}}">Reports & Publications</a>
                                            </li>
                                            <li>
                                                <a href="{{url('blogs')}}">Blogs</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url('literature')}}">विषय</a>
                                    </li>
                                    <li>
                                        <a href="{{url('author')}}">लेखक</a>
                                    </li>
                                    <li>
                                        <a href="{{url('daswani')}}">दासवाणी</a>
                                    </li>
                                    <li>
                                        <a href="{{url('contact-us')}}">संपर्क</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="tab-services" role="tabpanel" aria-labelledby="tab-services">
                            <nav class="mt-15">
                                <ul class="mobile-menu font-heading">
                                    @foreach($allServices as $serviceCat)
                                    <li class="has-children">
                                        <a>{{$serviceCat->name}}</a>
                                        <ul class="sub-menu">
                                            @foreach($serviceCat->services as $service)
                                            <li>
                                                <a href="{{url('/services/'.$service->id.'/'.Str::slug($serviceCat->name).'/'.Str::slug($service->title))}}">{{$service->title}}</a>
                                            </li>
                                            @endforeach
                                            <li>
                                                <a href="#">IND - AS, I GAAP, IFRS Advisory</a>
                                            </li>
                                            <li>
                                                <a href="#">Internal Audit & Risk Management Services</a>
                                            </li>
                                            <li>
                                                <a href="#">IFC Advisory </a>
                                            </li>
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>