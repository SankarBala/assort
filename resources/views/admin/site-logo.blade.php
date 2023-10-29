@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <br>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../site-details/1/index.html">Site Details</a></li>
                <li class="breadcrumb-item"><a href="../../site-edit/1/index.html">Site Edit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Site Logo</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-image"></i> Logo Upload / Delete</div><!--/.card-header-->
            <div class="card-body">


                <!-- PHOTO UPLOAD -->

                <!-- PHOTO DELETE-->


                <table class="table table-striped table-bordered">
                    <tbody>

                        <tr>
                            <td width="20%">
                                <font size="3">Logo:</font>
                            </td>
                            <td>

                                <form name="form1" method="POST" enctype="multipart/form-data" action="#">
                                    <img src="../../../images/logo.png" style="width:120px; height:120px;"
                                        class="rounded img-responsive img-fluid img-thumbnail"><br><br>
                                    <input type="hidden" name="site_id" value="1">
                                    <input type="hidden" name="site_logo" value="logo.html">

                                    <input type="submit" name="delete_photo" value="Delete" class="btn btn-danger btn-sm"
                                        style="width:120px;">
                                </form>




                            </td>
                        </tr>

                    </tbody>
                </table>

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="../../site-details/1/index.html"><button type="button" class="btn btn-outline-dark btn-sm"><i
                    class="fas fa-chart-area"></i> Details</button></a>

        <a href="../../site-edit/1/index.html"><button type="button" class="btn btn-outline-info btn-sm"><i
                    class="fas fa-edit"></i> Edit</button></a>

    </div>
@endsection
