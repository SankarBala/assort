@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_edit">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../area-add/index.html">Add Area</a></li>
                <li class="breadcrumb-item"><a href="../../area-list/index.html">Area List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Area Edit</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-edit"></i> Area Edit</div>
            <div class="card-body">
                <form name="form1" method="POST" action="{{ route('admin.area.update', $area) }}">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Areas</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="location_id" class="form-control">
                                @foreach ($locations as $location)
                                    <option value={{ $location->id }}
                                        {{ $area->location->location_id == $location->id ? 'selected' : '' }}>
                                        {{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Name</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="name" class="form-control" id="text"
                                placeholder="" value="{{ $area->name }}"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Slug</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="slug" class="form-control" id="text"
                                placeholder="" value="{{ $area->slug }}"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Status</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="status" value="1" {{ $area->status == 1 ? 'checked' : '' }}>
                            <font color="green"><b>Active</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="status" value="0" {{ $area->status == 0 ? 'checked' : '' }}>
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

        <a href="{{ route('admin.area.create') }}">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="{{ route('admin.area.index') }}">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="{{ route('admin.area.show', $area) }}">
            <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i> Details</button>
        </a>

    </div>
@endsection
