@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project.create') }}">Add Project</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project List</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Project List ({{ $projects->count() }})</div>
            <!--/.card-header-->
            <div class="card-body">


                <form class="form-inline mr-auto" method="POST" action="#">

                    <input class="form-control" type="text" placeholder="search by id / name / phone / email "
                        aria-label="Search" name="search" value="" style="width:550px; border: 1px solid #e1e1e1;">
                    &nbsp;
                    <button class="btn btn-danger btn-sm" type="submit">Search</button>

                </form>
                <br>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr class="table-secondary">
                                <th>
                                    <center>ID</center>
                                </th>
                                <th>
                                    <center>Name</center>
                                </th>
                                <th>
                                    <center>Address</center>
                                </th>
                                <th>
                                    <center>Types</center>
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
                                    <center>ID</center>
                                </th>
                                <th>
                                    <center>Name</center>
                                </th>
                                <th>
                                    <center>Address</center>
                                </th>
                                <th>
                                    <center>Types</center>
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
                            @foreach ($projects as $project)
                                <tr>

                                    <td align="center">{{ $project->id }}</td>

                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->address }}</td>
                                    <td>{{ $project->project_type->name }}</td>


                                    <td align="center">
                                        <font color='green'><b>{{ $project->status }}</b></font>
                                        <br>

                                    </td>

                                    <td width="35%">

                                        <a href="{{ route('admin.project.show', $project) }}"><button type="button"
                                                class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                                Details</button></a>

                                        <a href="{{ route('admin.project.edit', $project) }}"><button type="button"
                                                class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                                Edit</button></a>

                                        <a href="{{ route('admin.project.photo.show', $project) }}">
                                            <button type="button" class="btn btn-outline-warning btn-sm"><i
                                                    class="fas fa-image"></i>
                                                Photo</button>
                                        </a>

                                        <a href="{{ route('admin.project.photos.all', $project) }}">
                                            <button type="button" class="btn btn-outline-success btn-sm">
                                                <i class="fas fa-image"></i>
                                                More Photo</button>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--table-responsive-->

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="{{ route('admin.project.create') }}">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i>
                Add</button>
        </a>

    </div>
    <!--.container-->
@endsection
