@extends('layouts.app')

@section('content')
    <main class="page-content text-start">
        @include('layouts.breadcrumb')
        <div class="container">
            <div class="row">
                <div class="text-dark">
                    <h2>Message of MD</h2>
                    <hr />
                    <br />
                   <h4> Message From Managing Director</h4>
                   <br/>
                    Bangladesh is a highly populated & developing Country. which challenge is not possible to overcome only
                    by the
                    government. In that context. Managing Director Engr. Md. Jahid(B.Sc Engineer. Civil) established Assort
                    Properties Ltd.<br />
                    <br />
                    From the very beginning, Our Vision was not only to make a profit-oriented business but also to make the
                    Real
                    Estate industry reliable and trustworthy.<br />
                    <br />
                    My company is dedicated to maintaining quality while placing special emphasis on culture and style. We
                    are
                    committed to translating your dream into reality with comfortable living in a friendly environment at a
                    competitive and affordable cost.<br />
                    <br />
                    At Present Time Assort Properties Ltd number of Handover projects are 4, Ongoing Projects 4 and Upcoming
                    Projects are 2 in Different good Places in Dhaka.<br />
                    <br />
                    <br />
                    Engr. Md. Jahid<br />
                    Managing Director<br />
                    Assort Properties Ltd
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
