@extends('layouts/frontLayout/front_design')
@section('content')
    <main class="main">
      <section class="section banner-contact bg-10 bg-size" style="background-image: url('assets/imgs/about_swami.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
      </section>
        <section class="section mt-">
          {{-- <div>
          <h1 class="color-brand-1">Events</h1>
        </div> --}}
            <div class="container">
                <div class="row mt-55">
                    <div class="col-xl-3 mb-20 col-lg-6 col-md-6 wow animate__ animate__fadeIn animated" data-wow-delay=".0s"
                        style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                        <div class="card-blog-grid card-blog-grid-2 hover-up ">
                            <div class="card-image img-reveal"
                                style="visibility: visible; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><a
                                    href="blog-detail.html"><img src='{{asset("assets/imgs/gallery/utsav-1.jpg")}}' alt="iori"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);"></a>
                            </div>
                            <div class="card-info"><a href="blog-detail.html">
                                    <h6 class="color-brand-1">Easy Ways to Make Money While You Sleep</h6>
                                </a>
                                <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id dignissim arcu
                                    volutpat vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu, blandit at
                                    aliquet sit amet, convallis nec risus.</p>
                                <div class="mt-20 text-center border-top pt-20">
                                    <h7 class="color-grey-300 mr-15"> <i class="fas fa-calendar-alt mr-5"></i>29 May 2022</h7>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animate__ animate__fadeIn animated" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="card-blog-grid card-blog-grid-2 hover-up">
                            <div class="card-image img-reveal"
                                style="visibility: visible; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><a
                                    href="blog-detail.html"><img src='{{asset("assets/imgs/gallery/utsav-2.jpg")}}' alt="iori"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);"></a>
                            </div>
                            <div class="card-info"><a href="blog-detail.html">
                              <h6 class="color-brand-1">Easy Ways to Make Money While You Sleep</h6>
                          </a>
                          <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id dignissim arcu
                              volutpat vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu, blandit at
                              aliquet sit amet, convallis nec risus.</p>
                          <div class="mt-20 text-center border-top pt-20">
                              <h7 class="color-grey-300 mr-15"> <i class="fas fa-calendar-alt mr-5"></i>29 May 2022</h7>
                          </div>
                      </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animate__ animate__fadeIn animated" data-wow-delay=".2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <div class="card-blog-grid card-blog-grid-2 hover-up">
                            <div class="card-image img-reveal"
                                style="visibility: visible; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><a
                                    href="blog-detail.html"><img src='{{asset("assets/imgs/gallery/utsav-3.jpg")}}' alt="iori"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);"></a>
                            </div>
                            <div class="card-info"><a href="blog-detail.html">
                              <h6 class="color-brand-1">Easy Ways to Make Money While You Sleep</h6>
                          </a>
                          <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id dignissim arcu
                              volutpat vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu, blandit at
                              aliquet sit amet, convallis nec risus.</p>
                          <div class="mt-20 text-center border-top pt-20">
                              <h7 class="color-grey-300 mr-15"> <i class="fas fa-calendar-alt mr-5"></i>29 May 2022</h7>
                          </div>
                      </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animate__ animate__fadeIn animated" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="card-blog-grid card-blog-grid-2 hover-up">
                            <div class="card-image img-reveal"
                                style="visibility: visible; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><a
                                    href="blog-detail.html"><img src='{{asset("assets/imgs/gallery/utsav-4.jpg")}}' alt="iori"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);"></a>
                            </div>
                            <div class="card-info"><a href="blog-detail.html">
                              <h6 class="color-brand-1">Easy Ways to Make Money While You Sleep</h6>
                          </a>
                          <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id dignissim arcu
                              volutpat vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu, blandit at
                              aliquet sit amet, convallis nec risus.</p>
                          <div class="mt-20 text-center border-top pt-20">
                              <h7 class="color-grey-300 mr-15">  <i class="fas fa-calendar-alt mr-5"></i>29 May 2022</h7>
                          </div>
                      </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-20 col-lg-6 col-md-6 wow animate__ animate__fadeIn animated" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="card-blog-grid card-blog-grid-2 hover-up">
                            <div class="card-image img-reveal"
                                style="visibility: visible; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><a
                                    href="blog-detail.html"><img src='{{asset("assets/imgs/gallery/utsav-1.jpg")}}' alt="iori"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);"></a>
                            </div>
                            <div class="card-info"><a href="blog-detail.html">
                              <h6 class="color-brand-1">Easy Ways to Make Money While You Sleep</h6>
                          </a>
                          <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id dignissim arcu
                              volutpat vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu, blandit at
                              aliquet sit amet, convallis nec risus.</p>
                          <div class="mt-20 text-center border-top pt-20">
                              <h7 class="color-grey-300 mr-15">  <i class="fas fa-calendar-alt mr-5"></i>29 May 2022</h7>
                          </div>
                      </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animate__ animate__fadeIn animated" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="card-blog-grid card-blog-grid-2 hover-up">
                            <div class="card-image img-reveal"
                                style="visibility: visible; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><a
                                    href="blog-detail.html"><img src='{{asset("assets/imgs/gallery/utsav-2.jpg")}}' alt="iori"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);"></a>
                            </div>
                            <div class="card-info"><a href="blog-detail.html">
                              <h6 class="color-brand-1">Easy Ways to Make Money While You Sleep</h6>
                          </a>
                          <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id dignissim arcu
                              volutpat vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu, blandit at
                              aliquet sit amet, convallis nec risus.</p>
                          <div class="mt-20 text-center border-top pt-20">
                              <h7 class="color-grey-300 mr-15">  <i class="fas fa-calendar-alt mr-5"></i>29 May 2022</h7>
                          </div>
                      </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animate__ animate__fadeIn animated" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="card-blog-grid card-blog-grid-2 hover-up">
                            <div class="card-image img-reveal"
                                style="visibility: visible; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><a
                                    href="blog-detail.html"><img src='{{asset("assets/imgs/gallery/utsav-3.jpg")}}' alt="iori"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);"></a>
                            </div>
                            <div class="card-info"><a href="blog-detail.html">
                              <h6 class="color-brand-1">Easy Ways to Make Money While You Sleep</h6>
                          </a>
                          <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id dignissim arcu
                              volutpat vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu, blandit at
                              aliquet sit amet, convallis nec risus.</p>
                          <div class="mt-20 text-center border-top pt-20">
                              <h7 class="color-grey-300 mr-15">  <i class="fas fa-calendar-alt mr-5"></i>29 May 2022</h7>
                          </div>
                      </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animate__ animate__fadeIn animated" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="card-blog-grid card-blog-grid-2 hover-up">
                            <div class="card-image img-reveal"
                                style="visibility: visible; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><a
                                    href="blog-detail.html"><img src='{{asset("assets/imgs/gallery/utsav-4.jpg")}}' alt="iori"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);"></a>
                            </div>
                            <div class="card-info"><a href="blog-detail.html">
                              <h6 class="color-brand-1">Easy Ways to Make Money While You Sleep</h6>
                          </a>
                          <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id dignissim arcu
                              volutpat vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu, blandit at
                              aliquet sit amet, convallis nec risus.</p>
                          <div class="mt-20 text-center border-top pt-20">
                              <h7 class="color-grey-300 mr-15"><i class="fas fa-calendar-alt mr-5"></i>29 May 2022</h7>
                          </div>
                      </div>
                        </div>
                    </div>
                </div>
                </div>
        </section>
    </main>
@endsection('content')