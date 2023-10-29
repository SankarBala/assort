﻿@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_add">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../project-list/index.html">Project List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project More Photo</li>
            </ol>
        </nav>


        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-plus-circle"></i> Add Project Photo</div>
            <!--/.card-header-->
            <div class="card-body">



                <form name="form1" method="POST" enctype="multipart/form-data" action="#">

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Photo Title</b></font>
                        </div>
                        <div class="col-sm-10"><input name="project_photo_title" type="text" class="form-control"
                                placeholder="enter name" value=""></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Upload Photo</b></font>
                        </div>
                        <div class="col-sm-10"><input name="file_name" type="file" id="file_name"></div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><button type="submit" name="action" value="Submit"
                                class="btn btn-primary btn-block" style="width: 150px"><i class="fas fa-plus-circle"></i>
                                SUBMIT</button></div>
                    </div>

                </form>

                <font color="red">*</font> Required fields

            </div><!--/.card-body-->
        </div><!--/.card-->
        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Project Photo List (1)</div>
            <!--/.card-header-->
            <div class="card-body">


                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr class="table-secondary">
                                <th>
                                    <center>Photo</center>
                                </th>
                                <th>
                                    <center>Photo Title</center>
                                </th>
                                <th>
                                    <center>Add Date</center>
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
                                    <center>Photo</center>
                                </th>
                                <th>
                                    <center>Photo Title</center>
                                </th>
                                <th>
                                    <center>Add Date</center>
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
                                <td align="center" width="10%">
                                    <img src='../../../images/projects/1629369776-hafsa1.jpg'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Assort Hafsha Manor</td>

                                <td align="center" width="10%">2021-08-19 20:42:56</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>

                                <td align="center" width="25%">

                                    <a href="../../project-photo-edit/1/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../../project-photo-photo/1/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                    <a href="../../project-photo-delete/1/index.html"><button type="button"
                                            class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>
                                            Delete</button></a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--table-responsive-->

            </div><!--/.card-body-->
        </div><!--/.card-->
        <a href="../../project-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> Project
                List</button>
        </a>

    </div>
@endsection
