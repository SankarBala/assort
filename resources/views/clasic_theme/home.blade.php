@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="site-section bg-left-half mb-5">
            <div class="container owl-2-style">

                <div class="owl-carousel owl-2">
                    @foreach ($projects->take(6) as $project)
                        <div class=" p-2 bg-light">
                            <a href="{{ route('project', $project) }}">
                                <img src="{{ asset($project->photo) }}" alt="image" class="" height="500px" />
                                {{-- <h3 class="position-absolute">{{$project->name}}</h3> --}}
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <section id="projects">
        @foreach ($project_types as $project_type)
            @if (!$project_type->projects->where('status', 1)->isEmpty())
                @php($anyProject = true)
                <div class="container">
                    <center>
                        <h2 class="section-sub-title">{{ $project_type->name }}</h2>
                    </center>
                    <div class="row">

                        @foreach ($project_type->projects->where('status', 1)->take(3) as $project)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="latest-post">
                                    <div class="latest-post-media">
                                        <a href="{{ route('project', $project) }}" class="latest-post-img">
                                            <img loading="lazy" height="500px" src="{{ asset($project->photo) }}"
                                                alt="img">
                                        </a>
                                        <div class="imgname">
                                            <a href="">{{ $project->name }}</a>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div class="my-1">
                                                <small> {{ $project->address }}</small>
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
                    <div class="general-btn text-center mt-2 mb-4">
                        <a class="btn btn-info" href="{{ route('project-type', $project_type) }}">Load More Listing</a>
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
@endsection
