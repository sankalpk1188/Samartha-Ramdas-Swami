@extends('layouts/adminLayout/admin_design')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Literature Section</h4>
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
                        <div class="card-header">
                            <h3 class="card-title">Add Literature</h3>
                        </div>
                        <form method="post" action="{{ url('admin/add-literature') }}" enctype="multipart/form-data" role="form" id="addLiterature">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label>Select Languages</label>
                                        <div id="languageCheckboxGroup">
                                            <label>
                                                <input type="checkbox" name="languages[]" value="marathi" class="language-checkbox">
                                                Marathi
                                            </label><br>
                                            <label>
                                                <input type="checkbox" name="languages[]" value="english" class="language-checkbox">
                                                English
                                            </label><br>
                                            <label>
                                                <input type="checkbox" name="languages[]" value="hindi" class="language-checkbox">
                                                Hindi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3" id="marathiTitleField" style="display: none;">
                                        <label for="marathi_title" class="required">Marathi Title</label>
                                        <input type="text" name="marathi_title" class="form-control" id="marathi_title" placeholder="Enter Marathi Title">
                                    </div>
                                    <div class="form-group col-md-3" id="englishTitleField" style="display: none;">
                                        <label for="english_title" class="required">English Title</label>
                                        <input type="text" name="english_title" class="form-control" id="english_title" placeholder="Enter English Title">
                                    </div>
                                    <div class="form-group col-md-3" id="hindiTitleField" style="display: none;">
                                        <label for="hindi_title" class="required">Hindi Title</label>
                                        <input type="text" name="hindi_title" class="form-control" id="hindi_title" placeholder="Enter Hindi Title">
                                    </div>                              
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="exampleInputEmail1">Image <small>(Size: 1350x500px)</small></label>
                                    <input type="file" name="image" class="form-control p-1" id="image" accept="image/*">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary submit"><i class="fa fa-check-circle"></i> Add Literature</button>
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
                            
