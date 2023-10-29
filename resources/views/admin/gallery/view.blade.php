@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../gallery-photo-add/index.html">Add Gallery Photo</a></li>
                <li class="breadcrumb-item"><a href="../../gallery-photo-list/index.html">Gallery Photo List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery Photo Details</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-chart-area"></i> Gallery Photo Details</div>
            <!--/.card-header-->
            <div class="card-body">



                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Photo</b></font>
                    </div>
                    <div class="col-sm-10">
                        <img src='../../../images/gallery/1628589412_jpg-3.jpg' class='rounded img-responsive img-fluid'
                            style='width:200px;'>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Project</b></font>
                    </div>
                    <div class="col-sm-10">Assort Sahera Homes</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Gallery ID</b></font>
                    </div>
                    <div class="col-sm-10">1</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Gallery Title</b></font>
                    </div>
                    <div class="col-sm-10">Assort Sahera Homes</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Gallery Slug</b></font>
                    </div>
                    <div class="col-sm-10">lorem-ipsum-dolor-sit-amet-1627533831</div>
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
                    <div class="col-sm-10">2021-07-29 14:43:51</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Update Date</b></font>
                    </div>
                    <div class="col-sm-10">2021-07-29 14:43:51</div>
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

        <a href="../../gallery-photo-add/index.html">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="../../gallery-photo-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="../../gallery-photo-edit/1/index.html">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

        <a href="../../gallery-photo-upload/1/index.html">
            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i> Photo</button>
        </a>

    </div>
@endsection
