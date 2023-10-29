@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_add">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../city-list/index.html">City List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Areas of Rajshahi</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-plus-circle"></i> Area Add for Rajshahi City</div>
            <!--/.card-header-->
            <div class="card-body">


                <form name="form1" method="POST" enctype="multipart/form-data" action="#">

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Area Name</b></font>
                        </div>
                        <div class="col-sm-10"><input name="area_name" type="text" class="form-control"
                                placeholder="enter name" value=""></div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><button type="submit" name="action" value="Submit"
                                class="btn btn-primary btn-block" style="width: 150px"><i class="fas fa-plus-circle"></i>
                                SUBMIT</button></div>
                    </div>

                </form>

            </div><!--/.card-body-->
        </div><!--/.card-->
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
    </div>
@endsection
