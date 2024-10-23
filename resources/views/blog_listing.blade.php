@extends('layouts/frontLayout/front_design')
@section('content')

<main class="main">
    <section class="section banner-service bg-grey-60 position-relative">
        <div class="box-banner-abs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-12">
                        <div class="box-banner-service">
                            <h3 class="color-brand-1 mb-20 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">All the important insights, guidance and news you need to know.</h3>
                            <div class="row">
                                <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                                    <p class="font-lg color-grey-500">Keep up-to-date with all our latest company news and business content. The latest news, tips and advice to help you run your business with less fuss</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-xxl-6 col-xl-6 col-lg-6"></div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 pr-0">
                <div class="d-none d-xxl-block pl-70">
                    <div class="img-reveal">
                        <img class="w-100 d-block" src="assets/imgs/page/blog/banner.png" alt="iori">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section mt-80">
        <div class="container">
            <div class="box-list-blogs">
                {{-- <div class="mt-20 mb-30">
                    <h3 class="color-brand-1 title-line-right">Promotions</h3>
                </div> --}}
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-30 item-article product-news">
                        <div class="card-blog-grid card-blog-grid-3 hover-up">
                            <div class="card-image">
                                <a href="{{url('blog-detail/'.$blog->id.'/'.Str::slug($blog->title))}}">
                                    <img src="{{asset('assets/imgs/page/blog/img4.png')}}" alt="">
                                </a>
                            </div>
                            <div class="card-info">
                                <a href="{{url('blog-detail/'.$blog->id.'/'.Str::slug($blog->title))}}">
                                    <h6 class="color-brand-1">{{Str::limit($blog->title, 48)}}</h6>
                                </a>
                                <div class="mb-10 mt-10">
                                    <span class="font-xs color-grey-500">{{date('d M Y', strtotime($blog->date))}}</span>
                                    {{-- <span class="font-xs color-grey-500 icon-read">2 min read</span> --}}
                                </div>
                                <p class="font-sm color-grey-500 mt-10">{{ Str::limit(strip_tags($blog->description), 240)}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <nav class="justify-content-center d-flex mt-10">
                        <ul class="pagination">
                            {{$blogs->links('pagination::bootstrap-4')}}
                        </ul>
                    </nav>
                </div>
                {{-- <div class="mt-0 mb-30 text-center">
                    <a class="btn btn-white-circle font-sm-bold border-brand text-none" href="#">View more in this category</a>
                </div> --}}
            </div>
        </div>
    </section>
</main>

@endsection('content')