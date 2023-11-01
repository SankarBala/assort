@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <br>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.site-details') }}">Site Details</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.site-edit') }}">Site Edit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Site Logo</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-image"></i> Logo Upload / Delete</div>

            <div class="card-body">


                <table class="table table-striped table-bordered">
                    <tbody>

                        @if ($site->logo == null)
                            <form name="form2" method="POST" enctype="multipart/form-data"
                                action="{{ route('admin.site-logo-update') }}">
                                @method('put')
                                @csrf
                                <tr>
                                    <td>
                                        <input name="logo" type="file" id="photo" accept="image/*" />
                                    </td>
                                    <td>
                                        <input type="submit" name="upload" value="Upload" class="btn btn-primary"
                                            style="width: 150px">
                                    </td>
                                </tr>
                            </form>
                        @else
                            <form name="form1" method="POST" enctype="multipart/form-data"
                                action="{{ route('admin.site-logo-update') }}">
                                @csrf
                                @method('put')
                                <tr>
                                    <td width="20%">
                                        <font size="3">Logo:</font>
                                    </td>
                                    <td>
                                        <img src="{{ asset($site->logo) }}" style="width:200px;"
                                            class="rounded img-responsive img-fluid">&nbsp;&nbsp;&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <input type="submit" name="delete" value="Delete" class="btn btn-danger"
                                            style="width: 200px">
                                    </td>
                                </tr>
                            </form>
                        @endif
                    </tbody>
                </table>

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="{{ route('admin.site-details') }}"><button type="button" class="btn btn-outline-dark btn-sm"><i
                    class="fas fa-chart-area"></i> Details</button></a>

        <a href="{{ route('admin.site-edit') }}"><button type="button" class="btn btn-outline-info btn-sm"><i
                    class="fas fa-edit"></i> Edit</button></a>

    </div>
@endsection
