@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i>&nbsp; Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Message From MD</li>
            </ol>
        </nav>
        <div class="page_details text-justify">
            <h1 align="">Message From MD</h1>
            <hr />
            <br />
            Message For Managing Director<br />
            Bangladesh is a highly populated & developing Country. which challenge is not possible to overcome only by the
            government. In that context. Managing Director Engr. Md. Jahid(B.Sc Engineer. Civil) established Assort
            Properties Ltd.<br />
            <br />
            From the very beginning, Our Vision was not only to make a profit-oriented business but also to make the Real
            Estate industry reliable and trustworthy.<br />
            <br />
            My company is dedicated to maintaining quality while placing special emphasis on culture and style. We are
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
@endsection
