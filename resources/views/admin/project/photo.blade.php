@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../project-add/index.html">Add Project</a></li>
                <li class="breadcrumb-item"><a href="../../project-list/index.html">Project List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Photo</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-image"></i> Project Photo</div><!--/.card-header-->
            <div class="card-body">

                <h3><small>Name:</small> Assort Hafsha Manor</h3><br>



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
                                    <input name="file_name" type="file" id="file_name">
                                    <input type="submit" name="upload" value="Upload" class="btn btn-primary"
                                        style="width: 150px">
                                </form>




                            </td>
                        </tr>

                    </tbody>
                </table>

            </div><!--./card-body\-->
        </div><!--./card\-->

        <a href="../../project-add/index.html">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="../../project-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="../../project-details/1/index.html">
            <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i> Details</button>
        </a>

        <a href="../../project-edit/1/index.html">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

    </div>
@endsection
