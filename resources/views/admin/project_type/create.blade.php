﻿@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_add">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project-type.index') }}">Project Type List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Project Type</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-plus-circle"></i> Add Project Type</div>
            <!--/.card-header-->
            <div class="card-body">



                <form name="form1" method="POST" enctype="multipart/form-data"
                    action="{{ route('admin.project-type.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Name</b></font>
                        </div>
                        <div class="col-sm-10"><input name="name" type="text" class="form-control"
                                placeholder="enter name" value=""></div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><button type="submit" name="action" value="Submit"
                                class="btn btn-primary btn-block" style="width: 150px">
                                <i class="fas fa-plus-circle"></i>
                                SUBMIT</button></div>
                    </div>

                </form>

                <font color="red">*</font> Required fields

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="{{ route('admin.project-type.index') }}">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

    </div>
@endsection
