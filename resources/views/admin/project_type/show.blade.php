@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project-type.index') }}">Project Type List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Type Details</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-chart-area"></i> Project Type Details</div>
            <!--/.card-header-->
            <div class="card-body">



                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>ID</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project_type->id }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Name</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project_type->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Slug</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project_type->slug }}</div>
                </div>

                {{-- <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Cr by</b></font>
                    </div>
                    <div class="col-sm-10">Engr. Md. Jahid</div>
                </div> --}}
                {{-- 
                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Updated by</b></font>
                    </div>
                    <div class="col-sm-10">Engr. Md. Jahid</div>
                </div> --}}

                {{-- <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Created Date</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project_type->created_at }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Update Date</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project_type->updated_at }}</div>
                </div> --}}

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Status</b></font>
                    </div>
                    <div class="col-sm-10">
                        <font color=''><b>{{ $project_type->status ? 'Active' : 'Inactive' }}</b></font>
                    </div>
                </div>

            </div><!--./card-body\-->
        </div><!--./card\-->

        <a href="{{ route('admin.project-type.create') }}">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="{{ route('admin.project-type.index') }}">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="{{ route('admin.project-type.edit', $project_type) }}">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

    </div>
@endsection
