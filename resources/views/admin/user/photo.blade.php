@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/admin-profile/index.html">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile Photo</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-image"></i> Photo Upload / Delete</div>
            <!--/.card-header-->
            <div class="card-body">

                <!-- PHOTO UPLOAD -->

                <!-- PHOTO DELETE-->


                <table class="table table-striped table-bordered">
                    <tbody>

                        <tr>
                            <td width="20%">
                                <font size="3">Upload Photo:</font>
                            </td>
                            <td>

                                <form name="form1" method="POST" enctype="multipart/form-data" action="#">
                                    <img src="/../images/admins/1698350255-file-removebg-preview.png"
                                        style="width:200px; height:200px;"
                                        class="rounded img-responsive img-fluid img-thumbnail"> &nbsp;&nbsp;&nbsp;
                                    <input type="hidden" name="admin_id" value="1">
                                    <input type="hidden" name="admin_photo" value="1698350255-file-removebg-preview.html">
                                    <button type="submit" name="delete_photo" value="Delete"
                                        class="btn btn-danger btn-sm">Delete Photo</button>
                                </form>




                            </td>
                        </tr>

                    </tbody>
                </table>

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="/admin-profile/index.html">
            <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i> Details</button>
        </a>

        <a href="/admin-profile-edit/1/index.html">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

    </div>
@endsection
