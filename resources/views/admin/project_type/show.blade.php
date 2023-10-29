@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/project-type-add/index.html">Add Project Type</a></li>
                <li class="breadcrumb-item"><a href="/project-type-list/index.html">Project Type List</a></li>
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
                    <div class="col-sm-10">1</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Name</b></font>
                    </div>
                    <div class="col-sm-10">Ongoing Projects</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Slug</b></font>
                    </div>
                    <div class="col-sm-10">ongoing-projects</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Added by</b></font>
                    </div>
                    <div class="col-sm-10">Engr. Md. Jahid</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Updated by</b></font>
                    </div>
                    <div class="col-sm-10">Engr. Md. Jahid</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Add Date</b></font>
                    </div>
                    <div class="col-sm-10">2021-07-11 17:58:15</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Update Date</b></font>
                    </div>
                    <div class="col-sm-10">2021-07-26 17:08:04</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Status</b></font>
                    </div>
                    <div class="col-sm-10">
                        <font color='green'><b>Active</b></font>
                    </div>
                </div>

            </div><!--./card-body\-->
        </div><!--./card\-->

        <a href="/project-type-add/index.html">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="/project-type-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="/project-type-edit/1/index.html">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

    </div>
@endsection
