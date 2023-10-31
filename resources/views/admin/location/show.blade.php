@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.location.index') }}">City List</a></li>
                <li class="breadcrumb-item active" aria-current="page">City Details</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-chart-area"></i> City Details</div><!--/.card-header-->
            <div class="card-body">



                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>ID</b></font>
                    </div>
                    <div class="col-sm-10">{{ $location->id }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Name</b></font>
                    </div>
                    <div class="col-sm-10">{{ $location->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Slug</b></font>
                    </div>
                    <div class="col-sm-10">{{ $location->slug }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Status</b></font>
                    </div>
                    <div class="col-sm-10">
                        <font color='green'>{{ $location->id }}</font>
                    </div>
                </div>

            </div><!--./card-body\-->
        </div><!--./card\-->


        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Area List ({{ $location->areas->count() }}) in
                {{ $location->name }}</div>
            <!--/.card-header-->
            <div class="card-body">



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
                            @foreach ($location->areas as $area)
                                <tr>
                                    <td align="center" width="8%">{{ $area->id }}</td>

                                    <td>{{ $area->name }}</td>

                                    <td>{{ $area->slug }}</td>


                                    <td align="center" width="8%">
                                        <font color='green'>{{ $area->status == 1 ? 'Active' : 'Inactive' }}</font>
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
        <!-- <a href="/city-add/">
                              <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
                            </a> -->

        <a href="../../city-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="../../city-edit/1/index.html">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

        <a href="../../areas/1/index.html">
            <button type="button" class="btn btn-outline-success btn-sm"><i class="fas fa-image"></i> Areas</button>
        </a>

    </div>
@endsection
