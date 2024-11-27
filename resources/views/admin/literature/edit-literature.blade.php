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
    $('.language-checkbox').change(function() {
        const language = $(this).val();
        const titleField = $(`#${language}TitleField`);

        if ($(this).is(':checked')) {
            titleField.show();
        } else {
            titleField.hide().find('input').val(''); 
        }
    });

    $('#addLiterature').validate({
        ignore: [],
        debug: false,
        rules: {
            image: {
                required: true,
                accept: 'png|jpg|jpeg',
            },
            marathi_title: {
                required: function() {
                    return $("input[name='languages[]'][value='marathi']").is(':checked');
                },
                maxlength: 25,
            },
            english_title: {
                required: function() {
                    return $("input[name='languages[]'][value='english']").is(':checked');
                },
                maxlength: 25,
            },
            hindi_title: {
                required: function() {
                    return $("input[name='languages[]'][value='hindi']").is(':checked');
                },
                maxlength: 25,
            },
        },
        messages: {
            marathi_title: {
                required: "Marathi title is required when Marathi is selected.",
                maxlength: "Marathi title cannot exceed 25 characters."
            },
            english_title: {
                required: "English title is required when English is selected.",
                maxlength: "English title cannot exceed 25 characters."
            },
            hindi_title: {
                required: "Hindi title is required when Hindi is selected.",
                maxlength: "Hindi title cannot exceed 25 characters."
            },
            image: {
                required: "Please upload an image.",
                accept: "Only PNG, JPG, and JPEG formats are allowed."
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
