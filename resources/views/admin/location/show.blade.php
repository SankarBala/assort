@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../city-add/index.html">Add City</a></li>
                <li class="breadcrumb-item"><a href="../../city-list/index.html">City List</a></li>
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
                    <div class="col-sm-10">1</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Name</b></font>
                    </div>
                    <div class="col-sm-10">Rajshahi</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Address</b></font>
                    </div>
                    <div class="col-sm-10">rajshahi</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Status</b></font>
                    </div>
                    <div class="col-sm-10">
                        <font color='green'>Active</font>
                    </div>
                </div>

            </div><!--./card-body\-->
        </div><!--./card\-->


        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Area List (1) for Rajshahi City</div>
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


                            <tr>
                                <td align="center" width="8%">6</td>

                                <td>Khilghaon</td>

                                <td>khilghaon</td>

                                <td>
                                    Rajshahi </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../../area-details/6/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../../area-edit/6/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>
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
