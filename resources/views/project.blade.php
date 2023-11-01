@extends('layouts.app')

@section('content')
    <section id="projects">

        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i>&nbsp; Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('projects') }}">Projects</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $project->name }}</li>
                </ol>
            </nav>

            <div class="project_details">

                <h1 align="">{{ $project->name }}</h1>
                <hr />
                <div class="row mt-2">
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="">
                            <img id="project_photo" loading="lazy" height="500px" width="100%"
                                src="{{ asset($project->photo) }}" alt="img">
                        </div>

                        <div class="row my-4">
                            @foreach ($project->galleries as $gallery)
                                <div class="col-3 my-2">
                                    <div class="card">
                                        <img src="{{ asset($gallery->link) }}" class="gallery_image" alt="Image Alt Text"
                                            loading="lazy" height="100px" width="100%"
                                            onclick = "showGalleryImage('{{ asset($gallery->link) }}')" />
                                        <span class="text-center m-2">{{ $gallery->title }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="col-lg-6 col-12 mb-4">
                        <table class="table table-borderless text-justify">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $project->name }}</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>{{ $project->location->name }}</td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td>{{ $project->area->name }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $project->address }}</td>
                                </tr>
                                <tr>
                                    <td>Flat Size</td>
                                    <td>{{ $project->flat_size }}</td>
                                </tr>
                                <tr>
                                    <td>Height</td>
                                    <td>{{ $project->height }}</td>
                                </tr>
                                <tr>
                                    <td>Lift Available</td>
                                    <td>{{ $project->lift }}</td>
                                </tr>
                                <tr>
                                    <td>Generator Available</td>
                                    <td>{{ $project->generator }}</td>
                                </tr>
                                <tr>
                                    <td>Substation Available</td>
                                    <td>{{ $project->substation }}</td>
                                </tr>
                                <tr>
                                    <td>Unit</td>
                                    <td>{{ $project->unit }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $project->details }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>
        </div>

    </section>
@endsection

<script>
    function showGalleryImage(link) {
        document.getElementById("project_photo").src = link;
    }
</script>
