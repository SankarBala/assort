@extends('layouts.app')

@section('content')
    <main class="page-content text-start">
        @include('layouts.breadcrumb')
        <section class="section-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>Contact Us</h2>
                        <hr>
                        <p>Assort Properties Ltd. Have you planned a big surprise for your family yet? An exclusive
                            apartment project of Assort Properties Ltd.</p>

                        <p>Always fell free to contact us.</p>
                        <form class="rd-mailform text-start offset-custom-11" data-form-output="form-output-global"
                            data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-name">Your name</label>
                                        <input class="form-input" id="contact-name" type="text" name="name"
                                            data-constraints="@@Required">
                                    </div>
                                </div>
                                <div class="col-md-6 input-mod-1">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-phone">Your phone</label>
                                        <input class="form-input" id="contact-phone" type="text" name="phone"
                                            data-constraints="@@Required @@Numeric">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-email">Your e-mail</label>
                                        <input class="form-input" id="contact-email" type="email" name="email"
                                            data-constraints="@@Required @@Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message">Message</label>
                                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@@Required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-sushi btn-sm" type="submit">Send message</button>
                        </form>
                    </div>
                    <div class="col-lg-4 offset-custom-7">
                        <div class="row row-mod-1 flow-offset-6 sidebar text-md-center text-lg-start">

                            <div class="col-12 col-md-6 col-lg-12">
                                <address class="address"><span class="h4 border-bottom">Address</span>
                                    <p>House-262/1 (3rd floor),
                                        Road No-10/A, West Dhanmondi,Dhaka-1209</p>
                                </address>
                            </div>
                            <div class="col-12 col-md-4 col-lg-12">
                                <dl class="contact-info">
                                    <dt><span class="h4 border-bottom">Phone</span></dt>
                                    <dd>
                                        <a class="text-light-custom" href="tel://+880248112253"> +88-02-48112253<br></a>
                                        <a class="text-light-custom" href="tel://+8801988806471">+8801988806471<br></a>
                                        <a class="text-light-custom" href="tel://+8801988806472">+8801988806472</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-12 col-md-4 col-lg-12">
                                <dl class="contact-info">
                                    <dt><span class="h4 border-bottom">E-mail</span></dt>
                                    <dd><a class="text-sushi"
                                            href="mailto://assortproperties@gmail.com">assortproperties@gmail.com</a></dd>
                                </dl>
                            </div>
                            <div class="col-12 col-md-4 col-lg-12">
                                <h4 class="border-bottom">Follow Us</h4>
                                <div class="icon-group">
                                    <a class="icon icon-sm icon-social fa-facebook" href="#"></a>
                                    <a class="icon icon-sm icon-social fa-twitter" href="#"></a>
                                    <a class="icon icon-sm icon-social fa-google-plus" href="#"></a>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-12">
                                <h4 class="border-bottom">Open Hours</h4>
                                <p>9:00 AM - 6:00 PM (Sat - Thu)</p>
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

@section('breadcrumbs')
    <li><a href="index.html">Home</a></li>
    <li><a href="#">Pages</a></li>
    <li class="active">Contact Us</li>
@endsection
