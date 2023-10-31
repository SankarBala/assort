<header id="header" class="header-one">
    <div class="header_bg">
        <div class="container">
            <div class="logo-area">
                <div class="row align-items-center">
                    <div class="logo col-lg-2 text-center text-lg mb-3 mb-md-5 mb-lg-0">
                        <a class="d-block" href="{{ route('home') }}">
                            <img loading="lazy" src="{{ asset('images/logo.png') }}" alt="Assort Properties Ltd"
                                style="height: 100px;">
                        </a>
                    </div>

                    <div class="col-lg-9 header-right">
                        <ul class="top-info-box">
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">

                                        <p class="info-box-subtitle" style="padding-bottom: 10px;"><i
                                                class="fa fa-phone text-white"></i>&nbsp; 01988806470</p>
                                        <p class="info-box-subtitle"><i class="fa fa-globe text-white"></i>&nbsp;
                                            {{ $site->email }}
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="">
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">9:00 AM - 6:00 PM</p>
                                        <p class="info-box-subtitle">OPEN SAT-THU</p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('layouts.nav_menu')
</header>
