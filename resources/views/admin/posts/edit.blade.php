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
                            <h3 class="card-title">Edit Post</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/admin/edit-post/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h2>Remember, post tags correlate to post price, both must be listed.</h2>
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
                                
                                        @if(!empty($tags))
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->tag->name }}" selected="selected">{{ $tag->tag->name }}</option>
                                        @endforeach
                                        @endif
                                      
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="">Post Price</label>
                                    <select class="form-control" name="price" name="price" id="">
                                        @foreach($budgets as $budget)
                                            @foreach($budget->children as $children)
                                                <option value="{{ $children->name }}" @if($post->price == $children->price) selected @endif>{{ $children->name }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div> --}}
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
                                        <option value="0">None</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if($post->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Current Image</label>
                                    <img src="/storage/{{ $post->image }}" alt="{{ $post->title }}'s image">
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
                                <input name="tonal_balance_neutrality" type="number" id="" class="form-control"
                                    value="{{ $post->tonal_balance_neutrality}}">
                            </div>
                            <div class="form-group">
                                <label for="">Price / Performance Ratio</label>
                                <input name="price_performance" type="number" id="" class="form-control"
                                    value="{{ $post->price_performance}}">
                            </div>
                            <div class="form-group">
                                <label for="">Sound Fidelity</label>
                                <input name="sound_fidelity" type="number" id="" class="form-control"
                                    value="{{ $post->sound_fidelity}}">
                            </div>
                            <div class="form-group">
                                <label for="">Musicality</label>
                                <input name="musicality" type="number" id="" class="form-control"
                                    value="{{ $post->musicality}}">
                            </div>
                            <div class="form-group">
                                <label for="">Build Quality</label>
                                <input name="build_quality" type="number" id="" class="form-control"
                                    value="{{ $post->build_quality}}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">Bass Extension</label>
                                <input name="bass_extension" type="number" id="" class="form-control"
                                    value="{{ $post->bass_extension}}">
                            </div>
                            <div class="form-group">
                                <label for="">Bass Balance</label>
                                <input name="bass_balance" type="number" id="" class="form-control"
                                    value="{{ $post->bass_balance}}">
                            </div>
                            <div class="form-group">
                                <label for="">Lower Midrange Balance</label>
                                <input name="lower_midrange_balance" type="number" id="" class="form-control"
                                    value="{{ $post->lower_midrange_balance}}">
                            </div>
                            <div class="form-group">
                                <label for="">Midrange Proper Balance</label>
                                <input name="midrange_proper_balance" type="number" id="" class="form-control"
                                    value="{{ $post->midrange_proper_balance}}">
                            </div>
                            <div class="form-group">
                                <label for="">Upper Midrange Balance</label>
                                <input name="upper_midrange_balance" type="number" id="" class="form-control"
                                    value="{{ $post->upper_midrange_balance}}">
                            </div>
                            <div class="form-group">
                                <label for="">Treble Balance</label>
                                <input name="treble_balance" type="number" id="" class="form-control"
                                    value="{{ $post->treble_balance}}">
                            </div>
                            <div class="form-group">
                                <label for="">Treble Extension</label>
                                <input name="treble_extension" type="number" id="" class="form-control"
                                    value="{{ $post->treble_extension}}">
                            </div>
                            <div class="form-group">
                                <label for="">Bass Control</label>
                                <input name="bass_control" type="number" id="" class="form-control"
                                    value="{{ $post->bass_control}}">
                            </div>
                            <div class="form-group">
                                <label for="">Tone Density</label>
                                <input name="tone_density" type="number" id="" class="form-control"
                                    value="{{ $post->tone_density}}">
                            </div>
                            <div class="form-group">
                                <label for="">Macro Dynamics</label>
                                <input name="macro_dynamics" type="number" id="" class="form-control"
                                    value="{{ $post->macro_dynamics}}">
                            </div>
                            <div class="form-group">
                                <label for="">Micro Dynamics</label>
                                <input name="micro_dynamics" type="number" id="" class="form-control"
                                    value="{{ $post->micro_dynamics}}">
                            </div>
                            <div class="form-group">
                                <label for="">Soundstage Width</label>
                                <input name="soundstage_width" type="number" id="" class="form-control"
                                    value="{{ $post->soundstage_width}}">
                            </div>
                            <div class="form-group">
                                <label for="">Soundstage Depth</label>
                                <input name="soundstage_depth" type="number" id="" class="form-control"
                                    value="{{ $post->soundstage_depth}}">
                            </div>
                            <div class="form-group">
                                <label for="">Resolution</label>
                                <input name="resolution" type="number" id="" class="form-control"
                                    value="{{ $post->resolution}}">
                            </div>
                            <div class="form-group">
                                <label for="">Clarity</label>
                                <input name="clarity" type="number" id="" class="form-control"
                                    value="{{ $post->clarity}}">
                            </div>
                            <div class="form-group">
                                <label for="">Score</label>
                                <input name="score" type="number" id="" class="form-control" value="{{ $post->score}}">
                            </div>
                            <button class="btn btn-primary" type="submit">Edit Post</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script> --}}

{{-- <script>
    $(document).ready(function () {
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({{$post->tags->pluck('id')}}).trigger('change');
    });

</script> --}}

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script>
  $(document).ready(function () {
      $('.select2-multi').select2({
        tags: true,
        multiple: true,
        tokenSeparators: [','],
        ajax: {
          url: '/api/tags',
          type: 'GET',
          dataType: 'json',
          delay: 250,
          data: function (params) {
              return {
                  name: params.term
              };
          },
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
            }
      });
  });
</script>
<script src="https://cdn.tiny.cloud/1/a039yjts0dfxgjrvnsmulpou29lagm7phdbdw6l18ow72han/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    var editor_config = {
        path_absolute: "/",
height: 250,

        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor autosave pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern",
        ],
        //bbcode_dialect: "punbb",
        toolbar: "insertfile undo redo | styleselect | emoticons | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media restoredraft",
autosave_retention: "60m",
        relative_urls: false,
        //file_browser_callback: function (field_name, url, type, win) {
        //    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
        //        'body')[0].clientWidth;
        //    var y = window.innerHeight || document.documentElement.clientHeight || document
        //        .getElementsByTagName('body')[0].clientHeight;
        //    var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        //    if (type == 'image') {
        //        cmsURL = cmsURL + "&type=Images";
        //    } else {
        //        cmsURL = cmsURL + "&type=Files";
        //    }
        //    tinyMCE.activeEditor.windowManager.open({
        //        file: cmsURL,
        //        title: 'Filemanager',
        //        width: x * 0.8,
        //        height: y * 0.8,
        //        resizable: "yes",
        //        close_previous: "no"
        //    });
        //},
        images_upload_handler: function (blobInfo, success, failure, progress) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/upload');
            xhr.upload.onprogress = function (e) {
                progress(e.loaded / e.total * 100);
            };
            xhr.setRequestHeader("X-CSRF-Token", "{{ csrf_token() }}");
            xhr.onload = function() {
                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    //failure('File exceeds upload limit.');
                    tinymce.activeEditor.undoManager.undo();
                    return;
                }
                json = JSON.parse(xhr.responseText);
                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.location);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        },
        image_title: true,
        automatic_uploads: true,
        images_upload_url: '/upload',
        file_picker_types: 'image',
        image_dimensions: false,
         image_class_list: [
            {title: 'Responsive', value: 'img-responsive'}
        ],
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {

                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        },
        //setup: function(editor) {
        //editor.on('keydown', function(e) {
        //  if(e.keyCode == 13 && $(editor.contentDocument.activeElement).atwho('isSelecting'))
        //    return false
        //    })
        //},
        
        init_instance_callback: function(editor) {
        $(editor.contentDocument.activeElement).atwho({
            at: "@",
            callbacks: {
                remoteFilter: function (query, callback) {
                    $.getJSON('/api/users', {name: query}, function (usernames) {
                        $.trim(callback(usernames));
                    });
                    //$.ajax({
                    //    url: '/api/users',
                    //    type: 'GET',
                    //    dataType: 'json',
                    //    data: {
                    //        name: query,
                    //    },
                    //    success: function (usernames) {
                    //        callback(usernames);
                    //    },
                    //    error: function () {
                    //        console.log('called');
                    //    }
                    //});
                }
            }
        });
      },
    };
    tinymce.init(editor_config);
    tinymce.PluginManager.add('imageresizing', function(editor, url) {

        editor.on('ObjectResizeStart', function(e) {
        if (e.target.nodeName == 'IMG') {

            var selectedImage = tinymce.activeEditor.selection.getNode();
            tinymce.activeEditor.dom.setStyle(selectedImage,'width', e.width);
            tinymce.activeEditor.dom.setStyle(selectedImage,'height', e.height);
            selectedImage.removeAttribute('width');
            selectedImage.removeAttribute('height');
            }
        });
    });
</script>
@endsection
