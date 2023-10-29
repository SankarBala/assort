@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_edit">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../project-list/index.html">Project List</a></li>
                <li class="breadcrumb-item"><a href="../../project-photo-more/1/index.html">Project Photo More</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Photo Title Edit</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-edit"></i> Project Photo Title Edit</div>
            <!--/.card-header-->
            <div class="card-body">




                <form name="form1" method="POST" action="#">

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Title</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="project_photo_title" class="form-control"
                                id="text" placeholder="" value="Assort Hafsha Manor"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Status</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="status" value="1" checked>
                            <font color="green"><b>Active</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="status" value="0">
                            <font color="#B8860B"><b>Inactive</b></font>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><button type="submit" name="update" value="Submit"
                                class="btn btn-primary btn-block" style="width: 150px"><i class="fas fa-edit"></i>
                                UPDATE</button></div>
                    </div>

                </form>

            </div><!--./card-body\-->
        </div><!--./card\-->

        <a href="../../project-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> Project
                List</button>
        </a>

        <a href="../../project-photo-more/1/index.html">
            <button type="button" class="btn btn-outline-success btn-sm"><i class="fas fa-image"></i> More Photo</button>
        </a>

    </div>
@endsection
