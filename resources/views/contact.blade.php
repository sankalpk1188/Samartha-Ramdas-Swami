@extends('layouts/frontLayout/front_design')
@section('content')

<main class="main">

    <section class="section banner-contact bg-10 bg-size" style="background-image: url('assets/imgs/about_swami.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
    </section>
    
    <section class="section mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="color-brand-1 mb-15">Get in touch</h2>
                    <p class="font-sm color-grey-500">Do you want to know more or contact our sales department?</p>
                    <div class="mt-50">
                        <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".0s">
                            <div class="card-offer card-we-do card-contact hover-up">
                                <div class="card-image">
                                    <img src="assets/imgs/page/contact/img1.png" alt="iori">
                                </div>
                                <div class="card-info">
                                    <h6 class="color-brand-1 mb-10">Visit the Knowledge Base</h6>
                                    <p class="font-md color-grey-500 mb-5">Browse customer support articles and step-by-step instructions for specific features.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="card-offer card-we-do card-contact hover-up">
                                <div class="card-image">
                                    <img src="assets/imgs/page/contact/img2.png" alt="iori">
                                </div>
                                <div class="card-info">
                                    <h6 class="color-brand-1 mb-10">Watch Product Videos</h6>
                                    <p class="font-md color-grey-500 mb-5">Watch our video tutorials for visual walkthroughs on how to use our features.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <div class="card-offer card-we-do card-contact hover-up">
                                <div class="card-image">
                                    <img src="assets/imgs/page/contact/img3.png" alt="iori">
                                </div>
                                <div class="card-info">
                                    <h6 class="color-brand-1 mb-10">Get in touch with Sales</h6>
                                    <p class="font-md color-grey-500 mb-5">Let us talk about how we can help your enterprise.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="box-form-contact wow animate__animated animate__fadeIn" data-wow-delay=".6s">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-25">
                                    <input class="form-control icon-user" type="text" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-25">
                                    <input class="form-control icon-email" type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-25">
                                    <input class="form-control icon-phone" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group mb-25">
                                    <input class="form-control icon-company" type="text" placeholder="Company">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-25">
                                    <input class="form-control" type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-25">
                                    <textarea class="form-control textarea-control" placeholder="Write something"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6 col-9">
                                <div class="form-group">
                                    <button class="btn btn-brand-1-full font-sm" type="submit">Send message <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </button>
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
<script src="{{ asset('backend_plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend_js/jquery.validate.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    $(document).ready(function() {
        $('#contactForm').validate({
            ignore: [],
            debug: false,
            rules: {
                title: {
                    required: true,
                },
                service_content: {
                    required: true,
                },
                image: {
                    required: true,
                    accept: 'png|jpg|jpeg',
                },                
            },
            messages: {},
            submitHandler: function(form) {
                $(".submit").attr("disabled", true);
                $(".submit").html("<span class='fa fa-spinner fa-spin'></span> Please wait...");
                form.submit();
            }
        });
    });
</script>
@endsection('scripts')

@endsection('content')