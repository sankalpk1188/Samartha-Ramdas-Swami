@extends('layouts/frontLayout/front_design')
@section('content')

<main class="main">
    <section class="section pt-50 pb-100">
        <div class="container">
            <div class="box-image-detail">
                <img class="bd-rd16 d-block" src="{{asset('assets/imgs/page/job-detail/img-job.png')}}" alt="iori">
            </div>
            <div class="content-detail">
                <div class="row">
                    <div class="col-lg-10 col-11 m-auto">
                        <div class="box-detail-content">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-30">
                                    <h3 class="color-brand-1 mb-10 mt-0">{{$job->designation_name}}</h3>
                                    <span class="date-post font-xs color-grey-300">
                                        <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>Posted On: {{date('d M Y',strtotime($job->created_at))}}
                                    </span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-start text-md-end mb-30">
                                    <a class="btn btn-brand-1 btn-apply" data-bs-toggle="modal" data-bs-target="#enqModal">
                                    Appy Now </a>
                                </div>
                            </div>
                            <div class="border-bottom bd-grey-80 mb-20 pt-0"></div>
                            <h5 class="color-brand-1">Job Summary</h5>
                            <div class="box-info-job">
                                <div class="row align-items-start">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="item-job">
                                            <div class="">
                                                <span class="text-muted">Qualification </span>
                                                <p>{{$job->qualification}}</p>
                                            </div>
                                        </div>
                                        <div class="item-job">
                                            <div class="">
                                                <span class="text-muted">Location </span>
                                                <p>{{$job->location}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="item-job">
                                            <div>
                                                <span class="text-muted">Experience</span>
                                                <p>{{$job->experience}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="color-brand-1 mt-0 mb-1">Job Description</h5>
                            <div>{!! nl2br($job->job_description) !!}</div>

                            <div class="border-bottom bd-grey-80 mb-20 pt-4"></div>

                            <h5 class="color-brand-1">Apply Now</h5>
                            <form action="{{url('submit-job-application')}}" method="POST" enctype="multipart/form-data" id="jobApplication">@csrf
                                <input type="hidden" name="job_id" value="{{Request()->id}}">
                                <div class="row">
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                    @if(Session::has('success_message'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>{!! session('success_message') !!}</strong>
                                        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group mb-25">
                                            <input class="form-control" type="text" name="name" required placeholder="Name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group mb-25">
                                            <input class="form-control" type="email" name="email" required placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group mb-25">
                                            <input class="form-control" type="text" name="phone" required placeholder="Phone *">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group mb-25">
                                            <input class="form-control" type="text" name="qualification" required placeholder="Qualifications *">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group mb-25">
                                            <input class="form-control" type="text" name="experience" required placeholder="Experience *">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group mb-25">
                                            <input class="form-control" type="text" name="address" required placeholder="Address *">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group mb-25">
                                            <input class="form-control" type="text" name="current_ctc" required placeholder="Current CTC *">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group mb-25">
                                            <input class="form-control" type="text" name="expect_ctc" required placeholder="Expected CTC *">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="form-group mb-25">
                                            <input class="form-control" type="text" name="ref_by" placeholder="Referred By">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-25">
                                            <input class="form-control p-15 pl-20" type="file" name="resume" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group mb-25">
                                            <input class="form-control" type="text" name="source" placeholder="How did you come to know about this job?">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6 col-9">
                                        {{-- <div class="g-recaptcha mb-10" id="feedback-recaptcha" data-sitekey="{{ config('app.google_recaptcha_key') }}"></div> --}}
                                        <div class="form-group">
                                            <button class="btn btn-brand-1-full font-sm" type="submit">Send message <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection('content')