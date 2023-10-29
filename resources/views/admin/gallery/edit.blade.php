@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_edit">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../gallery-photo-add/index.html">Add Gallery Photo</a></li>
                <li class="breadcrumb-item"><a href="../../gallery-photo-list/index.html">Gallery Photo List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery Photo Edit</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-edit"></i> Gallery Photo Edit</div><!--/.card-header-->
            <div class="card-body">



                <form name="form1" method="POST" action="#">

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Admin Level</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="project_id" class="form-control">
                                <option value="1">Assort Hafsha Manor</option>
                                <option value="2">Assort Khaled Homes</option>
                                <option value="3">Assort Sultana Manor</option>
                                <option value="4">Assort Kiron Vila</option>
                                <option value="5" Selected>Assort Sahera Homes</option>
                                <option value="6">Assort Masallah Tower</option>
                                <option value="7">Assort Abeda Castle</option>
                                <option value="8">Noor Castle</option>
                                <option value="10">Flat-Picture-1</option>
                                <option value="11">Flat-Picture-2</option>
                                <option value="12">Flat-Picture-3</option>
                                <option value="13">Assort Maksud Garden</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Title</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="gallery_title" class="form-control"
                                id="text" placeholder="" value="Assort Sahera Homes"></div>
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

        <a href="../../gallery-photo-add/index.html">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="../../gallery-photo-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="../../gallery-photo-details/1/index.html">
            <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i> Details</button>
        </a>

        <a href="../../gallery-photo-upload/1/index.html">
            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i> Photo</button>
        </a>

    </div>
@endsection
