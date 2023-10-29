@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../project-list/index.html">Project List</a></li>
                <li class="breadcrumb-item"><a href="../../project-photo-more/1/index.html">Project Photo More</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Photo Upload or Delete</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-image"></i> Project Photo Upload/Delete</div>
            <!--/.card-header-->
            <div class="card-body">

                <h3><small>Title:</small> Assort Hafsha Manor</h3><br>



                <!-- PHOTO UPLOAD -->

                <!-- PHOTO DELETE-->



                <table class="table table-striped table-bordered">
                    <tbody>

                        <tr>
                            <td width="20%">
                                <font size="3">Photo:</font>
                            </td>
                            <td>

                                <form name="form1" method="POST" enctype="multipart/form-data" action="#">
                                    <img src="../../../images/projects/1629369776-hafsa1.jpg" style="width:200px;"
                                        class="rounded img-responsive img-fluid">&nbsp;&nbsp;&nbsp;
                                    <input type="hidden" name="project_photo_id" value="1">
                                    <input type="hidden" name="project_photo_name" value="1629369776-hafsa1.html">
                            </td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>

                                <input type="submit" name="delete_photo" value="Delete" class="btn btn-danger"
                                    style="width: 200px">
                            </td>
                            </form>




                            </td>
                        </tr>

                    </tbody>
                </table>

            </div><!--./card-body\-->
        </div><!--./card\-->

        <a href="../../project-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> Project
                List</button>
        </a>

        <a href="../../project-photo-more/1/index.html">
            <button type="button" class="btn btn-outline-success btn-sm"><i class="fas fa-image"></i> More Photo</button>
        </a>

        <a href="../../project-photo-edit/1/index.html">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

    </div>
@endsection
