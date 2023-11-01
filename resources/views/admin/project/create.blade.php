@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_add">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Project</li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Project List</a></li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center">
                <i class="fas fa-plus-circle"></i> Add Project
            </div>
            <!--/.card-header-->
            <div class="card-body">
                <form name="form1" method="POST" enctype="multipart/form-data"
                    action="{{ route('admin.project.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Type Name</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-control" name="project_type_id" id="project_type_id">
                                <option value=0>Select A Project Type</option>
                                @foreach ($project_types as $project_type)
                                    <option value={{ $project_type->id }}>{{ $project_type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Name</b></font>
                            <font color="red">*</font>
                        </div>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" placeholder="" value=""
                                required />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Address</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="address" class="form-control" rows="2" placeholder=""></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>City</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-control" name="location_id" id="CityIdAdd">
                                <option value=0>Select A City</option>
                                @foreach ($locations as $location)
                                    <option value={{ $location->id }}>{{ $location->name }}</option>
                                @endforeach


                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Area</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-control" name="area_id" id="AreaIdAdd">
                                <option value=0>Select A Area</option>
                                @foreach ($areas as $area)
                                    <option value={{ $area->id }}>{{ $area->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Zip Code</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input name="zip_code" type="text" class="form-control" placeholder="" value=""
                                maxlength="4" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Country</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-control" name="country_id" id="country_id">
                                <option value=0>Select A Country</option>
                                @foreach ($countries as $country)
                                    <option value={{ $country->id }} {{ $country->id == 1 ? 'selected' : '' }}>
                                        {{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Flat Size</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="flat_size" class="form-control" rows="4" placeholder=""></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Parking</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input name="parking" type="text" class="form-control" placeholder="" value="" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Height</b></font>
                        </div>
                        <div class="col-sm-10"><input name="height" type="text" class="form-control" placeholder=""
                                value="" /></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Lift</b></font>
                        </div>
                        <div class="col-sm-10"><input name="lift" type="text" class="form-control" placeholder=""
                                value="" /></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Substation</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="substation" value="1" />
                            <font color="green"><b>YES</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="substation" value="0" checked />
                            <font color="red"><b>NO</b></font>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Generator</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="generator" value="1" />
                            <font color="green"><b>YES</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="generator" value="0" checked />
                            <font color="red"><b>NO</b></font>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Unit</b></font>
                        </div>
                        <div class="col-sm-10"><input name="unit" type="text" class="form-control" placeholder=""
                                value="" /></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Land Area</b></font>
                        </div>
                        <div class="col-sm-10"><input name="land_area" type="text" class="form-control"
                                placeholder="" value="" /></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Hand Over</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input name="hand_over" type="text" class="form-control" placeholder=""
                                value="" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Details</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="details" class="form-control" rows="5" placeholder="Enter address"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Featured</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="featured" value="1" />
                            <font color="green"><b>YES</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="featured" value="0" checked />
                            <font color="red"><b>NO</b></font>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Upload Photo</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input name="photo" type="file" id="file_name" />
                        </div>
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

        <a href="{{ route('admin.project.index') }}">
            <button type="button" class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-list"></i> List</button>
        </a>

    </div>
@endsection
