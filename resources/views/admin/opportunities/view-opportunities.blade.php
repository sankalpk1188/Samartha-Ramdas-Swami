<?php $email = session('adminSession'); ?>
@extends('layouts/adminLayout/admin_design')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Career Opportunities Section</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url('/admin/add-opportunities') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add </a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid"> 
<<<<<<< HEAD
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
            
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped" style="overflow-x: auto;">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Designation Name</th>
                                                <th>Job Description</th>
                                                <th>Location</th>
                                                <th>Job Application Receipt Email</th>
                                                <th>Qualification</th>
                                                <th>Experience</th>
                                                <th>Status</th>
                                                <!-- <th>Update At</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                        @foreach($opportunities as $row)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{!! Str::limit($row->designation_name,10)!!}</td>
                                            <td>{!! Str::limit($row->job_description,10)!!}</td>
                                            <td>{!! Str::limit($row->location,6)!!}</td>
                                            <td>{!! Str::limit($row->email,10)!!}</td>
                                            <td>{!! Str::limit($row->qualification,20)!!}</td>
                                            <td>{!! Str::limit($row->experience,5)!!}</td>
                                            <td>{{ ($row->status == 1) ? 'Published' : 'Not Published' }}</td>
                                            <!-- <td>{{date('d F Y', strtotime($row->updated_at)) }}</td> -->
                                            <td>
                                                <a class="btn btn-default" id="editAbout" href="{{ url('/admin/edit-opportunities/'.$row->id) }}" title="Edit Career Opportunities">
                                                    <i class="fa fa-edit" style="color: #000;"></i>
                                                </a> &nbsp;&nbsp;
                                                <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{ url('/admin/delete-opportunities/'.$row->id) }}"><i class="fa fa-trash"></i></a> &nbsp;
                                            </td>
                                        </tr> 
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
=======
            <div class="row">
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
              <div class="col-12"> 
                <div class="card">
                    <div class="card-header">
                    {{-- <h3 class="card-title">View About</h3> --}}
                    <a href="{{ url('/admin/add-opportunities') }}"><button style="float: right; margin: 3px 3px;" class="btn btn-success btn-xl"><i class="fa fa-plus"></i> Add </button></a>
                  </div>
                  
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped" style="overflow-x: auto;">
                      <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Designation Name</th>                    
                        <th>Location</th>
                        <th>Qualification</th>
                        <th>Experience</th>
                        <th>Updated At</th>                                        
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>

                    @foreach($opportunities as $row)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{!! Str::limit($row->designation_name,20)!!}</td>                                         
                            <td>{!! Str::limit($row->location,20)!!}</td>
                            <td>{!! Str::limit($row->qualification,20)!!}</td>
                            <td>{!! Str::limit($row->experience,20)!!}</td>
                            <td>{{date('d F Y', strtotime($row->updated_at)) }}</td>
                            <td>
                                <a class="btn btn-default"  id="editAbout" href="{{ url('/admin/edit-opportunities/'.$row->id) }}"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-default" href="{{ url('/admin/view-applications/'.$row->id) }}"><i class="fa fa-user-edit"></i></a>
                                <!-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{ url('/admin/delete-about/'.$row->id) }}"><i class="fa fa-trash"></i></a> &nbsp; -->
                            </td>
                        </tr>

                    @endforeach
                      </tbody>
                    </table>
                  </div>
>>>>>>> b9a1e6484a5ec69a27e6d37b6ee8f9f8ce85488d
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
                    
@endsection