@extends('layouts.adminLayout.admin_design')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Posts</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Post</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/admin/add-post') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Post Title</label>
                                    <input name="title" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Post Body</label>
                                    <textarea name="body" id="" class="form-control" rows="15"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Post Tags</label>
                                    <select class="select2-multi form-control" name="tags[]" id="" multiple="multiple">
                                        @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Post Slug</label>
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
                                <div class="form-group">
                                    <label for="">Post Category</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Meta Keywords</label>
                                    <input name="meta_keywords" type="text" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input name="image" type="file" class="form-control-file">
                                </div>
                                <button class="btn btn-primary" type="submit">Add Post</button>
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css"></script> --}}

<script>
    $(document).ready(function () {
        $('.select2-multi').select2();
    });

</script>
<script src="https://cdn.tiny.cloud/1/a039yjts0dfxgjrvnsmulpou29lagm7phdbdw6l18ow72han/tinymce/5/tinymce.min.js">
</script>

<script>
    tinymce.init({
        selector: 'textarea',
        height: '360px',
        plugins: 'link code',
        menubar: false
    });
    </script>
@endsection
