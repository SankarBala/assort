@extends('layouts.app')

@section('content')
    <section id="projects">

        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i>&nbsp; Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('projects') }}">Projects</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $project_type->name }}</li>
                </ol>
            </nav>

            <div class="project_details">

                <h1 align="center">{{ $project_type->name }}</h1>

                <div class="row">
                    @foreach ($project_type->projects as $project)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="latest-post">
                                <div class="latest-post-media">
                                    <a href="../assort-sultana-manor/index.html" class="latest-post-img">
                                        <img loading="lazy" class="img-fluid" src="{{ asset($project->photo) }}"
                                            alt="img">
                                    </a>

                                    <div class="imgname">
                                        <a href="{{ route('project', $project) }}">{{ $project->name }}</a>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <div class="my-1">
                                            {{ $project->address }}
                                        </div>
                                        <div class="">
                                            <a href="{{ route('project', $project) }}" />
                                            <button type="button" class="btn btn-info">Details</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-body">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </section>
@endsection
