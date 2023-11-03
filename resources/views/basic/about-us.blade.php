@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i>&nbsp; Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About US</li>
            </ol>
        </nav>
        <div class="page_details">
            <h1 align="">About US</h1>
            <hr/>
            <br/>
            About US<br />
            Founder Managing Director Engr. Md. Jahid established Assort Properties Ltd in 2015. The Company successfully
            completed a number of exclusive Projects in Dhaka City.<br />
            <br />
            Assort Properties Ltd is an established organization in the Real Estate Sector. Assort Properties Ltd Promises
            to Ensure quality, maintain transparency, and delivers on time with innovative architecture, fine
            craftsmanship, supreme materials, and modern technology giving ultimate satisfaction to the clients. It lends
            ears to the clients and makes efforts to deliver the results with impeccable perfection.<br />
            <br />
            At Assort Properties Ltd believe that a satisfied customer, whether a landowner or a purchaser, shall become a
            source of our advertisement, creating a wider scoper business. we proudly more completed projects, many of the
            plots we collected were through the our valued landowners.<br />
            <br />
            We are always committed to updating our policy to fulfill customer needs, demand and satisfaction by our
            activities in the future real estate market of Bangladesh.
        </div>
    </div>
@endsection
