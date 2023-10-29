@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-chart-area"></i> Profile</div><!--/.card-header-->
            <div class="card-body">


                <p style="float: right">
                    <a href="/admin-profile-edit/1/index.html">
                        <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                    </a>
                    <a href="/admin-profile-photo/1/index.html">
                        <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                            Photo</button>
                    </a>
                </p>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Photo</b></font>
                    </div>
                    <div class="col-sm-10">
                        <img src='/../images/admins/1698350255-file-removebg-preview.png'
                            class='rounded img-responsive img-fluid' style='width:200px;'>
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
                        <font size="3" color="#808080"><b>Name</b></font>
                    </div>
                    <div class="col-sm-10">Engr. Md. Jahid</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Address</b></font>
                    </div>
                    <div class="col-sm-10">262/1(3rd floor), Road# 10/A, West Dhanmondi, Dhaka -1209</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>City</b></font>
                    </div>
                    <div class="col-sm-10">Dhaka</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Phone</b></font>
                    </div>
                    <div class="col-sm-10">01711237957</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Email</b></font>
                    </div>
                    <div class="col-sm-10">jahid2172@gmail.com</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Admin Level</b></font>
                    </div>
                    <div class="col-sm-10">Super Admin</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Add Date</b></font>
                    </div>
                    <div class="col-sm-10">2021-07-28 19:21:35</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Add Date</b></font>
                    </div>
                    <div class="col-sm-10">2023-10-27 00:55:42</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Status</b></font>
                    </div>
                    <div class="col-sm-10">
                        <font color='green'>Active</font>
                    </div>
                </div>

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="/admin-profile-edit/1/index.html">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>
        <a href="/admin-profile-photo/1/index.html">
            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i> Photo</button>
        </a>

    </div>
@endsection
