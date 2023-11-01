@extends('layouts.app')

@section('content')
    <section id="projects">

        <div class="container">
            <center>
                <h2 class="section-sub-title">Search </h2>
            </center>
            <div class="row">
                @foreach ($searched_projects as $project)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="latest-post">
                            <div class="latest-post-media">
                                <a href="{{ route('project', $project) }}" class="latest-post-img">
                                    <img loading="lazy" height="500px" src="{{ asset($project->photo) }}" alt="img">
                                </a>
                                <div class="imgname">
                                    <a href="{{ route('project', $project) }}">{{ $project->name }}</a>
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
            {{-- <div class="general-btn text-center mt-2 mb-4"> --}}
            {{-- <a class="btn btn-info" href="handover-project/index.html">Load More Listing</a> --}}
            {{-- {{$searched_projects->links()}}  --}}
            {{-- </div> --}}

        </div>
    </section>
@endsection
