@extends('layouts/adminLayout/admin_design')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Edit Literature</h4>
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
                            <li class="breadcrumb-item active">Edit Literature</li>
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
                                <h3 class="card-title">Edit Literature Details</h3>
                            </div>
                            <form action="{{ url('admin/edit-detailpage/'.$detailPage->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-4">
                                    <label for="language">Select Language</label>
                                    <div>
                                        <label>
                                            <input type="checkbox" class="language-checkbox" value="marathi" 
                                                {{$detailPage->marathi_title ? 'checked' : '' }}> Marathi
                                        </label>
                                        <label>
                                            <input type="checkbox" class="language-checkbox" value="hindi" 
                                                {{$detailPage->hindi_title ? 'checked' : '' }}> Hindi
                                        </label>
                                        <label>
                                            <input type="checkbox" class="language-checkbox" value="english" 
                                                {{$detailPage->english_title ? 'checked' : '' }}> English
                                        </label>
                                    </div>
                                </div>
                                <div class="row p-3 mt-3">
                                    
                                    <div id="marathiTitleField" class="language-fields col-md-4" 
                                        style="{{ $detailPage->marathi_title ? '' : 'display: none;' }}">
                                        <h5>Marathi</h5>
                                        <div class="form-group">
                                            <label for="mr_author_id">Select Author</label>
                                            <select name="mr_author_id" class="form-control">
                                                <option value="">-- Select Author --</option>
                                                @foreach ($authors as $author)
                                                    <option value="{{ $author->id }}" 
                                                        {{ $detailPage->mr_author_id == $author->id ? 'selected' : '' }}>
                                                        {{ $author->marathi_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="mr_literature_id">Select Literature</label>
                                            <select name="mr_literature_id" class="form-control">
                                                <option value="">-- Select Literature --</option>
                                                @foreach ($literatures as $literature)
                                                    <option value="{{ $literature->id }}" 
                                                        {{ $detailPage->mr_literature_id == $literature->id ? 'selected' : '' }}>
                                                        {{ $literature->marathi_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="mr_pdf_file">Upload PDF</label>
                                            <input type="file" name="mr_pdf_file" class="form-control" accept="application/pdf">
                                            @if ($detailPage->mr_pdf_file)
                                                <a href="{{ asset('assets/pdfs/detailpage/'.$detailPage->mr_pdf_file) }}" target="_blank">
                                                    View Uploaded PDF
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div id="hindiTitleField" class="language-fields col-md-4" 
                                        style="{{ $detailPage->hindi_title ? '' : 'display: none;' }}">
                                        <h5>Hindi</h5>
                                        <div class="form-group">
                                            <label for="hi_author_id">Select Author</label>
                                            <select name="hi_author_id" class="form-control">
                                                <option value="">-- Select Author --</option>
                                                @foreach ($authors as $author)
                                                    <option value="{{ $author->id }}" 
                                                        {{ $detailPage->hi_author_id == $author->id ? 'selected' : '' }}>
                                                        {{ $author->hindi_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="hi_literature_id">Select Literature</label>
                                            <select name="hi_literature_id" class="form-control">
                                                <option value="">-- Select Literature --</option>
                                                @foreach ($literatures as $literature)
                                                    <option value="{{ $literature->id }}" 
                                                        {{ $detailPage->hi_literature_id == $literature->id ? 'selected' : '' }}>
                                                        {{ $literature->hindi_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="hi_pdf_file">Upload PDF</label>
                                            <input type="file" name="hi_pdf_file" class="form-control" accept="application/pdf">
                                            @if ($detailPage->hi_pdf_file)
                                                <a href="{{ asset('assets/pdfs/detailpage/'.$detailPage->hi_pdf_file) }}" target="_blank">
                                                    View Uploaded PDF
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div id="englishTitleField" class="language-fields col-md-4" 
                                        style="{{ $detailPage->english_title ? '' : 'display: none;' }}">
                                        <h5>English</h5>
                                        <div class="form-group">
                                            <label for="en_author_id">Select Author</label>
                                            <select name="en_author_id" class="form-control">
                                                <option value="">-- Select Author --</option>
                                                @foreach ($authors as $author)
                                                    <option value="{{ $author->id }}" 
                                                        {{ $detailPage->en_author_id == $author->id ? 'selected' : '' }}>
                                                        {{ $author->english_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="en_literature_id">Select Literature</label>
                                            <select name="en_literature_id" class="form-control">
                                                <option value="">-- Select Literature --</option>
                                                @foreach ($literatures as $literature)
                                                    <option value="{{ $literature->id }}" 
                                                        {{ $detailPage->en_literature_id == $literature->id ? 'selected' : '' }}>
                                                        {{ $literature->english_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="en_pdf_file">Upload PDF</label>
                                            <input type="file" name="en_pdf_file" class="form-control" accept="application/pdf">
                                            @if ($detailPage->en_pdf_file)
                                                <a href="{{ asset('assets/pdfs/detailpage/'.$detailPage->en_pdf_file) }}" target="_blank">
                                                    View Uploaded PDF
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2 ml-3">Update</button>
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

