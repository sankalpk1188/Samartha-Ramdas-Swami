@extends('layouts/adminLayout/admin_design')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Literature Section</h4>
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
                            <form action="{{ url('admin/add-detailpage') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row container-fluid mt-3">
                                    <div class="form-group col-md-4">
                                        <label for="author_id">Select Author</label>
                                        <select name="author_id" id="author_id" class="form-control" required>
                                            <option value="">-- Select Author --</option>
                                            @foreach ($authors as $author)
                                                <option value="{{ $author->id }}">{{ $author->marathi_title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="literature_id">Select Literature</label>
                                        <select name="literature_id" id="literature_id" class="form-control" required>
                                            <option value="">-- Select Literature --</option>
                                            @foreach ($literatures as $literature)
                                                <option value="{{ $literature->id }}">{{ $literature->marathi_title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="pdf_file">Upload PDF</label>
                                        <input type="file" name="pdf_file" class="form-control" accept="application/pdf"
                                            required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mb-2 ml-3">Submit</button>
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
        });
    </script>
@endsection
