@extends('layouts.adminLayout.admin_design')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Your Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Your Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $user->name }}'s Profile</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form autocomplete="off" method="POST" action="/admin/edit-profile/{{ $user->id }}" enctype="multipart/form-data">
                            @csrf
                            <p>Avatar</p>
                            <p>
                                @if ($user->avatar() == '')
                                <a class="avatar"><p class="avatar" style="background-color: {{ $user->color }}">{{ substr($user->name, 0, 1) }}</p></a>
                                @else
                                <a class="avatar"><p class="personal-avatar"><img style="width: 75px; height: 75px; border-radius: 50px;" src="/storage/{{ $user->avatar() }}" alt="User avatar"></p></a>
                                @endif
                                <input type="file" name="avatar">
                                <button type="submit" class="add-avatar">Add Avatar</button>
                            </p>
                            <p>Signature</p>
                            <textarea name="signature" id="user-profile-textarea">
                                {!! $user->signature !!}
                            </textarea>
                            </form>
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


<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
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
            "advlist autolink lists link charmap print preview hr anchor autosave pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime nonbreaking save contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern",
        ],
        //bbcode_dialect: "punbb",
        toolbar: "insertfile undo redo | styleselect | emoticons | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link restoredraft",
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
