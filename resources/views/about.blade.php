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

    <section class="section banner-contact bg-10 bg-size" style="background-image: url('assets/imgs/about_swami.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
    </section>
    
    <section class="section banner-5">
        <div class="container">
            <div class="mt-65 mb-100">
                <div class="row align-items-end">
                    <div class="col-lg-6 mb-20">
                        {{-- <span class="title-line color-brand-2 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Great sales platform</span> --}}
                        <h2 class="color-brand-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">जीवन प्रवास</h2>
                    </div>
                    <div class="col-lg-6 mb-20">
                        <p class="font-md color-grey-50 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">We're lively, not corporate. We have the energy and boldness of a startup and the expertise and pragmatism of a scale-up. All in one place.</p>
                    </div>
                </div>
                <div class="box-video-banner">
                    <div class="image-banner-5 wow animate__animated animate__fadeIn">
                        <img src="assets/imgs/page/homepage5/banner.png" alt="IORI">
                        <a class="btn btn-play-center popup-youtube" href="https://www.youtube.com/watch?v=sVPYIRF9RCQ"></a>
                    </div>
                </div>
                <div class="box-info-video-banner">
                    <div class="box-inner-video-banner">
                        <div class="row align-items-start">
                            <div class="col-lg-5">
                                <p class="color-grey-500 font-lg wow animate__animated animate__fadeIn" data-wow-delay=".0s">We're lively, not corporate. We have the energy and boldness of a startup and the expertise and pragmatism of a scale-up. All in one place.</p>
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

    <section class="section mt-90 pb-50 bg-core-value">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="item-core mb-30">
                        <div class="item-image">
                            <img src="assets/imgs/page/about/img1.png" alt="iori">
                        </div>
                        <div class="item-desc">
                            <p class="font-md color-grey-400 mb-15">“Whether you’re working from home, at the office or at the job site, we provide flexible tools so you can connect and collaborate on waterfall projects, agile projects and everything in between.”</p>
                            <h6 class="color-brand-1">Ralph Edwards</h6>
                            <span class="color-grey-500 font-xs">Chairman of the board</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item-core mb-30">
                        <div class="item-image">
                            <img src="assets/imgs/page/about/img2.png" alt="iori">
                        </div>
                        <div class="item-desc">
                            <p class="font-md color-grey-400 mb-15">“We created a revolutionary online knowledge and competencies assessment solution. It empowers thousands of organizations worldwide to grow by allowing them to get a broader picture and draw better conclusions”</p>
                            <h6 class="color-brand-1">Ralph Edwards</h6>
                            <span class="color-grey-500 font-xs">Chairman of the board</span>
                        </div>
                    </div>
                </div>
            </div>
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

@endsection('content')