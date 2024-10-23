@extends('layouts/frontLayout/front_design')
@section('content')

<main class="main">
    <section class="section banner-team">
        <div class="container">
            <div class="banner-1">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h2 class="color-brand-1 mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Meet Our Partners</h2>
                        <p class="font-md color-grey-500 mb-25 wow animate__animated animate__fadeIn" data-wow-delay=".4s">Kirtane & Pandit Chartered Accountants hold a rich legacy rooted in integrity and excellence. Founded in 1956 by Shri B. R. Pandit with a vision to provide exceptional financial and legal advisory services, Kirtane & Pandit has established itself as a trusted partner to clients across 30+ industries. Our commitment to uphold the highest standards of ethics and professionalism laid the foundation for the firm's success. With a dedicated workforce of over 700 professionals & 30+ full-time CAs operating from 7 offices across the country, Kirtane&Pandit has delivered value-added solutions to each client's unique needs. Our services have consistently exceeded expectations and earned a reputation for excellence. <br> <br>
                        We have evolved with the ever-changing business landscape while learning and adhering to global best practices. Kirtane & Pandit's legacy is built on the principles of integrity, accountability, and a client-centric approach, ensuring that they remain at the forefront of the industry, providing exceptional services to their esteemed clientele.</p>
                    </div>
                    <div class="col-lg-7 d-none d-lg-block">
                        <div class="box-banner-team">
                            <div class="arrow-down-banner shape-1"></div>
                            <div class="arrow-right-banner shape-2"></div>
                            <div class="banner-col-1">
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".0s">
                                    <img src="assets/imgs/page/team/banner1.png" alt="">
                                </div>
                            </div>
                            <div class="banner-col-2">
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".2s">
                                    <img src="assets/imgs/page/team/banner2.png" alt="">
                                </div>
                                <div class="img-banner hasBorder wow animate__animated animate__zoomIn" data-wow-delay=".4s">
                                    <img src="assets/imgs/page/team/banner3.png" alt="">
                                </div>
                            </div>
                            <div class="banner-col-3">
                                <div class="img-banner hasBorder2 wow animate__animated animate__zoomIn" data-wow-delay=".6s">
                                    <img src="assets/imgs/page/team/banner4.png" alt="">
                                </div>
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay=".8s">
                                    <img src="assets/imgs/page/team/banner5.png" alt="">
                                </div>
                                <div class="img-banner wow animate__animated animate__zoomIn" data-wow-delay="1s">
                                    <img src="assets/imgs/page/team/banner6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section bg-grey-80 pt-70 pb-70">
        <div class="container">
            <ul class="list-partners">
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <a href="#AdvisoryBoard">
                    	<h5 class="color-brand-1">Advisory Board 
                    	<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.25 6.75L9 12L3.75 6.75" stroke="#8EA4AC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						</h5>
					</a>
                </li>
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                    <a href="#ExecutiveBoard">
                    	<h5 class="color-brand-1">Practice & Regional Heads
                    	<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.25 6.75L9 12L3.75 6.75" stroke="#8EA4AC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						</h5>
					</a>
                </li>
                <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                    <a href="#ServicePartners">
                    	<h5 class="color-brand-1">Service Partners
                    	<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.25 6.75L9 12L3.75 6.75" stroke="#8EA4AC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						</h5>
					</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="section pt-40 bg-plan-2">
        <div class="container pt-20" id="AdvisoryBoard">
            <div class="row align-items-start">
                <div class="col-lg-6">
                    <h6 class="color-grey-300 wow animate__animated animate__fadeInUp" data-wow-delay=".s">Our leadership team</h6>
                    <h3 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Advisory Board</h3>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Ravi-Pandit.png')}}" alt="Ravi Pandit">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Ravi Pandit</a>
                            <p class="font-xs color-grey-200 mb-10">M.Com., I.C.W.A., F.C.A. & M.S.(MIT, USA)</p>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/ravi-pandit-2b64341a8/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Kishor-Patil.png')}}" alt="Kishor Patil">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Kishor Patil</a>
                            <p class="font-xs color-grey-200 mb-10">B.Com., F.C.A., I.C.W.A.</p>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/kishor-patil-758974189/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Shriharsh-Ghate.png')}}" alt="Shriharsh Ghate">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Shriharsh Ghate</a>
                            <p class="font-xs color-grey-200 mb-10">B.Com., F.C.A., C.S.</p>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/harshu-ghate-8772675/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Sharad-Bhagwat.png')}}" alt="Sharad Bhagwat">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Sharad Bhagwat</a>
                            <p class="font-xs color-grey-200 mb-10">B.Com. F.C.A.</p>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/sharad-bhagwat-6238a290/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom mt-10 pt-0"></div>
        <div class="container pt-20" id="ExecutiveBoard">
            <div class="row align-items-start">
                <div class="col-lg-6">
                    <h3 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Practice & Regional Heads</h3>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Suhas-Deshpande.png')}}" alt="Suhas Deshpande">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Suhas Deshpande</a>
                            <p class="font-md color-grey-300">Managing Partner</p>
                            <p class="font-xs color-grey-200 mb-5">B.Com., F.C.A.</p>
                            <a href="mailto:suhas.deshpande@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">suhas.deshpande@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/suhas-deshpande-ba75a66/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Sandeep-Welling.png')}}" alt="Sandeep Welling">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Sandeep Welling</a>
                            <p class="font-md color-grey-300">COO</p>
                            <p class="font-xs color-grey-200 mb-5">M. Com., F.C.A., D.I.S.A.</p>
                            <a href="mailto:suhas.deshpande@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">suhas.deshpande@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="hhttps://www.linkedin.com/in/sandeepwelling/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Milind-Limaye.png')}}" alt="Milind Limaye">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Milind Limaye</a>
                            <p class="font-md color-grey-300">Risk Management Services</p>
                            <p class="font-xs color-grey-200 mb-5">M.Com., F.C.A., F.A.F.D.</p>
                            <a href="mailto:milind.limaye@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">milind.limaye@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/camilindlimaye/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Kishor-Phadke.png')}}" alt="Kishor Phadke">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Kishor Phadke</a>
                            <p class="font-md color-grey-300">Direct Tax & Legal</p>
                            <p class="font-xs color-grey-200 mb-5">B.Com., F.C.A., L.L.B.</p>
                            <a href="mailto:kishor.phadke@kitanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">kishor.phadke@kitanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/kishor-phadke-787a0543/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Shripad-Kulkarni.png')}}" alt="Shripad Kulkarni">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Shripad Kulkarni</a>
                            <p class="font-md color-grey-300">Process Management & Outsourcing</p>
                            <p class="font-xs color-grey-200 mb-5">B.Com., F.C.A.</p>
                            <a href="mailto:shripad.kulkarni@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">shripad.kulkarni@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/shripad-kulkarni-3485655/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Sham-Sunder.png')}}" alt="Sham Sunder">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Sham Sunder</a>
                            <p class="font-md color-grey-300">Assurance & Risk Management Services</p>
                            <p class="font-xs color-grey-200 mb-5">B.Com., F.C.A., F.A.F.D.</p>
                            <a href="mailto:shamsunder.k@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">shamsunder.k@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/sham-sunder-krishna-murthy-a6327514/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Anil-Girdhar.png')}}" alt="Anil Girdhar">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Anil Girdhar</a>
                            <p class="font-md color-grey-300">Corporate Advisory & Process Management</p>
                            <p class="font-xs color-grey-200 mb-5">B.Com, F.C.A., A.C.S., F.A.F.D.</p>
                            <a href="mailto:anil.girdhar@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">anil.girdhar@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/anil-girdhar-50224725/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom mt-10 pt-0"></div>
        <div class="container pt-20" id="ServicePartners">
            <div class="row align-items-start">
                <div class="col-lg-6">
                    <h3 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Service Partners</h3>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Parag-Pansare.png')}}" alt="Parag Pansare">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Parag Pansare</a>
                            <p class="font-md color-grey-300">Assurance Services</p>
                            <p class="font-xs color-grey-200">M.Com., C.W.A., F.C.A.</p>
                            <p class="font-xs color-grey-200 mb-5">Location: Pune</p>
                            <a href="mailto:parag.pansare@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">parag.pansare@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/parag-pansare-65b538103/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Pralhad-Mandhana.png')}}" alt="Pralhad Mandhana">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Pralhad Mandhana</a>
                            <p class="font-md color-grey-300">Indirect Tax</p>
                            <p class="font-xs color-grey-200">B.Com., F.C.A., D.I.R.M., I.S.A.</p>
                            <p class="font-xs color-grey-200 mb-5">Location: Pune</p>
                            <a href="mailto:pralhad.mandhana@kitanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">pralhad.mandhana@kitanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/pralhad-mandhana-a575222b/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Suhrud-Lele.png')}}" alt="Suhrud Lele">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Suhrud Lele</a>
                            <p class="font-md color-grey-300">Assurance Services</p>
                            <p class="font-xs color-grey-200">M.Com., F.C.A., C.I.S.A., A.C.S. I.F.R.S., G.F.S.U. Certified</p>
                            <p class="font-xs color-grey-200 mb-5">Location: Pune</p>
                            <a href="mailto:suhrud.lele@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">suhrud.lele@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/suhrudlele/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Tanmay-Bodhe.png')}}" alt="Tanmay Bodhe">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Tanmay Bodhe</a>
                            <p class="font-md color-grey-300">Risk Management Services</p>
                            <p class="font-xs color-grey-200">M.Com., F.C.A., G.F.S.U. Certified, F.A.F.D.</p>
                            <p class="font-xs color-grey-200 mb-5">Location: Pune</p>
                            <a href="mailto:tanmay.bodhe@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">tanmay.bodhe@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/tanmay-bodhe-1021741b/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Mehul-Shah.png')}}" alt="Mehul Shah">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Mehul Shah</a>
                            <p class="font-md color-grey-300"> Direct Tax & Legal</p>
                            <p class="font-xs color-grey-200">B.Com., F.C.A.</p>
                            <p class="font-xs color-grey-200 mb-5">Location: Pune</p>
                            <a href="mailto:mehul.shah@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">mehul.shah@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/mehul-shah-7288089/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Mittal-Shah.png')}}" alt="Mittal Shah">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Mittal Shah</a>
                            <p class="font-md color-grey-300">Banking & Insurance Audits</p>
                            <p class="font-xs color-grey-200">B.Com., F.C.A</p>
                            <p class="font-xs color-grey-200 mb-5">Location: Mumbai</p>
                            <a href="mailto:mittal.shah@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">mittal.shah@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/mittal-shah-13302a29/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Samit-Saraf.png')}}" alt="Samit Saraf">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Samit Saraf</a>
                            <p class="font-md color-grey-300">Risk Management Services</p>
                            <p class="font-xs color-grey-200">B.Com., F.C.A, Adv. Dip. M.A. (C.I.M.A.)</p>
                            <p class="font-xs color-grey-200 mb-5">Location: Mumbai</p>
                            <a href="mailto:samit.saraf@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">samit.saraf@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/samit-saraf-63540135/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Aditya-Kanetkar.png')}}" alt="Aditya Kanetkar">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Aditya Kanetkar</a>
                            <p class="font-md color-grey-300">Assurance Services</p>
                            <p class="font-xs color-grey-200">B.Com., F.C.A., F.A.F.D.</p>
                            <p class="font-xs color-grey-200 mb-5">Location: Mumbai</p>
                            <a href="mailto:aditya.kanetkar@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">aditya.kanetkar@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/shripad-kulkarni-3485655/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Anand-Jog.png')}}" alt="Anand Jog">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Anand Jog</a>
                            <p class="font-md color-grey-300">Assurance Services</p>
                            <p class="font-xs color-grey-200">B.Com., F.C.A</p>
                            <p class="font-xs color-grey-200 mb-5">Location: Pune</p>
                            <a href="mailto:anand.jog@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">anand.jog@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/sham-sunder-krishna-murthy-a6327514/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".s">
                    <div class="card-team mb-30">
                        <div class="card-image">
                            <img src="{{asset('assets/imgs/team/Radhika-Sawrikar-Lele.png')}}" alt="Radhika Sawrikar Lele">
                        </div>
                        <div class="card-info">
                            <a class="font-lg-bold">Radhika Sawrikar Lele</a>
                            <p class="font-md color-grey-300">Assurance Services</p>
                            <p class="font-xs color-grey-200">B.com , A.C.A , D.I.S.A</p>
                            <p class="font-xs color-grey-200 mb-5">Location: Hyderabad</p>
                            <a href="mailto:Radhika.sawrikar@kirtanepandit.com" class="text-decoration-underline"><p class="font-xs color-grey-200 mb-10">Radhika.sawrikar@kirtanepandit.com</p></a>
                            <div class="list-socials mt-5">
                                <a class="icon-socials icon-linkedin" href="https://www.linkedin.com/in/anil-girdhar-50224725/" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection('content')