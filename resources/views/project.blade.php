@extends('layouts.app')

@section('content')
    <main class="page-content text-start">
        <section class="section-full pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('projects') }}">Projects</a></li>
                            <li class="">{{ $project->name }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-md section-md-mod-2 pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7 col-lg-7">

                        <div class="slick-slider carousel-parent" data-arrows="true" data-loop="false" data-dots="false"
                            data-swipe="true" data-sm-items="1" data-lightgallery="group" data-child="#child-carousel"
                            data-for=".thumbnail-carousel">
                            <a class="item" data-lightgallery="item" href="{{ asset($project->photo) }}">
                                <img src="{{ asset($project->photo) }}" alt="" style="height:550px" />
                            </a>
                            @foreach ($project->galleries as $photo)
                                <a class="item" data-lightgallery="item" href="{{ asset($photo->link) }}">
                                    <img src="{{ asset($photo->link) }}" alt="" style="height:550px" />
                                </a>
                            @endforeach
                        </div>
                        <div class="slick-slider thumbnail-carousel" id="child-carousel" data-for=".carousel-parent"
                            data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="2"
                            data-xs-items="3" data-sm-items="4" data-md-items="4" data-lg-items="5" data-xl-items="5"
                            data-slide-to-scroll="1">
                            @foreach ($project->galleries as $photo)
                                <div class="item">
                                    <div class="product-thumbnail">
                                        <img src="{{ asset($photo->link) }}" alt="" style="height:150px" />
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-12 text-justify">

                                <h4 class="border-bottom offset-custom-8">Description</h4>
                                <p>{{ $project->details }}</p>
                                {{-- <h4 class="border-bottom offset-custom-8">Reviews</h4> --}}
                                {{-- <div class="media media-mod-2 comment">
                                    <div class="media-left round"><img class="round" src="images/post_page-4.jpg"
                                            alt="" width="70" height="70"></div>
                                    <div class="media-body">
                                        <p class="h6 text-sushi text-ubold">Marilyn Taylor</p>
                                        <time class="fa-calendar" datetime="2016">May 21, 2016 at 5:50 pm</time>
                                        <p class="text-light-custom">I just</p><a class="text-sushi" href="#"><span
                                                class="fa-mail-reply icon"></span><span>Reply</span></a>
                                    </div>
                                </div> --}}
                                {{-- <div class="media media-mod-2 comment comment-repost">
                                    <div class="media-left round"><img class="round" src="images/post_page-5.jpg"
                                            alt="" width="70" height="70"></div>
                                    <div class="media-body">
                                        <p class="h6 text-sushi text-ubold">Heather Turner</p>
                                        <time class="fa-calendar" datetime="2016">May 21, 2016 at 6:23 pm</time>
                                        <p class="text-light-custom">Thank you!</p><a class="text-sushi"
                                            href="#"><span class="fa-mail-reply icon"></span><span>Reply</span></a>
                                    </div>
                                </div> --}}
                                {{-- <h4 class="border-bottom offset-custom-8">Write Review</h4> --}}
                                {{-- <form class="text-start offset-custom-11">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-wrap">
                                                <label class="form-label" for="contact-name">Enter your
                                                    name</label>
                                                <input class="form-input" id="contact-name" type="text"
                                                    name="name" data-constraints="Required">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-sushi btn-sm" type="submit">Send
                                                message</button>
                                        </div>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-5">
                        <div class="sidebar sidebar-mod-1">

                            <div class="">
                                <h4 class="border-bottom mb-2">{{ $project->name }}</h4>
                                <div class="">
                                    <table class="table">
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="sidebar-module">
                                <h4 class="border-bottom">Share</h4>
                                <div class="icon-group"><a class="icon icon-sm icon-social fa-facebook"
                                        href="#"></a><a class="icon icon-sm icon-social fa-twitter"
                                        href="#"></a><a class="icon icon-sm icon-social fa-google-plus"
                                        href="#"></a></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('upper-content')
    <div class="pt-5 mt-5">
        @include('layouts.finder')
    </div>
@endsection
