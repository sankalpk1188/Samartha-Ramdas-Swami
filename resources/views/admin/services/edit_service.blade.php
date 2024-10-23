@extends('layouts/adminLayout/admin_design')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4>{{$service->title}}</h4>
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
                        <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Service Section</li>
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
                        <form method="POST" action="{{ url('admin/edit-service/'.$service->id) }}" enctype="multipart/form-data" id="editService">@csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="required">Service Name</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Service Name" value="{{$service->title}}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="required">Category</label>
                                        <select class="form-control select2bs4" name="service_cat_id" required>
                                            <option value="" selected>Select One</option>
                                            @foreach(App\Models\ServiceCategory::where('status',1)->orderBy('name','ASC')->get() as $row)
                                            <option value="{{$row->id}}" @if($service->service_cat_id == $row->id) selected @endif>{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="required">Cover Image <small>(Size: 1920x315px)</small></label>
                                        @if(!empty($service->image))
                                        <input type="hidden" name="current_image" value="{{ $service->image }}">
                                        @endif
                                        <input type="file" name="image" class="form-control p-1" id="image" value="{{ $service->image }}">
                                        <img class="mt-2" style="width: 15%;" src="{{ asset('assets/imgs/services/'.$service->image) }}" alt="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="required">Description</label>
                                        <textarea name="description" class="form-control" rows="3" placeholder="Enter Description" required>{{$service->description}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="required">Service Content</label>
                                        <textarea name="service_content" class="form-control summernote" rows="4" placeholder="Enter Description" required>{{$service->service_content}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="status" name="status" value="1" @if($service->status == 1) checked @endif >
                                            <label class="form-check-label" for="status">Status</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Update </button>
                                <button type="reset" class="btn btn-default"> Reset </button>
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
        $('#editService').validate({
            ignore: [],
            debug: false,
            rules: {
                title: {
                    required: true,
                },
                image: {
                    accept: 'png|jpg|jpeg',
                },
                
            },
            messages: {},
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endsection