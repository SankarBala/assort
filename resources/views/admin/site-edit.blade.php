@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_edit">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../site-details/1/index.html">Site Details</a></li>
                <li class="breadcrumb-item active" aria-current="page">Site Edit</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-edit"></i> Site Edit</div><!--/.card-header-->
            <div class="card-body">






                <form name="form1" method="POST" action="#">

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Name</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="site_name" class="form-control" id="text"
                                placeholder="" value="Assort Properties Ltd"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Title</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="site_title" class="form-control" id="text"
                                placeholder="" value=""></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Description</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="site_description" class="form-control" rows="3">Assort Properties Ltd</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Keywords</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="site_keywords" class="form-control" rows="3">assort properties, assort properties ltd</textarea>
                            <small>Ex: <font color="#008080">keyword 1, keyword 2, keyword 3,</font></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Rel</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="site_rel" class="form-control" id="text"
                                placeholder="index, follow" value="index, follow">
                            <small>Ex: <font color="#008080">index, follow</font> or <font color="#008080">noindex, nofollow
                                </font>
                                </font></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Revisit After</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="site_revisit" class="form-control" id="text"
                                placeholder="" value="7 days"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Owner</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="site_owner" class="form-control" id="text"
                                placeholder="" value="Engr. Md. Jahid"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Author</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="site_author" class="form-control" id="text" placeholder=""
                                value="Engr. Md. Jahid">
                            <small>Ex: <font color="#008080">Mahfuz Hasan</font></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Email</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="site_email" class="form-control" id="text" placeholder=""
                                value="assortproperties@gmail.com">
                            <small>Ex: <font color="#008080">info@example.com</font></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Link</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="site_link" class="form-control" id="text" placeholder=""
                                value="https://assortpropertiesltd.com/">
                            <small>Ex: <font color="#008080">https://www.google.com</font></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Copyright</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="site_copyright" class="form-control"
                                id="text" placeholder="" value="Copyright © Assort Properties Ltd."></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><button type="submit" name="update" value="Submit"
                                class="btn btn-primary btn-block" style="width: 150px"><i class="fas fa-edit"></i>
                                UPDATE</button></div>
                    </div>

                </form>

            </div><!--./card-body\-->
        </div><!--./card\-->

        <a href="../../site-details/1/index.html"><button type="button" class="btn btn-outline-dark btn-sm"><i
                    class="fas fa-chart-area"></i> Details</button></a>

        <a href="../../site-logo/1/index.html"><button type="button" class="btn btn-outline-warning btn-sm"><i
                    class="fas fa-image"></i> Logo</button></a>

    </div>
@endsection
