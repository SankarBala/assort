  <!-- Page Header-->
  <header class="page-head">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap header_corporate">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
              data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth"
              data-xl-layout="rd-navbar-fullwidth" data-xxl-layout="rd-navbar-fullwidth"
              data-device-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed"
              data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fullwidth"
              data-xl-device-layout="rd-navbar-fullwidth" data-xxl-device-layout="rd-navbar-fullwidth"
              data-stick-up-offset="100px">
              <!--RD Navbar Panel-->
              <div class="rd-navbar-top-panel">
                  <div class="rd-navbar-top-panel-wrap">
                      {{-- <dl class="dl-horizontal-mod-1 login"> --}}
                      {{-- <dt><span class="mdi mdi-login icon-xxs-mod-2"></span></dt>
                          <dd><a class="text-sushi" href="login.html"> Login/Registration</a></dd> --}}
                      {{-- </dl> --}}
                      <div class="top-panel-inner">
                          <dl class="dl-horizontal-mod-1">
                              <dt><span class="material-icons-local_phone icon-xxs-mod-2"></span></dt>
                              <dd><a href="tel://01988806470"> 01988806470</a></dd>
                          </dl>
                          <dl class="dl-horizontal-mod-1">
                              <dt><span class="material-icons-drafts icon-xxs-mod-2"></span></dt>
                              <dd><a href="mailto://assortproperties@gmail.com">assortproperties@gmail.com</a></dd>
                          </dl>
                          <address>
                              <dl class="dl-horizontal-mod-1">
                                  <dt>&nbsp;</dt>
                                  <dd>
                                      <a class="inset-11" href="#">House-262/1 (3rd floor),
                                          Road No-10/A, West Dhanmondi,Dhaka-120</a>
                                  </dd>
                              </dl>
                          </address>
                      </div>
                      <ul class="list-inline">
                          <li><a class="fa-facebook" href="#"></a></li>
                          <li><a class="fa-twitter" href="#"></a></li>
                          <li><a class="fa-pinterest-p" href="#"></a></li>
                      </ul>
                      <div class="btn-group">
                          <a class="btn btn-sm btn-primary" href="submit-property.html">Submit
                              Property</a>
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row justify-content-center align-items-center g-2">
                      <div class="col-md-3">
                          <div class="rd-navbar-inner inner-wrap p-0">
                              <div class="rd-navbar-panel p-0 ">
                                  <!-- RD Navbar Toggle-->
                                  <button class="rd-navbar-toggle"
                                      data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                  <!-- RD Navbar Brand-->
                                  <div class="rd-navbar-brand p-0">
                                      <a class="brand-name" href="{{ route('home') }}">
                                          <img class="p-2 d-none d-md-block" src="{{ asset('assets/img/logo.png') }}"
                                              alt="" style="height:120px;" />
                                          <img class="pt-1 d-md-none d-block"
                                              src="{{ asset('assets/img/logo-sm.png') }}" alt="" />
                                      </a>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <div class="col-md-9">
                          <div class="rd-navbar-nav-wrap">
                              @include('layouts.navigation')
                          </div>
                      </div>
                  </div>

              </div>

          </nav>
      </div>
  </header>
