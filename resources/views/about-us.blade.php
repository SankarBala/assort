@extends('layouts.app')

@section('content')
    <main class="page-content text-start">
        @include('layouts.breadcrumb')
        <div class="container">
            <div class="row">
                <div class="text-dark">
                    <h2>About Us</h2>
                    <hr />
                    <br />

                    Founder Managing Director Engr. Md. Jahid established Assort Properties Ltd in 2015. The Company
                    successfully completed a number of exclusive Projects in Dhaka City.

                    Assort Properties Ltd is an established organization in the Real Estate Sector. Assort Properties Ltd
                    Promises to Ensure quality, maintain transparency, and delivers on time with innovative architecture,
                    fine craftsmanship, supreme materials, and modern technology giving ultimate satisfaction to the
                    clients. It lends ears to the clients and makes efforts to deliver the results with impeccable
                    perfection.

                    At Assort Properties Ltd believe that a satisfied customer, whether a landowner or a purchaser, shall
                    become a source of our advertisement, creating a wider scoper business. we proudly more completed
                    projects, many of the plots we collected were through the our valued landowners.

                    We are always committed to updating our policy to fulfill customer needs, demand and satisfaction by our
                    activities in the future real estate market of Bangladesh.
                </div>
            </div>
        </div>

    </main>
@endsection

@section('upper-content')
    <div class="pt-5 mt-5">
        @include('layouts.finder')
    </div>
@endsection

@section('breadcrumbs')
    <li><a href="index.html">Home</a></li>
    <li><a href="#">Pages</a></li>
    <li class="active">Contact Us</li>
@endsection
