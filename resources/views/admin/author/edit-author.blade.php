@extends('layouts/adminLayout/admin_design')
@section('content')
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
                            <form method="post" action="{{ url('admin/edit-author/' . $author->id) }}"
                                enctype="multipart/form-data" role="form" id="editAuthor">@csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>Select Languages</label>
                                            <div id="languageCheckboxGroup">
                                                <label>
                                                    <input type="checkbox" name="languages[]" value="marathi"
                                                        class="language-checkbox"
                                                        {{ in_array('marathi', $literature->languages ?? []) ? 'checked' : '' }}>
                                                       Marathi
                                                </label><br>
                                                <label>
                                                    <input type="checkbox" name="languages[]" value="english"
                                                        class="language-checkbox"
                                                        {{ in_array('english', $literature->languages ?? []) ? 'checked' : '' }}>
                                                       English
                                                </label><br>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-8" id="marathiTitleField" style="display: none;">
                                            <label for="marathi_title" class="required">Marathi Title</label>
                                            <input type="text" name="marathi_title" class="form-control"
                                                id="marathi_title" value="{{ $author->marathi_title ?? '' }}"
                                                placeholder="Enter Marathi Title" required>
                                        </div>
                                        <div class="form-group col-md-8" id="englishTitleField" style="display: none;">
                                            <label for="english_title" class="required">English Title</label>
                                            <input type="text" name="english_title" class="form-control"
                                                id="english_title" value="{{ $author->english_title ?? '' }}"
                                                placeholder="Enter English Title" required>
                                        </div>
                                        <div class="form-group col-md-8" id="marathiSubTitleField" style="display: none;">
                                            <label for="marathi_subtitle" class="required">Marathi Sub-title</label>
                                            <input type="text" name="marathi_subtitle" class="form-control"
                                                id="marathi_subtitle" value="{{ $author->marathi_subtitle ?? '' }}"
                                                placeholder="Enter Marathi Sub-title" required>
                                        </div>
                                        <div class="form-group col-md-8" id="englishSubTitleField" style="display: none;">
                                            <label for="english_subtitle" class="required">English Sub-title</label>
                                            <input type="text" name="english_subtitle" class="form-control"
                                                id="english_subtitle" value="{{ $author->english_subtitle ?? '' }}"
                                                placeholder="Enter English Sub-title" required>
                                        </div>
                                        <div class="form-group col-md-8" id="marathiDescriptionField"
                                            style="display: none;">
                                            <label for="marathi_description" class="required">Marathi Description</label>
                                            <textarea name="marathi_description" class="textarea form-control" placeholder="Enter Marathi Description"
                                                valve="{!! $author->marathi_description !!}" required>{!! $author->marathi_description !!}</textarea>
                                        </div>
                                        <div class="form-group col-md-8" id="englishDescriptionField"
                                            style="display: none;">
                                            <label for="english_description" class="required">English Description</label>
                                            <textarea name="english_description" class="textarea form-control" placeholder="Enter English Description"
                                                valve="{!! $author->english_description !!}" required>{!! $author->english_description !!}</textarea>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="exampleInputEmail1">Image <small>(Size: 1350x500px) |
                                                </small></label>
                                            @if (!empty($author->image))
                                                <input type="hidden" name="current_image" value="{{ $author->image }}">
                                            @endif
                                            <small>(Note: Image size should be less than 500KB)</small>
                                            <input type="file" name="image" class="form-control p-1" id="image"
                                                value="{{ $author->image }}">
                                            <img style="width: 15%;" class="mt-2"
                                                src="{{ asset('assets/imgs/author/' . $author->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary submit"><i
                                     class="fa fa-check-circle"></i> Update</button>
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
                console.log("Toggle Title Fields triggered");
                $('#marathiTitleField').toggle($(".language-checkbox[value='marathi']").is(':checked'));
                $('#englishTitleField').toggle($(".language-checkbox[value='english']").is(':checked'));

                $('#marathiSubTitleField').toggle($(".language-checkbox[value='marathi']").is(':checked'));
                $('#englishSubTitleField').toggle($(".language-checkbox[value='english']").is(':checked'));

                $('#marathiDescriptionField').toggle($(".language-checkbox[value='marathi']").is(':checked'));
                $('#englishDescriptionField').toggle($(".language-checkbox[value='english']").is(':checked'));
            }
            toggleTitleFields();
            $('.language-checkbox').change(function() {
                console.log('Checkbox value changed');
                toggleTitleFields();
            });

            $('#editAuthor').validate({
                ignore: [],
                debug: false,
                rules: {
                    marathi_title: {
                        required: true,
                    },
                    english_title: {
                        required: true,
                    },
                    marathi_subtitle: {
                        required: true,
                    },
                    english_subtitle: {
                        required: true,
                    },
                    marathi_description: {
                        required: true,
                    },
                    english_description: {
                        required: true,
                    },
                    image: {
                        required: false,
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
                marathi_subtitle: {
                    required: "Please enter no more than {0} characters.",   
                },
                english_subtitle: {
                    required: "Please enter no more than {0} characters.",   
                },
                marathi_description: {
                    required: "Please enter no more than {0} characters.",   
                },
                english_description: {
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
