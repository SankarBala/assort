@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../gallery-photo-add/index.html">Add Gallery Photo</a></li>
                <li class="breadcrumb-item"><a href="../../gallery-photo-list/index.html">Gallery Photo List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery Photo Upload</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-image"></i> Gallery Photo Upload</div><!--/.card-header-->
            <div class="card-body">



                <h2>Assort Sahera Homes</h2>


                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>

                        <td>
                            <img src="../../../images/gallery/1628589412_jpg-3.jpg" width="100"><br>
                            <form method="POST" action="#">
                                <input type="hidden" name="photo_id" value="6">
                                <input type="hidden" name="photo_name" value="1628589412_jpg-3.html"><br>
                                <input type="submit" name="delete_photo" value="Delete" class="btn btn-danger btn-sm"
                                    style="width: 100px">
                            </form>
                        </td>
                </table>

                <br>
                <hr><br>

                <form action="#" method="post" enctype="multipart/form-data" class="table">

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Upload A Photo</b></font>
                        </div>
                        <div class="col-sm-10"><input name="file_name" type="file" id="file_name"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">&nbsp;</div>
                        <div class="col-sm-10"><button type="submit" name="action" value="Submit"
                                class="btn btn-primary btn-block" style="width: 150px"><i class="fas fa-image"></i>
                                Upload</button></div>
                    </div>

                </form>

            </div><!--./card-body\-->
        </div><!--./card\-->

        <a href="../../gallery-photo-add/index.html">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="../../gallery-photo-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="../../gallery-photo-details/1/index.html">
            <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i> Details</button>
        </a>

        <a href="../../gallery-photo-edit/1/index.html">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

    </div>
@endsection
