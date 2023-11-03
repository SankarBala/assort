 <!-- Page Footer-->
 <footer class="page-foot text-start bg-gray mt-4">
     <section class="footer-content">
         <div class="container-fluid">
             <div class="row flow-offset-3">
                 <div class="col-12 col-md-6 col-xl-3">
                     <div class="rd-navbar-brand"><a class="brand-name" href="{{ route('home') }}"><img
                                 src="{{ asset('assets/img/footer-logo.png') }}" alt=""></a></div>
                     <p>Have you planned a big surprise for your family yet? An exclusive apartment project of Assort
                         Properties Ltd.</p>

                 </div>

                 <div class="col-12 col-md-6 col-xl-3">
                     <h6 class="text-ubold">Contact Us</h6>
                     {{-- <h6 class="text-ubold text-primary text-uppercase">{{ env('APP_NAME') }}</h6> --}}
                     <address class="address">
                         <dl>
                             <dt><span class="text-white">Head Office:</span></br>
                                 Assort Properties Ltd Address: House-262/1 (3rd floor), Road No-10/A,West
                                 Dhanmondi,Dhaka-1209</dd>
                         </dl>

                         <dl class="dl-horizontal-mod-1">
                             <dt>Phone</dt>
                             <dd><a class="text-primary" href="tel://+88-02-48112253">+88-02-48112253</a></dd>
                         </dl>
                         <dl class="dl-horizontal-mod-1">
                             <dt>Mobile</dt>
                             <dd><a class="text-primary" href="tel://+880198880647">+8801988806471</a></dd>
                         </dl>
                         <dl class="dl-horizontal-mod-1">
                             <dt style="width:45px">&nbsp;</dt>
                             <dd><a class="text-primary" href="tel://+8801988806472">+8801988806472</a></dd>
                         </dl>
                         <dl class="dl-horizontal-mod-1">
                             <dt>Email</dt>
                             <dd><a class="text-primary"
                                     href="mailto://assortproperties@gmail.com">assortproperties@gmail.com</a></dd>
                         </dl>
                         <dl class="dl-horizontal-mod-1">
                             <dt>Web</dt>
                             <dd><a class="text-primary" href="{{ route('home') }}">{{ route('home') }}</a></dd>
                         </dl>
                     </address>
                 </div>

                 <div class="col-12 col-md-6 col-xl-3">
                     <h6 class="text-ubold">Membership</h6>
                     <ul class="">
                         <li id="text-11" class="widget-container widget_text list-unstyled">
                             <div class="textwidget">
                                 <p>
                                     <a
                                         href="https://www.rehab-bd.org/index.php?page=member_details&amp;companyID=1648/2022">
                                         <img decoding="async" loading="lazy" class="alignnone wp-image-19166"
                                             src="{{ asset('assets/img/rehab.png') }}" alt=""
                                             width="188" height="27" sizes="(max-width: 188px) 100vw, 188px"></a>
                                 </p>
                                 <p>
                                     <a href="http://www.rajuk.gov.bd/">
                                         <img decoding="async" loading="lazy" class="alignnone wp-image-19167"
                                             src="{{ asset('assets/img/rajuk.png') }}" alt=""
                                             width="188" height="27"></a>
                                 </p>

                             </div>
                         </li>
                     </ul>
                 </div>
                 <div class="col-12 col-md-6 col-xl-3">
                     <h6 class="text-ubold">Location</h6>
                     <iframe
                         src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d69499.07517384295!2d90.39071989291006!3d23.72614562071176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAssort%20Properties%20Ltd%20Address%3A%20House-262%2F1%2C%20Road%20No-10%2FA%2CWest%20Dhanmondi%2CDhaka-1209!5e0!3m2!1sen!2sbd!4v1698957922686!5m2!1sen!2sbd"
                         width="" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>

             </div>
         </div>
     </section>
     <section class="copyright">
         <div class="container">
             <div class="row row-30 justify-content-between">
                 <div class="col-md-auto">
                     <h6>&copy; All Rights Reserved by&nbsp;<a class="text-primary text-uppercase"
                             href="{{ route('home') }}">{{ env('APP_NAME') }}</a></h6>
                 </div>
                 <div class="col-md-auto">
                     <h6>Developed By&nbsp;&nbsp;&nbsp;<a class="text-primary text-uppercase" target="_blank"
                             href="{{ url('https://sankarbala.github.io') }}">Sankar Bala</a></h6>
                 </div>
             </div>
         </div>
     </section>
 </footer>
