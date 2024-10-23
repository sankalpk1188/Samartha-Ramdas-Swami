@extends('layouts/adminLayout/admin_design')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 d">
                <div class="col-sm-6">
                    <h4>Services Section <span class="small badge badge-primary">{{$services->total()}}</span></h4>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url('/admin/add-service') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Service</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
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
                    <div class="card">
                        <div class="card-header">
                            <form action="" method="GET">
                                <div class="row d-flex justify-content-start">
                                    <div class="col-auto">
                                        <select class="form-control select2bs4" name="service_cat_id" onchange="javascript:this.form.submit();">
                                            <option value="" selected>-- All Category --</option>
                                            @foreach(App\Models\ServiceCategory::where('status',1)->orderBy('id','ASC')->get() as $row)
                                            <option value="{{$row->id}}" @if(Request()->service_cat_id == $row->id) selected @endif>{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{url('admin/view-services')}}" class="btn btn-default"> Clear</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="overflow-x: auto;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $key => $row)
	                                <tr>
	                                    <td>{{ $services->firstItem() + $key }}</td>
	                                    <td>{{ Str::limit($row->title, 40) }}</td>
	                                    <td>{{ $row->name }}</td>
                                        <td>{{ ($row->status == 1) ? 'Published' : 'Not Published' }}</td>
	                                    <td>
                                            <a class="btn btn-default" href="{{ url('/admin/edit-service/'.$row->id) }}"><i class="fa fa-pencil-alt"></i></a> &nbsp;
                                            <a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="{{ url('/admin/delete-service/'.$row->id) }}"><i class="fa fa-trash"></i></a> &nbsp;
	                                    </td>
	                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="mt-2 d-flex justify-content-center">
                                {{ $services->withQueryString()->links("pagination::bootstrap-4") }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection