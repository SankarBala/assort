@extends('layouts.app')

@section('content')
    <main class="page-content">
        <section class="section-full pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Projects</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-center text-md-start">
            <div class="container">
                <h3>All Projects</h3>
                <hr />
                <div class="row clearleft-custom">
                    @foreach ($projects as $project)
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
                {{-- 
                <div>
                    <a class="btn btn-sm btn-sushi offset-custom-11" href="{{ route('project-type', $project_type) }}">All
                        {{ $project_type->name }}</a>

                </div> --}}
            </div>


        </section>

    </main>
@endsection

@section('upper-content')
    <div class="pt-5 mt-5">
        @include('layouts.finder')
    </div>
@endsection

@section('breadcrumbs')
    <div>
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i>&nbsp; Home</a>
        </li>
        <li class="breadcrumb-item"><a href="{{ route('projects') }}">Projects</a></li>
        <li class="breadcrumb-item active" aria-current="page"></li>
    </div>
@endsection
