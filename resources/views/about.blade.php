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
    <section class="section pt-90 pb-50 banner-about">
        <div class="container text-left w-75">
            <span class="btn btn-tag wow animate__animated animate__fadeInUp font-sm-bold mb-10" data-wow-delay=".0s">Building Trust Through Quality Services and Unparalleled Expertise</span>
            <h6 class="color-brand-1 mb-15">Kirtane & Pandit LLP, Chartered Accountants (KPCA) is an Accounting, Auditing & Consulting firm with a well-established network of financial experts across India. Our motto 'Step ahead, Always' reflects our value-added approach to delivering sound financial solutions while we partner with you in your journey of growth. With our extensive experience of 65+ years, we deliver a wide range of professional services in the areas of Assurance, Accounting & Advisory to reputed & listed companies from various industries across the globe. </h6>

			<h6 class="color-brand-1 mb-15">As a registered firm with ICAI and a member of PCAOB, SEC, USA, we uphold the highest standards of quality and compliance. Our ambitious approach and technology-led environment empower our employees to think differently and explore emerging areas. With seven regional offices strategically located throughout India, we provide prompt and personalized assistance wherever you are. Our dedicated workforce of over 7000 employees is passionate about excellence and relentlessly pursues your success.</h6>

            <h6 class="color-brand-1 mb-15">Additionally, with a global footprint of over 15 countries, we are decorated to support clients with international operations. Leveraging our extensive network, we offer seamless cross-border solutions, ensuring compliance with local regulations and optimizing your global ventures.</h6>

			<h6 class="color-brand-1 mb-15">At Kirtane & Pandit LLP, we step beyond traditional accounting services. We are trusted partners who understand the intricacies of your industry. By combining deep industry knowledge with cutting-edge technology and innovative strategies, we deliver superior results that position you ahead of the competition. Experience the difference while working with a firm that understands your unique business needs and supports your journey towards success.</h6>
        </div>
    </section>

    <section class="section pt-100 pb-100 bg-4">
        <div class="container">
            <div class="box-story box-story-1 mb-0">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="box-info-video">
                            <div class="img-reveal">
                                <img class="d-block rounded-3" src="{{asset('assets/imgs/page/homepage2/story1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="box-info-video mt-30 mb-30">
                            <span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s">OUR STORY</span>
                            <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Endorsed by Regulatory & Accounting Bodies for Excellence</h3>
                            <ul class="list-ticks">
                                <li>
                                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                  </svg>Regulatory & Accounting bodies endorsement
                                </li>
                                <li>
                                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                  </svg>A PCAOB registered firm
                                </li>
                                <li>
                                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                  </svg>Valid ICAI Peer Review Board Certificate
                                </li>
                                <li>
                                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                  </svg>KP features in the ‘A’ Category firm list published by RBI.
                                </li>
                                <li>
                                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                  </svg>Empanelled with IBA as Forensic Auditors for conducting Forensic Audit
                                </li>
                                <li>
                                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                  </svg>Empanelled with IBA as Agency for Specialized Monitoring (ASM)
                                </li>
                                <li>
                                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                  </svg>Empanelled with Official Liquidators, High Court, Mumbai
                                </li>
                                <li>
                                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                  </svg>Empanelled with Government of Maharashtra, Home Dept. as Forensic Auditor
                                </li>
                                <li>
                                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                  </svg>ESG and sustainability advisory and reporting- Representation on Sustainability Reporting Standards Board of the ICAI
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-story box-story-2 mt-20">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="box-info-video mt-30 mb-30">
                            <h3 class="color-brand-1 mt-10 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Embracing Practice Domains for Building Powerful Institutions!</h3>
                            <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".0s">With the expertise of core services of Audit, Risk Management and Tax, Kirtane & Pandit in its six decades of existence has created service lines and divisions spanning across IT, Business Process and ESOP Advisory Sectors. Over the years these service lines and divisions achieved exponential growth and evolved into independent and listed companies with operations spanning across the globe. 
                            Our vision of deep ethical commitment, competency, belief in quality and respect for the individuals have enabled our employees and associates to think differently and venture into newer areas as they emerge.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="box-info-video">
                            <div class="img-reveal">
	                            <img class="d-block rounded-3" src="assets/imgs/page/homepage2/story2.jpg" alt="">
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section mt-90 pb-50 bg-core-value">
        <div class="container">
            <div class="row box-list-core-value mt-0">
                <div class="col-lg-4 mb-70">
                    <div class="box-core-value">
                        <div class="shape-left shape-1"></div>
                        <h3 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Vision</h3>
                        <p class="font-md color-grey-400 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Our vision is to emerge as a prominent Professional Services Firm with a broad network specializing in Accounting, Auditing, and Consulting. We are committed to delivering efficient client service, leveraging deep professional expertise, and upholding the highest ethical standards. We aim to mark our presence as a trusted leader in the industry by providing exceptional value while leading our clients to success.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="list-core-value">
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Partnering Growth</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">With reliability, we empower our clients to unlock significant business value by fostering mutually beneficial, long-term partnerships. Through our practices, we are dedicated to supporting their growth and success.</p>
                            </div>
                        </li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Excellence with Expertise & Technology</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">With over six decades of experience, we deliver comprehensive solutions by combining an in-depth knowledge base with innovative techniques while maintaining a client-centric approach. We continuously adapt to the evolving technological landscape and implement the best practices to drive client growth.</p>
                            </div>
                        </li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Honest & Ethical Practices</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">We uphold strong ethics in maintaining transparency with our clients. We take complete responsibility for our actions, ensuring honest and ethical practices that build trust and foster long-term relationships.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="list-core-value">
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Building an Institution</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">We are focused on building Kirtane & Pandit as a sustainable and long-term institution. We strive to create a strong foundation that ensures the continuity of our exceptional services and expertise.</p>
                            </div>
                        </li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">Global Reach with Local Strength</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20">Through our expanding network of branches, affiliates, and qualified professionals with specialized skill sets, we offer global reach with local strength. This enables us to serve clients seamlessly across the globe.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section mt-20 pt-50 pb-90">
	    <div class="container">
	        <div class="bg-brand-1 box-cover-video">
	            <div class="row align-items-center p-5">
	                <div class="col-xl-6 col-lg-6 col-sm-12">
	                   <h2 class="color-brand-2 mt-10 mb-15 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">A Step Ahead, Always.</h2>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

</main>

@endsection('content')