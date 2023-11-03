@extends('layouts.app')

@section('content')
    <main class="page-content">
        <section class="section-lg text-center text-md-start">
            @foreach ($project_types as $project_type)
                @if (!$project_type->projects->where('status', 1)->isEmpty())
                    @php($anyProject = true)
                    <div class="container">
                        <h3>{{ $project_type->name }}</h3>
                        <hr />
                        <div class="row clearleft-custom">
                            @foreach ($project_type->projects->where('status', 1)->take(3) as $project)
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="thumbnail thumbnail-3">
                                        <a class="img-link" href="{{ route('project', $project) }}">
                                            <img src="{{ asset($project->photo) }}" alt="" style="height:400px" /></a>
                                        <div class="caption">
                                            <h4>
                                                <a class="text-sushi" href="{{ route('project', $project) }}">
                                                    {{ $project->name }}
                                                </a>
                                            </h4>
                                            {{-- <span class="thumbnail-price h5">Title<span
                                                    class="mon text-regular">month</span></span> --}}
                                            <ul class="describe-1 px-2">
                                                <li><span class="icon icon-sm icon-primary hotel-icon-05"></span>Location:
                                                    {{ $project->location->name }}
                                                </li>
                                                <li><span class="icon icon-sm icon-primary hotel-icon-26"></span>Parking:
                                                    {{ $project->parking }}</li>
                                            </ul>
                                            <ul class="describe-2">
                                                <li><span class="icon icon-sm icon-primary hotel-icon-05"></span>Area:
                                                    {{ $project->area->name }}
                                                </li>
                                                <li><span class="icon icon-sm icon-primary hotel-icon-26"></span>
                                                    Lift: {{ $project->lift }}</li>
                                            </ul>
                                            <div class="my-1" style="height: 80px"><small>
                                                    {{ $project->address }}</small></div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div>
                            <a class="btn btn-sm btn-sushi offset-custom-11"
                                href="{{ route('project-type', $project_type) }}">All {{ $project_type->name }}</a>

                        </div>
                    </div>
                @endif
            @endforeach
            @isset($anyProject)
            @else
                <div class="general-btn text-center mt-2 mb-4">
                    <h3>Not any project found.</h3>
                </div>
            @endisset


        </section>

    </main>
@endsection

@section('upper-content')
    @include('layouts.slider')
    @include('layouts.finder')
@endsection
