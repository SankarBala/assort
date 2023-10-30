@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_details">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project.create') }}">Add Project</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Project List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Details</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-chart-area"></i> Project Details</div>
            <div class="card-body">



                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Photo</b></font>
                    </div>
                    <div class="col-sm-10">
                        <img src='{{ asset($project->photo) }}' class='rounded img-responsive img-fluid'
                            style='width:200px;'>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>ID</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->id }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Type</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->project_type->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Name</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Slug</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->slug }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Address</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->address }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>City</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->location->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Area</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->area->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Zip Code</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->zip_code }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Country</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->country->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Flat Size</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->flat_size }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Parking</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->parking }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Height</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->height }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Lift</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->lift }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Substation</b></font>
                    </div>
                    <div class="col-sm-10">
                        @if ($project->substation)
                            <font color="green"><b>YES</b></font>
                        @else
                            <font color="red"><b>NO</b></font>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Generator</b></font>
                    </div>
                    <div class="col-sm-10">
                        @if ($project->generator)
                            <font color="green"><b>YES</b></font>
                        @else
                            <font color="red"><b>NO</b></font>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Unit</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->unit }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Hand Over</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->hand_over }}</div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Details</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->details }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Added by</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->creator->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Updated by</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->updator->name }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Add Date</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->created_at }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Update Date</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->updated_at }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Featured</b></font>
                    </div>
                    <div class="col-sm-10">
                        @if ($project->featured)
                            <font color="green"><b>YES</b></font>
                        @else
                            <font color="red"><b>NO</b></font>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Views</b></font>
                    </div>
                    <div class="col-sm-10">{{ $project->views }}</div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <font size="3" color="#808080"><b>Status</b></font>
                    </div>
                    <div class="col-sm-10">
                        @if ($project->status)
                            <font color="green"><b>Active</b></font>
                        @else
                            <font color="red"><b> Inactive</b></font>
                        @endif
                    </div>
                </div>

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

        <a href="{{ route('admin.project.photo.show', $project) }}">
            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i> Photo</button>
        </a>

    </div>
@endsection
