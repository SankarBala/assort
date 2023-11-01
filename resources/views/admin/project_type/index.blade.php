@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Type List</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Project Type List ({{ $project_types->count() }})
            </div>
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
                                    <center>Slug</center>
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
                                    <center>Slug</center>
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
                            @foreach ($project_types as $type)
                                <tr>

                                    <td align="center" width="8%">{{ $type->id }}</td>

                                    <td>{{ $type->name }}</td>

                                    <td>{{ $type->slug }}</td>

                                    <td align="center" width="8%">
                                        <font color=''><b>{{ $type->status ? 'Active' : 'Inactive' }}</b></font>
                                    </td>
                                    <td align="center" width="25%">

                                        <a href="{{ route('admin.project-type.show', $type) }}">
                                            <button type="button" class="btn btn-outline-dark btn-sm"><i
                                                    class="fas fa-chart-area"></i>
                                                Details</button></a>

                                        <a href="{{ route('admin.project-type.edit', $type) }}">
                                            <button type="button" class="btn btn-outline-info btn-sm"><i
                                                    class="fas fa-edit"></i>
                                                Edit</button></a>
                                        <form class="d-inline" name="form1" method="POST" enctype="multipart/form-data"
                                            action="{{ route('admin.project-type.destroy', $type) }}">
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
                </div><!--table-responsive-->

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="{{ route('admin.project-type.create') }}"><button type="button" class="btn btn-outline-primary btn-sm"><i
                    class="fas fa-plus-circle"></i> Add</button></a>

    </div>
@endsection
