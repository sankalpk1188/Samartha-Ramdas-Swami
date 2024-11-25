
@extends('layouts/adminLayout/admin_design')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Banner Section</h4>
                    @if(Session::has('flash_message_error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{!! session('flash_message_error') !!}</strong>
                        </div>
                    @endif
                    @if(Session::has('flash_message_success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{!! session('flash_message_success') !!}</strong>
                        </div>
                    @endif
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Literature Section</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <form method="post" action="{{ url('admin/edit-literature/'.$literature->id) }}" enctype="multipart/form-data" role="form" id="editLiterature">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label>Select Languages</label>
                                        <div id="languageCheckboxGroup">
                                            <label>
                                                <input type="checkbox" name="languages[]" value="marathi" class="language-checkbox"
                                                {{ in_array('marathi', $literature->languages ?? []) ? 'checked' : '' }}>
                                                Marathi
                                            </label><br>
                                            <label>
                                                <input type="checkbox" name="languages[]" value="english" class="language-checkbox"
                                                {{ in_array('english', $literature->languages ?? []) ? 'checked' : '' }}>
                                                English
                                            </label><br>
                                            <label>
                                                <input type="checkbox" name="languages[]" value="hindi" class="language-checkbox"
                                                {{ in_array('hindi', $literature->languages ?? []) ? 'checked' : '' }}>
                                                Hindi
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3" id="marathiTitleField" style="display: none;">
                                        <label for="marathi_title" class="required">Marathi Title</label>
                                        <input type="text" name="marathi_title" class="form-control" id="marathi_title"
                                               value="{{ $literature->marathi_title ?? '' }}" placeholder="Enter Marathi Title">
                                    </div>
                                    <div class="form-group col-md-3" id="englishTitleField" style="display: none;">
                                        <label for="english_title" class="required">English Title</label>
                                        <input type="text" name="english_title" class="form-control" id="english_title"
                                               value="{{ $literature->english_title ?? '' }}" placeholder="Enter English Title">
                                    </div>
                                    <div class="form-group col-md-3" id="hindiTitleField" style="display: none;">
                                        <label for="hindi_title" class="required">Hindi Title</label>
                                        <input type="text" name="hindi_title" class="form-control" id="hindi_title"
                                               value="{{ $literature->hindi_title ?? '' }}" placeholder="Enter Hindi Title">
                                    </div>
                                </div>

                                <div class="form-group col-md-8">
                                    <label for="exampleInputEmail1">Image <small>(Size: 1350x500px)</small></label>
                                    @if(!empty($literature->image))
                                        <input type="hidden" name="current_image" value="{{ $literature->image }}">
                                    @endif
                                    <input type="file" name="image" class="form-control p-1" id="image" value="{{ $literature->image }}">
                                    @if(!empty($literature->image))
                                        <img style="width: 15%;" class="mt-2" src="{{ asset('assets/imgs/literature/'.$literature->image) }}" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary submit"><i class="fa fa-check-circle"></i> Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="{{ asset('backend_plugins/jquery/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        function toggleTitleFields() {
            $('#marathiTitleField').toggle($(".language-checkbox[value='marathi']").is(':checked'));
            $('#englishTitleField').toggle($(".language-checkbox[value='english']").is(':checked'));
            $('#hindiTitleField').toggle($(".language-checkbox[value='hindi']").is(':checked'));
        }
        toggleTitleFields();
        $('.language-checkbox').change(function() {
            toggleTitleFields();
        });
        $('#editBanner').validate({
            ignore: [],
            debug: false,
            rules: {
                image: {
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

        $('#editLiterature').validate({
            ignore: [],
            debug: false,
            rules: {
                
                marathi_title: {
                    required: true,
                    maxlength: 55,
                },
                english_title: {
                    required: true,
                    maxlength: 55,
                },
                hindi_title: {
                    required: true,
                    maxlength: 55,
                },
                
                image: {
                    required: true,
                    accept: 'png|jpg|jpeg',
                },
            },
            messages: {
                marathi_title: {
                    required: "Please enter no more than {0} characters.",   
                },
                english_title: {
                    required: "Please enter no more than {0} characters.",   
                },
                hindi_title: {
                    required: "Please enter no more than {0} characters.",   
                },
               
            },
            submitHandler: function(form) {
                $(".submit").attr("disabled", true);
                $(".submit").html("<span class='fa fa-spinner fa-spin'></span> Please wait...");
                form.submit();
            }
        });
    });
</script>
@endsection
