@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Site Details</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center">Site Details</div><!--/.card-header-->
            <div class="card-body">



                <p style="float: right">
                    <a href="../../site-edit/1/index.html">
                        <button type="button" class="btn btn-outline-info btn-sm">Edit</button>
                    </a>
                    <a href="../../site-logo/1/index.html">
                        <button type="button" class="btn btn-outline-warning btn-sm">Logo</button>
                    </a>
                </p>


                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Logo</b></font>
                    </div>
                    <div class="col-sm-10">
                        <img src='../../../images/logo.png' class='rounded img-responsive img-fluid' style='width:120px;'>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Name</b></font>
                    </div>
                    <div class="col-sm-10">Assort Properties Ltd</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Title</b></font>
                    </div>
                    <div class="col-sm-10"></div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Description</b></font>
                    </div>
                    <div class="col-sm-10">Assort Properties Ltd</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Keywords</b></font>
                    </div>
                    <div class="col-sm-10">assort properties, assort properties ltd</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Rel</b></font>
                    </div>
                    <div class="col-sm-10">index, follow</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Revisit After</b></font>
                    </div>
                    <div class="col-sm-10">7 days</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Owner</b></font>
                    </div>
                    <div class="col-sm-10">Engr. Md. Jahid</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Author</b></font>
                    </div>
                    <div class="col-sm-10">Engr. Md. Jahid</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Email</b></font>
                    </div>
                    <div class="col-sm-10">assortproperties@gmail.com</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Link</b></font>
                    </div>
                    <div class="col-sm-10">https://assortpropertiesltd.com</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Copyright</b></font>
                    </div>
                    <div class="col-sm-10">Copyright © Assort Properties Ltd.</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Added By</b></font>
                    </div>
                    <div class="col-sm-10">Engr. Md. Jahid</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Updated By</b></font>
                    </div>
                    <div class="col-sm-10">Engr. Md. Jahid</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Add Date</b></font>
                    </div>
                    <div class="col-sm-10">2021-02-23 15:57:48</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Update Date</b></font>
                    </div>
                    <div class="col-sm-10">2023-10-27 00:56:21</div>
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

        <a href="../../site-edit/1/index.html">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>
        <a href="../../site-logo/1/index.html">
            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i> Logo</button>
        </a>

    </div>
@endsection
