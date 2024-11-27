@extends('layouts/adminLayout/admin_design')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4>Detail Page Section</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ url('/admin/add-detailpage') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i>
                            Add New Detail Page</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if (Session::has('flash_message_error'))
                            <div class="alert alert-danger alert-block w-50">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{!! session('flash_message_error') !!}</strong>
                            </div>
                        @endif
                        @if (Session::has('flash_message_success'))
                            <div class="alert alert-success alert-block w-50">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{!! session('flash_message_success') !!}</strong>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped" style="overflow-x: auto;">
                                    <thead>
                                        <tr>
                                            <th>Sr no</th>
                                            <th> Marathi PDF</th>
                                            <th> Hindi PDF</th>
                                            <th> English PDF</th>
                                            <th>Marathi Author</th>
                                            <th>Hindi Author</th>
                                            <th>English Author</th>
                                            <th>Marathi Literature</th>
                                            <th>Hindi Literature</th>
                                            <th>English Literature</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detailpages as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @if ($row->mr_pdf_file)
                                                        <a href="{{ asset('assets/pdfs/detailpage/' . $row->mr_pdf_file) }}"
                                                            target="_blank">View PDF</a>
                                                    @else
                                                        <span class="badge badge-secondary">No PDF</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($row->hi_pdf_file)
                                                        <a href="{{ asset('assets/pdfs/detailpage/' . $row->hi_pdf_file) }}"
                                                            target="_blank">View PDF</a>
                                                    @else
                                                        <span class="badge badge-secondary">No PDF</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($row->en_pdf_file)
                                                        <a href="{{ asset('assets/pdfs/detailpage/' . $row->en_pdf_file) }}"
                                                            target="_blank">View PDF</a>
                                                    @else
                                                        <span class="badge badge-secondary">No PDF</span>
                                                    @endif
                                                </td>
                                                
                                                <td>{{ $row->mr_author->marathi_title ?? 'N/A' }}</td>
                                                <td>{{ $row->hi_author->hindi_title ?? 'N/A' }}</td>
                                                <td>{{ $row->en_author->english_title ?? 'N/A' }}</td>

                                                <td>{{ $row->mr_literature->marathi_title ?? 'N/A' }}</td>
                                                <td>{{ $row->hi_literature->hindi_title ?? 'N/A' }}</td>
                                                <td>{{ $row->en_literature->english_title ?? 'N/A' }}</td>
                                                <td>
                                                    <a class="btn btn-default" id="editAbout"
                                                        href="{{ url('/admin/edit-detailpage/' . $row->id) }}"
                                                        title="Edit Banner"><i class="fa fa-edit"
                                                            style="color: #000;"></i></a> &nbsp;&nbsp;
                                                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')"
                                                        href="{{ url('/admin/delete-detailpage/' . $row->id) }}"><i
                                                            class="fa fa-trash"></i></a> &nbsp;
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination justify-content-center">
                                    {{ $detailpages->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
