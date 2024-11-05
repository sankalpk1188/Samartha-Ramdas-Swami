@extends('layouts/frontLayout/front_design')
@section('content')

@section('styles')
<style>
	.sticky {
	  	position: sticky;
	  	top: 0;
	}

	.scrollable {
	  	overflow-y: scroll;
	  	max-height:55vh;
	}

	.scrollable::-webkit-scrollbar {
	  width: 0.5em;
	  background-color: #F5F5F5;
	}

	.scrollable::-webkit-scrollbar-thumb {
	  background-color: #000000;
	}

	/* Hide the scroll bar for Firefox */
	.scrollable {
	  scrollbar-width: thin;
	  scrollbar-color: #000000 #F5F5F5;
	}

	.scrollable::-webkit-scrollbar-track {
	  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.1);
	  background-color: #F5F5F5;
	}

	.scrollable::-webkit-scrollbar {
	  width: 6px;
	  background-color: #F5F5F5;
	}

	.scrollable::-webkit-scrollbar-thumb {
	  background-color: #013556;
	}
</style>
@endsection('styles')

<main class="main">
	<section class="section pt-0 pb-50 bg-core-value bg-grey-60">
	    <div class="container">
	        <div class="row box-list-core-value mt-70">
	            <div class="col-lg-4 mb-70 px-4">
	                <div class="box-core-value">
	                    <div class="shape-left shape-1"></div>
	                    <h3 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">विषयानुरूप वर्गीकरण</h3>
	                    <p class="font-md color-grey-400 wow animate__animated animate__fadeIn text-justify" data-wow-delay=".2s">बलशाली आणि चारित्र्यसम्पन्न मानवधर्म हे ज्यांचे उद्दिष्ट असे सार्वकालिक संत! त्यांच्या वाणीने सुमारे चारशे वर्षांपूर्वी मरगळलेल्या महाराष्ट्राला संजीवनी दिली होती.<br>आजचा भारत गरीबी, भ्रष्ट्राचार दुबळेपणा स्वैराचार, उपभोगवाद, यांच्या जाळ्यात सापडला आहे. विवेक आणि योग्य आचारधर्माची शिकवण देणारे समर्थान्चे विचारच दिशाहीन भरकटणार्‍या आजच्या तरुणाईला योग्य मार्गावर आणू शकतात. </p>
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
						</div>

	            	</div>
	            </div>
	        </div>
	    </div>
	</section>
</main>

@endsection('content')