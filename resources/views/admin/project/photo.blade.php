@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Project List</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project.show', $project) }}">Project</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Photo</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-image"></i> Project Photo</div><!--/.card-header-->
            <div class="card-body">

                <h3><small>Name:</small>{{ $project->name }}</h3><br>

                <table class="table table-striped table-bordered">
                    <tbody>

                        @if ($project->photo == null)
                            <form name="form2" method="POST" enctype="multipart/form-data"
                                action="{{ route('admin.project.photo.store', $project) }}">
                                @csrf
                                <tr>
                                    <td>
                                        <input name="photo" type="file" id="photo" accept="image/*" />
                                    </td>
                                    <td>
                                        <input type="submit" name="upload" value="Upload" class="btn btn-primary"
                                            style="width: 150px">
                                    </td>
                                </tr>
                            </form>
                        @else
                            <form name="form1" method="POST" enctype="multipart/form-data"
                                action="{{ route('admin.project.photo.delete', $project) }}">
                                <input type="hidden" name="project_id" value="">
                                <input type="hidden" name="project_photo" value="">
                                @csrf
                                @method('delete')
                                <tr>
                                    <td width="20%">
                                        <font size="3">Photo:</font>
                                    </td>
                                    <td>
                                        <img src="{{ asset($project->photo) }}" style="width:200px;"
                                            class="rounded img-responsive img-fluid">&nbsp;&nbsp;&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <input type="submit" name="delete_photo" value="Delete" class="btn btn-danger"
                                            style="width: 200px">
                                    </td>
                                </tr>
                            </form>
                        @endif
                    </tbody>
                </table>

            </div><!--./card-body\-->
        </div><!--./card\-->


        <a href="{{ route('admin.project.create') }}">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="{{ route('admin.project.index') }}">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="{{ route('admin.project.edit', $project) }}">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

        <a href="{{ route('admin.project.photos.all', $project) }}">
            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>More Photos</button>
        </a>

    </div>
@endsection
