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
                <div class="col-md-6">
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
                                    <label for="">Image</label>
                                    <input name="image" type="file" class="form-control-file">
                                </div>
                                

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Sound Details</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Tonal Balance / Neutrality</label>
                                <input name="tonal_balance_neutrality" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Price / Performance Ratio</label>
                                <input name="price_performance" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Sound Fidelity</label>
                                <input name="sound_fidelity" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Musicality</label>
                                <input name="musicality" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Build Quality</label>
                                <input name="build_quality" type="number" id="" class="form-control">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">Bass Extension</label>
                                <input name="bass_extension" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Bass Balance</label>
                                <input name="bass_balance" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Lower Midrange Balance</label>
                                <input name="lower_midrange_balance" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Midrange Proper Balance</label>
                                <input name="midrange_proper_balance" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Upper Midrange Balance</label>
                                <input name="upper_midrange_balance" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Treble Balance</label>
                                <input name="treble_balance" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Treble Extension</label>
                                <input name="treble_extension" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Bass Control</label>
                                <input name="bass_control" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tone Density</label>
                                <input name="tone_density" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Macro Dynamics</label>
                                <input name="macro_dynamics" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Micro Dynamics</label>
                                <input name="micro_dynamics" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Soundstage Width</label>
                                <input name="soundstage_width" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Soundstage Depth</label>
                                <input name="soundstage_depth" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Resolution</label>
                                <input name="resolution" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Clarity</label>
                                <input name="clarity" type="number" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Score</label>
                                <input name="score" type="number" id="" class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit">Add Post</button>
                        </div>
                        
                    </div>
                    
                </div>
                
            </form>
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
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
        var editor_config = {
          path_absolute : "/",
          selector: "textarea",
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          relative_urls: false,
          file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
      
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }
      
            tinyMCE.activeEditor.windowManager.open({
              file : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no"
            });
          }
        };
      
        tinymce.init(editor_config);
      </script>
@endsection
