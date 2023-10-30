@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_add">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Project List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project More Photo</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-plus-circle"></i> Add Project Photo</div>
            <!--/.card-header-->
            <div class="card-body">

                <form name="form" method="POST" enctype="multipart/form-data"
                    action="{{ route('admin.project.photos.add', $project) }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Photo Title</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input name="project_photo_title" type="text" class="form-control"
                                placeholder="Enter name" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Upload Photo</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input name="photo" type="file" id="file_name" accept="image/*" />
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><button type="submit" name="action" value="Submit"
                                class="btn btn-primary btn-block" style="width: 150px"><i class="fas fa-plus-circle"></i>
                                SUBMIT</button></div>
                    </div>

                </form>

                <font color="red">*</font> Required fields

            </div><!--/.card-body-->
        </div><!--/.card-->
        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Project Photo List (1)</div>
            <!--/.card-header-->
            <div class="card-body">


                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr class="table-secondary">
                                <th>
                                    <center>Photo</center>
                                </th>
                                <th>
                                    <center>Photo Title</center>
                                </th>
                                <th>
                                    <center>Add Date</center>
                                </th>
                                <th>
                                    <center>Status</center>
                                </th>
                                <th>
                                    <center>Actions</center>
                                </th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr class="table-secondary">
                                <th>
                                    <center>Photo</center>
                                </th>
                                <th>
                                    <center>Photo Title</center>
                                </th>
                                <th>
                                    <center>Add Date</center>
                                </th>
                                <th>
                                    <center>Status</center>
                                </th>
                                <th>
                                    <center>Actions</center>
                                </th>
                            </tr>
                        </tfoot>

                        <tbody>

                            @foreach ($project->galleries as $gallery)
                                <tr>
                                    <td align="center" width="10%">
                                        <img src="{{ asset($gallery->link) }}" class='rounded img-responsive img-fluid'
                                            style='width:80px;'>
                                    </td>

                                    <td>{{ $gallery->title }}</td>

                                    <td align="center" width="10%">{{ $gallery->created_at }}</td>

                                    <td align="center" width="8%">
                                        <font color='green'><b>{{ $gallery->status ? 'active' : 'inactive' }}</b></font>
                                    </td>

                                    <td align="center" width="25%">

                                        {{-- <a href="../../project-photo-edit/1/index.html"><button type="button"
                                                class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                                Edit</button></a>

                                        <a href="../../project-photo-photo/1/index.html"><button type="button"
                                                class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                                Photo</button></a> --}}


                                        <form class="d-inline" name="form1" method="POST" enctype="multipart/form-data"
                                            action="{{ route('admin.gallery.destroy', $gallery) }}">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                    class="fas fa-trash-alt"></i>
                                                Delete</button>
                                        </form>


                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a href="{{ route('admin.project.index') }}">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> Project
                List</button>
        </a>

    </div>
@endsection
