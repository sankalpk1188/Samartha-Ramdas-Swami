@extends('layouts/adminLayout/admin_design')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Author Section</h4>
                        @if (Session::has('flash_message_error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{!! session('flash_message_error') !!}</strong>
                            </div>
                        @endif
                        @if (Session::has('flash_message_success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{!! session('flash_message_success') !!}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Author Section</li>
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
                            <div class="card-header">
                                <h3 class="card-title">Add Author</h3>
                            </div>
                            <form method="post" action="{{ url('admin/add-author') }}" enctype="multipart/form-data"
                                role="form" id="addAuthor">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-12 ml-2">
                                            <label>Select Languages</label>
                                            <div id="languageCheckboxGroup">
                                                <label>
                                                    <input type="checkbox" name="languages[]" value="marathi"
                                                        class="language-checkbox">
                                                    Marathi
                                                </label><br>
                                                <label>
                                                    <input type="checkbox" name="languages[]" value="english"
                                                        class="language-checkbox">
                                                    English
                                                </label><br>
                                                <label>
                                                    <input type="checkbox" name="languages[]" value="hindi"
                                                        class="language-checkbox">
                                                    Hindi
                                                </label><br>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-8" id="marathiTitleField" style="display: none;">
                                            <label for="marathi_title" class="required">Marathi Title</label>
                                            <input type="text" name="marathi_title" class="form-control"
                                                id="marathi_title" placeholder="Enter Marathi Title">
                                        </div>
                                        <div class="form-group col-md-8" id="englishTitleField" style="display: none;">
                                            <label for="english_title" class="required">English Title</label>
                                            <input type="text" name="english_title" class="form-control"
                                                id="english_title" placeholder="Enter English Title">
                                        </div>
                                        <div class="form-group col-md-8" id="hindiTitleField" style="display: none;">
                                            <label for="hindi_title" class="required">Hindi Title</label>
                                            <input type="text" name="hindi_title" class="form-control"
                                                id="hindi_title" placeholder="Enter Hindi Title">
                                        </div>

                                        <div class="form-group col-md-8" id="marathiSubTitleField" style="display: none;">
                                            <label for="marathi_subtitle" class="required">Marathi Sub-title</label>
                                            <input type="text" name="marathi_subtitle" class="form-control"
                                                id="marathi_subtitle" placeholder="Enter Marathi Title">
                                        </div>
                                        <div class="form-group col-md-8" id="englishSubTitleField" style="display: none;">
                                            <label for="english_subtitle" class="required">English Sub-title</label>
                                            <input type="text" name="english_subtitle" class="form-control"
                                                id="english_subtitle" placeholder="Enter English Title">
                                        </div>
                                        <div class="form-group col-md-8" id="hindiSubTitleField" style="display: none;">
                                            <label for="hindi_subtitle" class="required">Hindi Sub-title</label>
                                            <input type="text" name="hindi_subtitle" class="form-control"
                                                id="hindi_subtitle" placeholder="Enter Hindi Title">
                                        </div>

                                        <div class="form-group col-md-8" id="marathiDescriptionField"
                                            style="display: none;">
                                            <label class="required"> Marathi Description</label>
                                            <textarea name="marathi_description" class="textarea form-control" id="marathi_description"
                                                placeholder="Enter Marathi Description"></textarea>
                                        </div>
                                        <div class="form-group col-md-8" id="englishDescriptionField"
                                            style="display: none;">
                                            <label class="required"> English Description</label>
                                            <textarea name="english_description" class="textarea form-control" id="english_description"
                                                placeholder="Enter English Description"></textarea>
                                        </div>
                                        <div class="form-group col-md-8" id="hindiDescriptionField"
                                            style="display: none;">
                                            <label class="required"> Hindi Description</label>
                                            <textarea name="hindi_description" class="textarea form-control" id="hindi_description"
                                                placeholder="Enter Hindi Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="exampleInputEmail1">Image <small>(Size: 1350x500px)</small></label>
                                        <input type="file" name="image" class="form-control p-1" id="image"
                                            accept="image/*">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary submit"><i
                                            class="fa fa-check-circle"></i> Add Literature</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="{{ asset('backend_plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
    $('.language-checkbox').change(function() {
        const language = $(this).val();
        const titleField = $(`#${language}TitleField input`);
        const subtitleField = $(`#${language}SubTitleField input`);
        const descriptionField = $(`#${language}DescriptionField textarea`);

        if ($(this).is(':checked')) {
            $(`#${language}TitleField`).show();
            titleField.rules('add', { required: true, maxlength: 20 });
            
            $(`#${language}SubTitleField`).show();
            subtitleField.rules('add', { required: true, maxlength: 5 });

            $(`#${language}DescriptionField`).show();
            descriptionField.rules('add', { required: true, maxlength: 270 });
        } else {
            $(`#${language}TitleField`).hide();
            titleField.rules('remove', 'required').val('');

            $(`#${language}SubTitleField`).hide();
            subtitleField.rules('remove', 'required').val('');

            $(`#${language}DescriptionField`).hide();
            descriptionField.rules('remove', 'required').val('');
        }
    });

    $('#addAuthor').validate({
        ignore: ':hidden',
        rules: {
            image: {
                accept: 'png|jpg|jpeg',
            },
        },
        messages: {
            image: {
                accept: "Only png, JPG, or JPEG formats are allowed.",
            },
        },
        submitHandler: function(form) {
            $(".submit").attr("disabled", true).html("<span class='fa fa-spinner fa-spin'></span> Please wait...");
            form.submit();
        }
    });
});

    </script>

   
@endsection
