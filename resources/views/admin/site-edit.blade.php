@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_edit">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Site Edit</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-edit"></i> Site Edit</div>
            <div class="card-body">

                <form name="form1" method="POST" action="{{ route('admin.site-update', 1) }}">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Name</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="name" class="form-control" id="text"
                                placeholder="" value="{{ $site->name }}"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Title</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="title" class="form-control" id="text"
                                placeholder="" value="{{ $site->title }}"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Description</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" rows="3">{{ $site->description }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Keywords</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="keywords" class="form-control" rows="3">{{ $site->keywords }}</textarea>
                            <small>Ex: <font color="#008080">keyword 1, keyword 2, keyword 3,</font></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Rel</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="rel" class="form-control" id="text"
                                placeholder="index, follow" value="{{ $site->rel }}">
                            <small>Ex: <font color="#008080">index, follow</font> or <font color="#008080">noindex, nofollow
                                </font>
                                </font></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Revisit After</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="revisit" class="form-control" id="text"
                                placeholder="" value="{{ $site->revisit }}"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Owner</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="owner" class="form-control" id="text" placeholder=""
                                value="{{ $site->owner }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Author</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="author" class="form-control" id="text" placeholder=""
                                value="Engr. Md. Jahid">
                            <small>Ex: <font color="#008080">{{ $site->author }}</font></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Email</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="text" placeholder=""
                                value="{{ $site->email }}">
                            <small>Ex: <font color="#008080">info@example.com</font></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Link</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="link" class="form-control" id="text" placeholder=""
                                value="{{ $site->link }}">
                            <small>Ex: <font color="#008080">https://www.google.com</font></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Copyright</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="copyright" class="form-control"
                                id="text" placeholder="" value="{{ $site->copyright }}"></div>
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

        <a href="{{ route('admin.site-details') }}"><button type="button" class="btn btn-outline-dark btn-sm"><i
                    class="fas fa-chart-area"></i> View</button></a>

        <a href="{{ route('admin.site-logo') }}"><button type="button" class="btn btn-outline-warning btn-sm"><i
                    class="fas fa-image"></i> Logo</button></a>

    </div>
@endsection
