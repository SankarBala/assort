@extends('layouts.app')

@section('content')
    <main class="page-content text-start">
         <section class="section-full pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Land Wanted</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="text-dark">
                    <h2>Land Wanted</h2>
                    <hr />
                    <br />

                    Dear Sir,<br />
                    Thank you very much for visiting Assort Properties LTD’s website.<br />
                    Assort Properties LTD is an established and experienced organization in Real Estate sector on basis of
                    Timely
                    Handover, Best Quality, Best Product, Best Commitment, Best Friendship and Best Service.<br />
                    As for aforesaid reason, your valuable land and its flat’s price and demand will be enhanced logically
                    that will
                    lead you in financial benefit; as we utilize the maximum potentiality of your land.<br />
                    Therefore, please, insert the information on below box:<br><br>

                    <div class="mamb_add">
                        <form name="form1" method="POST" enctype="multipart/form-data"
                            action="{{ route('store-land-wanted') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-2">
                                    <font size="3" color="#808080"><b>Landowner Name</b></font>
                                    <font color="red">*</font>
                                </div>
                                <div class="col-sm-10"><input name="name" type="text" class="form-control"
                                        placeholder="" value="" maxlength="150" required></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <font size="3" color="#808080"><b>Landowner Phone</b></font>
                                    <font color="red">*</font>
                                </div>
                                <div class="col-sm-10"><input name="phone" type="text" class="form-control"
                                        placeholder="" value="" maxlength="100" required></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <font size="3" color="#808080"><b>Land Address</b></font>
                                </div>
                                <div class="col-sm-10">
                                    <textarea name="address" class="form-control" rows="5" placeholder="" maxlength="200"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <font size="3" color="#808080"><b>Land Area</b></font>
                                </div>
                                <div class="col-sm-10"><input name="land_area" type="text" class="form-control"
                                        placeholder="" value="" maxlength="250"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <font size="3" color="#808080"><b>Road Width</b></font>
                                </div>
                                <div class="col-sm-10"><input name="road_width" type="text" class="form-control"
                                        placeholder="" value="" maxlength="250"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" name="action" value="Submit" class="btn btn-primary btn-block"
                                        style="width: 200px"><i class="fas fa-plus-circle"></i>
                                        SUBMIT</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
