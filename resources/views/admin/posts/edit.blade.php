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
                            <h3 class="card-title">Edit Post</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/admin/edit-post/'.$post->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Post Title</label>
                                    <input name="title" type="text" id="inputName" class="form-control"
                                        value="{{ $post->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Post Body</label>
                                    <textarea name="body" id="" class="form-control"
                                        rows="8">{{ $post->body }}</textarea>
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
                                    <input name="slug" type="text" id="inputName" class="form-control"
                                        value="{{ $post->slug }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Meta Title</label>
                                    <input name="meta_title" type="text" id="" class="form-control"
                                        value="{{ $post->meta_title }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Meta Description</label>
                                    <input name="meta_description" type="text" id="" class="form-control"
                                        value="{{ $post->meta_description }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Meta Keywords</label>
                                    <input name="meta_keywords" type="text" id="" class="form-control"
                                        value="{{ $post->meta_keywords }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Post Category</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submit">Edit Post</button>
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

<script>
    $(document).ready(function () {
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({{$post->tags->pluck('id')}}).trigger('change');
    });

</script>
<script src="https://cdn.tiny.cloud/1/a039yjts0dfxgjrvnsmulpou29lagm7phdbdw6l18ow72han/tinymce/5/tinymce.min.js">
</script>


<script>
    tinymce.init({
        selector: "textarea",
        plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor ResponsiveFilemanager"
        ],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
        toolbar2: "| ResponsiveFilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
        image_advtab: true ,
        height: '360px'
         });
</script>
@endsection
