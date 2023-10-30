@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-4">

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="row">
            @foreach ($project_types as $project_type)
                <div class="col-xl-3 col-md-6">
                    <div
                        class="card {{ ['bg-primary', 'bg-info', 'bg-warning', 'bg-danger'][$project_type->id % 4] }} text-white mb-4">
                        <div class="card-body">{{ $project_type->name }}
                            ({{ $projects->where('project_type_id', $project_type->id)->count() }})
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
