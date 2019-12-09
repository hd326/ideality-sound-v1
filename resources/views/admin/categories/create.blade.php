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
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Category</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/admin/add-category') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Category Level</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0">Main Category</option>
                                        @foreach($levels as $level)
                                        <option value="{{ $level->id }}">
                                            {{ $level->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Category Name</label>
                                    <input name="name" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Category Description</label>
                                    <textarea name="description" id="" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Category Slug</label>
                                    <input name="slug" type="text" id="inputName" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Meta Title</label>
                                    <input name="meta_title" type="text" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Meta Description</label>
                                    <input name="meta_description" type="text" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Meta Keywords</label>
                                    <input name="meta_keywords" type="text" id="" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Add Category</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
