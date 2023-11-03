@extends('layouts.app')

@section('content')
    <main class="page-content text-start">
        <section class="section-full pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Buy or Sale Flat</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="text-dark">
                    <h2>Flat Buy/Sale</h2>
                    <hr />
                    <br />
                    Dear sir,<br />
                    Thank you very much for visiting our website.<br />
                    Assort Properties LTD is an established organization in the Real Estate sector and believes in ‘Best
                    Product’,
                    ‘Best Commitment’, ‘Best Friendship’, ‘Best Service’.<br />
                    Now, Assort Properties LTD has become your trusted friend.<br />
                    To buy/sell any flat, please insert the information in the below box.<br><br>
                    <div class="mamb_add">
                        <form name="form1" method="POST" enctype="multipart/form-data" action="{{ route('flat-buy-sale') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-2">
                                    <font size="3" color="#808080"><b>Client Name</b></font>
                                    <font color="red">*</font>
                                </div>
                                <div class="col-sm-10"><input name="name" type="text" class="form-control"
                                        placeholder="" value="" maxlength="150" required></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <font size="3" color="#808080"><b>Client Phone</b></font>
                                    <font color="red">*</font>
                                </div>
                                <div class="col-sm-10"><input name="phone" type="text" class="form-control"
                                        placeholder="" value="" maxlength="100" required></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <font size="3" color="#808080"><b>Flat Location</b></font>
                                </div>
                                <div class="col-sm-10">
                                    <textarea name="address" class="form-control" rows="5" placeholder="" maxlength="200"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <font size="3" color="#808080"><b>Flat Size</b></font>
                                </div>
                                <div class="col-sm-10"><input name="flat_size" type="text" class="form-control"
                                        placeholder="" value="" maxlength="250"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10"><button type="submit" name="action" value="Submit"
                                        class="btn btn-primary btn-block" style="width: 200px"><i
                                            class="fas fa-plus-circle"></i>
                                        SUBMIT</button></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
