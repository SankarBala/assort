@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Area List</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Area List (13)</div><!--/.card-header-->
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
                                    <center>City</center>
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
                                    <center>City</center>
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
                            @foreach ($areas as $area)
                                <tr>
                                    <td align="center" width="8%">{{ $area->id }}</td>
                                    <td>{{ $area->name }}</td>
                                    <td>{{ $area->slug }}</td>
                                    <td><a href="#" title="">{{ $area->location->name }}</a></td>
                                    <td align="center" width="8%">
                                        <font color='green'>Active</font>
                                    </td>
                                    <td align="center" width="25%">

                                        <a href="{{ route('admin.area.show', $area) }}"><button type="button"
                                                class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                                Details</button></a>

                                        <a href="{{ route('admin.area.edit', $area) }}"><button type="button"
                                                class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                                Edit</button></a>
                                        <form class="d-inline" name="form1" method="POST" enctype="multipart/form-data"
                                            action="{{ route('admin.area.destroy', $area) }}">
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

        <a href="{{ route('admin.area.create') }}">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i>
                Add</button></a>

    </div>
@endsection
