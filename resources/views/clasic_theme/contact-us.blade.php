@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i>&nbsp; Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
        <div class="page_details">
            <h1 align="">Contact Us</h1>
            <hr />
            <br />
            <font size="4"><b>Assort Properties LTD</b></font><br />
            <i class="fas fa-map-marker-alt"></i> <b>Address:</b> House # 262/1 (3rd floor),Road No # 10/A, West Dhanmondi,
            Dhaka-1209<br />
            <i class="fas fa-mobile-alt"></i> <b>Mobile:</b> +8801988806471, +8801988806472, +8801988806470<br />
            <i class="fa fa-phone"></i> <b>Phone:</b> +88-02-48112253<br />
            <i class="fa fa-envelope"></i> <b>Email:</b> <a
                href="mailto:info@assortpropertiesltd.com">info@assortpropertiesltd.com</a>
        </div>
    </div>
@endsection
