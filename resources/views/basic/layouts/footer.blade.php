<footer id="footer" class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-3 footer-widget footer-about">

                    <a href="{{ route('home') }}" title="Assort Properties Ltd"><img loading="lazy" class="footer-logo"
                            src="{{ asset('images/logo.png') }}" alt="Assort Properties Ltd"></a>
                    <p><i class="fas fa-building"></i> <b title="Assort Properties Ltd">Assort Properties Ltd</b>. Have
                        you
                        planned a big surprise for your family yet? An exclusive apartment project of Assort Properties
                        Ltd.

                </div>


                <div class="col-lg-6 col-md-6 footer-widget mt-5 mt-md-0">
                    <h3 class="widget-title">Contact Us</h3>
                    <div class="contact">
                        <font size="5" title="Assort Properties Ltd"><b>Assort Properties Ltd</b></font><br>
                        <i class="fas fa-map-marker-alt"></i> <b>Address:</b> House-262/1 (3rd floor),<br>Road
                        No-10/A,West
                        Dhanmondi,Dhaka-1209<br>
                        <i class="fas fa-mobile-alt"></i> <b>Mobile:</b> +8801988806471, +8801988806472<br>
                        <i class="fa fa-phone"></i> <b>Phone:</b> +88-02-48112253<br>
                        <i class="fa fa-envelope"></i> <b>Email:</b> <a href="mailto:assortproperties@gmail.com"
                            title="assortproperties@gmail.com">{{ $site->email }}</a><br>
                        <i class="fa fa-globe"></i> <b>Web:</b> <a href="{{ $site->link }}"
                            title="{{ $site->name }}">{{ $site->link }}</a>
                    </div>
                    <div class="footer-social">
                        <ul>
                            <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" aria-label="Youtube"><i class="fab fa-youtube"></i></a></li>

                        </ul>
                    </div>
                </div>


                <div class="widget-area col-md-3">
                    <ul class="xoxo">
                        <li id="text-11" class="widget-container widget_text list-unstyled">
                            <h3 class="widget-title-footer">Members</h3>
                            <div class="textwidget">
                                <p>
                                    <a href="https://www.rehab-bd.org/index.php?page=member_details&amp;companyID=">
                                        <img decoding="async" loading="lazy" class="alignnone wp-image-19166"
                                            src="{{asset('frontend/images/rehab.png')}}"
                                            alt="" width="188" height="27"
                                            sizes="(max-width: 188px) 100vw, 188px"></a>
                                </p>
                                <p>
                                    <a href="http://www.rajuk.gov.bd/">
                                        <img decoding="async" loading="lazy" class="alignnone wp-image-19167"
                                            src="{{asset('frontend/images/rajuk.png')}}"
                                            alt="" width="188" height="27"></a>
                                </p>

                            </div>
                        </li>
                    </ul>
                </div>


                <!-- Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright-info">
                        <span>Copyright &copy; 2023 <a href="{{ $site->link }}" title="Assort Properties Ltd">Assort
                                Properties
                                Ltd</a></span>
                    </div>
                </div>

                <!-- <div class="col-md-6">
        <div class="footer-menu text-center text-md-right">
          <ul class="list-unstyled mb-0">
            <li><a class="text-dark" href="https://assortpropertiesltd.com/privacy-policy/" title="Privacy Policy">Privacy Policy</a></li>
            <li><a class="text-dark" href="https://assortpropertiesltd.com/terms-of-use/" title="Terms of Use">Terms of Use</a></li>
          </ul>
        </div>
      </div> -->
            </div><!-- Row end -->

            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">

                <a class="btn btn-primary" title="Back to Top" href="#Top">
                    <i class="fa fa-angle-double-up"></i>

                </a>
            </div>

        </div><!-- Container end -->
    </div><!-- Copyright end -->
</footer>
