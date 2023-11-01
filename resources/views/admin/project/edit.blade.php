@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_edit">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project.create') }}">Add Project</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Project List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Edit</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-edit"></i> Project Edit</div>

            <div class="card-body">

                <form name="form" method="POST" action="{{ route('admin.project.update', $project) }}">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Type Name</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="project_type_id" class="form-control">
                                @foreach ($project_types as $type)
                                    <option value="{{ $type->id }}"
                                        {{ $type->id == $project->project_type_id ? 'selected' : '' }}>{{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Name</b></font>
                            <font color="red">*</font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="name" class="form-control" id="text"
                                placeholder="" value="{{ $project->name }}" required></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Address</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="address" class="form-control" rows="2">{{ $project->address }}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>City</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="location_id" class="form-control" id="CityIdEdit">

                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}"
                                        {{ $location->id == $project->location_id ? 'selected' : '' }}>
                                        {{ $location->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Area</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="area_id" class="form-control" id="AreaIdEdit">
                                @foreach ($areas as $area)
                                    <option value="{{ $area->id }}"
                                        {{ $area->id == $project->area_id ? 'selected' : '' }}>
                                        {{ $area->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Zip Code</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="zip_code" class="form-control" id="text"
                                placeholder="" value="{{ $project->zip_code }}"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Country</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="country_id" class="form-control" id="CountryId">
                                <option value="1" Selected>Bangladesh</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}"
                                        {{ $country->id == $project->country_id ? 'selected' : '' }}>
                                        {{ $country->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Flat Size</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="flat_size" class="form-control" rows="3">{{ $project->flat_size }}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Parking</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="parking" class="form-control" id="text"
                                placeholder="" value="{{ $project->parking }}" /></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Height</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="height" class="form-control" id="text"
                                placeholder="" value="{{ $project->height }}" /></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Lift</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="lift" class="form-control" id="text"
                                placeholder="" value="{{ $project->lift }}" /></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Substation</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="substation"
                                value="1"{{ $project->substation ? 'checked' : '' }} />
                            <font color="green"><b>YES</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="substation" value="0"
                                {{ $project->substation ? '' : 'checked' }} />
                            <font color="red"><b>NO</b></font>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Generator</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="generator" value="1"
                                {{ $project->generator ? 'checked' : '' }} />
                            <font color="green"><b>YES</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="generator" value="0"
                                {{ $project->generator ? '' : 'checked' }} />
                            <font color="red"><b>NO</b></font>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Unit</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="unit" class="form-control" id="text"
                                placeholder="" value="{{ $project->unit }}"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Hand Over</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="hand_over" class="form-control"
                                id="text" placeholder="" value="{{ $project->hand_over }}" /></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Details</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="details" class="form-control" rows="10">{{ $project->details }}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Featured</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="featured" value="1"
                                {{ $project->featured ? 'checked' : '' }} />
                            <font color="green"><b>YES</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="featured" value="0"
                                {{ $project->featured ? '' : 'checked' }} />
                            <font color="red"><b>NO</b></font>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Status</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="status" value="1"
                                {{ $project->status ? 'checked' : '' }} />
                            <font color="green"><b>Active</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="status" value="0"
                                {{ $project->status ? '' : 'checked' }} />
                            <font color="#B8860B"><b>Inactive</b></font>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button type="submit" name="update" value="Submit" class="btn btn-primary btn-block"
                                style="width: 150px"><i class="fas fa-edit"></i>
                                UPDATE</button>
                        </div>
                    </div>

                </form>

            </div><!--./card-body\-->
        </div><!--./card\-->

        <a href="{{ route('admin.project.create') }}">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="{{ route('admin.project.index') }}">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="{{ route('admin.project.edit', $project) }}">
            <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
        </a>

        <a href="{{ route('admin.project.show', $project) }}">
            <button type="button" class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i> Show</button>
        </a>
        <a href="{{ route('admin.project.photo.show', $project) }}">
            <button type="button" class="btn btn-outline-danger btn-sm"><i class="fas fa-image"></i>Photo</button>
        </a>

    </div>
@endsection
