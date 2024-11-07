@extends('layouts/frontLayout/front_design')
@section('content')

<!-- Bootstrap CSS -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}


<main class="main">
    <section class="section banner-contact bg-10 bg-size" style="background-image: url('assets/imgs/daswani_srs.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
    </section>

    <section class="section mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="card-blog-grid card-blog-grid-2 hover-up">
                        <div class="card-image img-reveal">
                            <a href="#" onclick="openModal('assets/imgs/daswani-bg.png')">
                                <img src="{{asset('assets/imgs/daswani-bg.png')}}" alt="iori" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="card-blog-grid card-blog-grid-2 hover-up">
                        <div class="card-image img-reveal">
                            <a href="#" onclick="openModal('assets/imgs/daswani-bg.png')">
                                <img src="{{asset('assets/imgs/daswani-bg.png')}}" alt="iori" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    <div class="card-blog-grid card-blog-grid-2 hover-up">
                        <div class="card-image img-reveal">
                            <a href="#" onclick="openModal('assets/imgs/daswani-bg.png')">
                                <img src="{{asset('assets/imgs/daswani-bg.png')}}" alt="iori" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div>
                    <img id="modalImage" src="" alt="Selected Image" class="img-fluid p-30" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>


</main>

<script>
  function openModal(imageSrc) {
    // Set the image source to the modal image
    document.getElementById('modalImage').src = imageSrc;

    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
  }
</script>

<!-- Bootstrap JS (with Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection('content')