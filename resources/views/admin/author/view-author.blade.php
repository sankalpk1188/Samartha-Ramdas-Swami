<?php $email = session('adminSession'); ?>
@extends('layouts/adminLayout/admin_design')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Author Section <span class="small badge badge-primary"</span></h4>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url('/admin/add-author') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Author</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('flash_message_error'))
                    <div class="alert alert-error alert-block w-50">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                    @endif
                    @if(Session::has('flash_message_success'))
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
                                        <th>Sr.No</th>
                                        <th>Image</th>
                                        <th> Marathi Title</th>
                                        <th> English Title</th>
                                        <th> Marathi Sub-title</th>
                                        <th> English Sub-title</th>
                                        <th> Marathi Description</th>
                                        <th> English Description</th>
                                        <th> Action</th>                                                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($author as $row)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td><a href="{{ asset('assets/imgs/literature/'.$row->image) }}"><img src="{{ asset('assets/imgs/author/'.$row->image) }}" width="100px"></a></td>                                         
                                    <td>{!! Str::limit($row->marathi_title,20)!!}</td>                                         
                                    <td>{!! Str::limit($row->english_title,20)!!}</td>                                         
                                    <td>{!! Str::limit($row->marathi_subtitle,20)!!}</td>                                         
                                    <td>{!! Str::limit($row->english_subtitle,20)!!}</td>                                         
                                    <td>{!! Str::limit($row->marathi_description,20)!!}</td>                                         
                                    <td>{!! Str::limit($row->english_description,20)!!}</td>                                         
                                    <td>
                                        <a class="btn btn-default"  id="editAuthor" href="{{ url('/admin/edit-author/'.$row->id) }}" title="Edit author"><i class="fa fa-edit" style="color: #000;"></i></a> &nbsp;&nbsp;
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{ url('/admin/delete-author/'.$row->id) }}"><i class="fa fa-trash"></i></a> &nbsp;
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection