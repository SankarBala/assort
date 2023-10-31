@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../area-add/index.html">Add Area</a></li>
                <li class="breadcrumb-item"><a href="../../area-list/index.html">Area List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Area Details</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-chart-area"></i> Area Details</div><!--/.card-header-->
            <div class="card-body">



                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>ID</b></font>
                    </div>
                    <div class="col-sm-10">{{ $area->id }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Name</b></font>
                    </div>
                    <div class="col-sm-10">{{ $area->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>City</b></font>
                    </div>
                    <div class="col-sm-10">{{ $area->location->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Create Date</b></font>
                    </div>
                    <div class="col-sm-10">{{ $area->created_at }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Update Date</b></font>
                    </div>
                    <div class="col-sm-10">{{ $area->updated_at }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Status</b></font>
                    </div>
                    <div class="col-sm-10">
                        <font color='green'><b>{{ $area->status == true ? 'Active' : 'Inactive' }}</b></font>
                    </div>
                </div>

            </div><!--./card-body\-->
        </div><!--./card\-->

        <a href="{{ route('admin.area.create') }}">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="{{ route('admin.area.index') }}">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="{{ route('admin.area.edit', $area) }}">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

    </div>
@endsection
