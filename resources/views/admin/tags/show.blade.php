@extends('layouts.adminLayout.admin_design')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tags</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tags</li>
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
                            <h3 class="card-title">Tags</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Post ID</th>
                                        <th>Post</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tag->posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td><a href="{{ url('/admin/edit-post/'.$post->id) }}" class="btn btn-secondary btn-mini">View</a></td>
                                        {{-- <td>
                                            <a href="{{ url('/admin/edit-tag/' . $tag->id) }}"
                                                class="btn btn-primary btn-mini">Edit</a>
                                            <a id="" href="{{ url('/admin/delete-tag/' . $tag->id) }}"
                                                class="btn btn-danger btn-mini">Delete</a>
                                            <a href="{{ url('/admin/view-tag/' . $tag->id) }}"
                                                class="btn btn-secondary btn-mini">View</a>
                                        </td> --}}
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
@endsection
