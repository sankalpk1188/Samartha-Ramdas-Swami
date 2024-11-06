@extends('layouts/frontLayout/front_design')
@section('content')

@section('styles')
<style>
	.list-ticks li {
	    width: 100% !important;
	    text-indent: -30px;
	    margin-left: 30px;
	}
</style>
@endsection('styles')

<main class="main">

    <section class="banner-contact bg-10 bg-size" style="background-image: url('assets/imgs/about_swami.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
    </section>
    
    <section class="section banner-5    ">
        <div class="container">
            <div class="mt-65 mb-100">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-20">
                        {{-- <span class="title-line color-brand-2 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Great sales platform</span> --}}
                        <h2 class="color-brand-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".2s" style="color: #902e01!important;">श्री समर्थ चरित्र</h2>
                    </div>
                    <div class="col-lg-6 mb-20">
                        <p class="font-md color-grey-50 wow animate__animated animate__fadeInUp text-justify" data-wow-delay=".4s">जन्म - चैत्र शु. ९ ( रामनवमी ) शके १५३० : सन १६०८ दुपारी बारा वाजता. जिल्हा - औरंगाबाद, तालुका - अंबड, गाव - जांब. गोदावरी नदीकाठी, नाव - नारायण. मोठा भाऊ - गंगाधर, पिता - सूर्याजीपंत, माता - राणूबाई, आडनाव - ठोसर. घराण्यात सूर्य आणि श्रीराम यांच्या उपासनेची दीर्घ परंपरा.<br><br>बालपण - मर्दानी खेळ, व्यायाम यांची आवड, शरीर कमावलेले, बुध्दी तीव्र, मनोनिग्रह दृढ. वृत्ती हनुमंत आणि श्रीराम यांच्या भक्तीकडे. भक्ती, शुध्द चारित्र्य यांच्या अभावी लोक जन्ममृत्युच्या फेर्‍यात अडकतात याचे दु:ख वाटे. यातून लोकांची सुटका कशी करता येईल याची बालपणापासून चिंता. स्वत:चा विवाह, गृहस्थाश्रम यांची नावड. जन्मजात विरागी. वयाच्या अकराव्या वर्षी श्रीरामाचा साक्षात्कार. श्रीरामाचा आदेश - ‘कृष्णातीरी जाऊन धर्मस्थापना करणे. शिसोदिया वंशी शिवनामा अवतार घेणार आहे. त्यास उपासना देऊन साह्य करणे’</p>
                    </div>
                </div>
                <div class="box-video-banner">
                    <div class="image-banner-5 wow animate__animated animate__fadeIn">
                        <img src="assets/imgs/page/homepage5/banner.png" alt="iori">
                    </div>
                </div>
                <div class="box-info-video-banner">
                    <div class="box-inner-video-banner">
                        <div class="row align-items-start">
                            <div class="col-lg-5">
                                <p class="color-grey-500 font-lg wow animate__animated animate__fadeIn text-justify" data-wow-delay=".0s">आईच्या आग्रहाखातर नारायण लग्नाच्या बोहल्यावर उभा राहिला. त्यावेळी वय बारा वर्षांचे. पण विवाहमंत्रातील ‘सावधान’ शब्द ऎकताच खरोखरीच सावध होऊन पलायन. थेट नाशिक - पंचवटी गाठली. श्रीरामाचे दर्शन घेऊन साधनेसाठी निवांत स्थळ म्हणून नाशिकजवळील टाकळी येथे राहणे. तेथे गोदावरी - नंदिनी नद्यांचा संगम.
                                </p>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                        <div class="card-small card-small-2">
                                            <div class="card-image">
                                                <a href="#">
                                                    <div class="box-image">
                                                        <img src="assets/imgs/page/homepage1/free.svg" alt="iori">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card-info">
                                                <a href="#">
                                                    <h6 class="color-brand-1 mb-10">Connected</h6>
                                                </a>
                                                <p class="font-xs color-grey-500">We come together wherever we are – across time zones, regions, offices and screens. You will receive support from your teammates anytime and anywhere.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                        <div class="card-small card-small-2">
                                            <div class="card-image">
                                                <a href="#">
                                                    <div class="box-image">
                                                        <img src="assets/imgs/page/homepage2/identity.png" alt="iori">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card-info">
                                                <a href="#">
                                                    <h6 class="color-brand-1 mb-10">Flexible</h6>
                                                </a>
                                                <p class="font-xs color-grey-500">We believe in your freedom to work when and how you work best, to help us all thrive. Only freedom and independent work can bring out the best in you.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pb-50 bg-core-value">
        <div class="container">
            <div class="row box-list-core-value">
                <div class="col-lg-4 mb-70">
                    <div class="box-core-value">
                        <div class="shape-left shape-1"></div>
                        <h3 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Core values</h3>
                        <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".0s">We break down barriers so teams can focus on what matters – working together to create products their customers love.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="list-core-value">
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Customers First</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">Our company exists to help merchants sell more. We make every decision and measure every outcome based on how well it serves our customers.</p>
                            </div>
                        </li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Act With Integrity</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">We’re honest, transparent and committed to doing what’s best for our customers and our company. We openly collaborate in pursuit of the truth. We have no tolerance for politics, hidden agendas or passive-aggressive behavior.</p>
                            </div>
                        </li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Make a Difference Every Day</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">Our company exists to help merchants sell more. We make every decision and measure every outcome based on how well it serves our customers.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="list-core-value">
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Think Big</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">Being the world's leading commerce platform requires unrivaled vision, innovation and execution. We never settle. We challenge our ideas of what’s possible in order to better meet the needs of our customers.</p>
                            </div>
                        </li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Do the right thing</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">Integrity is the foundation for everything we do. We are admired and respected for our commitment to honesty, trust, and transparency.</p>
                            </div>
                        </li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Stronger united</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">We’ve created a positive and inclusive culture that fosters open, honest, and meaningful relationships.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>


<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
    </div>
</div>
@endsection('content')