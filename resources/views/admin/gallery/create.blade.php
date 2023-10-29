@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_add">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Gallery Photo</li>
                <li class="breadcrumb-item"><a href="../gallery-photo-list/index.html">Gallery Photo List</a></li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-plus-circle"></i> Add Gallery Photo</div>
            <!--/.card-header-->
            <div class="card-body">



                <form name="form1" method="POST" enctype="multipart/form-data" action="#">

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Project</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-control" name="project_id" id="project_id">
                                <option value=0>Select A Project</option>
                                <option value=1>Assort Hafsha Manor</option>
                                <option value=2>Assort Khaled Homes</option>
                                <option value=3>Assort Sultana Manor</option>
                                <option value=4>Assort Kiron Vila</option>
                                <option value=5>Assort Sahera Homes</option>
                                <option value=6>Assort Masallah Tower</option>
                                <option value=7>Assort Abeda Castle</option>
                                <option value=8>Noor Castle</option>
                                <option value=10>Flat-Picture-1</option>
                                <option value=11>Flat-Picture-2</option>
                                <option value=12>Flat-Picture-3</option>
                                <option value=13>Assort Maksud Garden</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Title</b></font>
                            <font color="red">*</font>
                        </div>
                        <div class="col-sm-10"><input name="gallery_title" type="text" class="form-control"
                                placeholder="enter name" value=""></div>
                    </div>

                    <br>

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

        <a href="../gallery-photo-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

    </div>
@endsection
