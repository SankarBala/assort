@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../project-add/index.html">Add Project</a></li>
                <li class="breadcrumb-item"><a href="../../project-list/index.html">Project List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Details</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-chart-area"></i> Project Details</div><!--/.card-header-->
            <div class="card-body">



                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Photo</b></font>
                    </div>
                    <div class="col-sm-10">
                        <img src='../../../images/assort-properties-ltd.jpg' class='rounded img-responsive img-fluid'
                            style='width:200px;'>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>ID</b></font>
                    </div>
                    <div class="col-sm-10">1</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Type</b></font>
                    </div>
                    <div class="col-sm-10">Upcoming Projects</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Name</b></font>
                    </div>
                    <div class="col-sm-10">Assort Hafsha Manor</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Slug</b></font>
                    </div>
                    <div class="col-sm-10">assort-hafsha-manor</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Address</b></font>
                    </div>
                    <div class="col-sm-10">Modhubazar</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>City</b></font>
                    </div>
                    <div class="col-sm-10">Dhaka</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Area</b></font>
                    </div>
                    <div class="col-sm-10">West Dhanmondi</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Zip Code</b></font>
                    </div>
                    <div class="col-sm-10">0</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Country</b></font>
                    </div>
                    <div class="col-sm-10">Bangladesh</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Flat Size</b></font>
                    </div>
                    <div class="col-sm-10"></div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Parking</b></font>
                    </div>
                    <div class="col-sm-10"></div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Height</b></font>
                    </div>
                    <div class="col-sm-10"></div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Lift</b></font>
                    </div>
                    <div class="col-sm-10"></div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Substation</b></font>
                    </div>
                    <div class="col-sm-10">
                        <font color='red'><b>NO</b></font>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Generator</b></font>
                    </div>
                    <div class="col-sm-10">
                        <font color='red'><b>NO</b></font>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Unit</b></font>
                    </div>
                    <div class="col-sm-10"></div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Hand Over</b></font>
                    </div>
                    <div class="col-sm-10"></div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Details</b></font>
                    </div>
                    <div class="col-sm-10">Dhaka-1209</div>
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
                    <div class="col-sm-10">2021-07-15 17:01:15</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Update Date</b></font>
                    </div>
                    <div class="col-sm-10">2021-08-16 19:55:59</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Featured</b></font>
                    </div>
                    <div class="col-sm-10">
                        <font color='red'><b>NO</b></font>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Views</b></font>
                    </div>
                    <div class="col-sm-10">200</div>
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

        <a href="../../project-add/index.html">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="../../project-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="../../project-edit/1/index.html">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

        <a href="../../project-photo/1/index.html">
            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i> Photo</button>
        </a>

    </div>
@endsection
