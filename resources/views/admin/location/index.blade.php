@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">City List</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> City List ({{ $locations->count() }})</div>
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

                            @foreach ($locations as $location)
                                <tr>
                                    <td align="center" width="8%">{{ $location->id }}</td>

                                    <td>{{ $location->name }}</td>

                                    <td>{{ $location->slug }}</td>

                                    <td align="center" width="8%">
                                        <font color='green'><b>{{ $location->status ? 'Active' : 'Inactive' }}</b></font>
                                    </td>
                                    <td align="center" width="25%">

                                        <a href="{{ route('admin.location.show', $location) }}"><button type="button"
                                                class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                                Details</button></a>

                                        <a href="{{ route('admin.location.edit', $location) }}"><button type="button"
                                                class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                                Edit</button></a>
                                        <form class="d-inline" name="form1" method="POST" enctype="multipart/form-data"
                                            action="{{ route('admin.location.destroy', $location) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                    class="fas fa-trash-alt"></i>
                                                Delete</button>
                                        </form>

                                        {{-- 
                                    <a href="{{route('admin.area.show', $loaction-)}}"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a> --}}

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--table-responsive-->

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="{{ route('admin.location.create') }}">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i>
                Add</button></a>

    </div>
@endsection
