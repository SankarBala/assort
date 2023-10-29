@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../admin-add/index.html">Add Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin List</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Admin List (1)</div><!--/.card-header-->
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
                                    <center>Photo</center>
                                </th>
                                <th>
                                    <center>Name</center>
                                </th>
                                <th>
                                    <center>Email + Phone</center>
                                </th>
                                <th>
                                    <center>Role</center>
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
                                    <center>Photo</center>
                                </th>
                                <th>
                                    <center>Name</center>
                                </th>
                                <th>
                                    <center>Email + Phone</center>
                                </th>
                                <th>
                                    <center>Role</center>
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
                                <td align="center" width="8%">1</td>
                                <td align="center" width="12%">
                                    <img src='../../images/admins/1698350255-file-removebg-preview.png'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Engr. Md. Jahid</td>

                                <td>jahid2172@gmail.com
                                    <hr> 01711237957
                                </td>

                                <td align="center" width="5%">
                                    Super Admin </td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../admin-details/1/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../admin-edit/1/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../admin-photo/1/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--table-responsive-->

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="../admin-add/index.html"><button type="button" class="btn btn-outline-primary btn-sm"><i
                    class="fas fa-plus-circle"></i> Add</button></a>

    </div>
@endsection
