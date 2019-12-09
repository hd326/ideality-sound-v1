@extends('layouts.adminLayout.admin_design')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Post Images</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ url('/admin/add-images/'.$post->id) }}"
                            method="POST">
                            @csrf
                            <input name="post_id" type="hidden" value="{{ $post->id }}">
                            <div class="form-group">
                                <label for="">Post Title: {{ $post->title }}</label>
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input name="image[]" type="file" class="form-control-file" multiple="multiple">
                            </div>
                            <button class="btn btn-primary" type="submit">Add Images</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">View Images</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Image ID</th>
                                        <th>Post ID</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($post_images as $post_image)
                                    <tr>
                                        <td>{{ $post_image->id }}</td>
                                        <td>{{ $post_image->post_id }}</td>
                                        <td><img style="width: 100px;"
                                                src="{{ url('/images/medium_photos/'. $post_image->image ) }}"></td>
                                        <td>
                                            <a id="" href="{{ url('/admin/delete-alt-image/' . $post_image->id) }}"
                                                class="btn btn-danger btn-mini">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
</div>


@endsection
