@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_edit">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../admin-add/index.html">Add Admin</a></li>
                <li class="breadcrumb-item"><a href="../../admin-list/index.html">Admin List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin Edit</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-edit"></i> Admin Edit</div><!--/.card-header-->
            <div class="card-body">




                <form name="form1" method="POST" action="#">

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Admin Level</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="admin_level_id" class="form-control">
                                <option value="1" Selected>Super Admin</option>
                                <option value="2">Normal Admin</option>
                                <option value="3">Administrator</option>
                                <option value="4">Editor</option>
                                <option value="5">Author</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Name</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="admin_name" class="form-control" id="text"
                                placeholder="" value="Engr. Md. Jahid"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Address</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="admin_address" class="form-control" rows="2">262/1(3rd floor), Road# 10/A, West Dhanmondi, Dhaka -1209</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>City</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="location_id" class="form-control">
                                <option value="44">Bagerhat</option>
                                <option value="25">Bandarban</option>
                                <option value="20">Barguna</option>
                                <option value="13">Barisal</option>
                                <option value="21">Bhola</option>
                                <option value="12">Bogra</option>
                                <option value="26">Brahmanbaria</option>
                                <option value="27">Chandpur</option>
                                <option value="2">Chapai Nawabganj</option>
                                <option value="7">Chittagong</option>
                                <option value="45">Chuadanga</option>
                                <option value="28">Comilla</option>
                                <option value="19">Coxs Bazar</option>
                                <option value="3" Selected>Dhaka</option>
                                <option value="58">Dinajpur</option>
                                <option value="34">Faridpur</option>
                                <option value="29">Feni</option>
                                <option value="59">Gaibandha</option>
                                <option value="6">Gazipur</option>
                                <option value="35">Gopalganj</option>
                                <option value="66">Habiganj</option>
                                <option value="15">Jamalpur</option>
                                <option value="5">Jessore</option>
                                <option value="22">Jhalokati</option>
                                <option value="46">Jhenaidah</option>
                                <option value="52">Joypurhat</option>
                                <option value="30">Khagrachhari</option>
                                <option value="4">Khulna</option>
                                <option value="9">Kishoreganj</option>
                                <option value="60">Kurigram</option>
                                <option value="47">Kushtia</option>
                                <option value="31">Lakshmipur</option>
                                <option value="61">Lalmonirhat</option>
                                <option value="37">Madaripur</option>
                                <option value="48">Magura</option>
                                <option value="16">Manikganj</option>
                                <option value="67">Maulvibazar</option>
                                <option value="49">Meherpur</option>
                                <option value="38">Munshiganj</option>
                                <option value="17">Mymensingh</option>
                                <option value="53">Naogaon</option>
                                <option value="50">Narail</option>
                                <option value="39">Narayanganj</option>
                                <option value="40">Narsingdi</option>
                                <option value="54">Natore</option>
                                <option value="41">Netrakona</option>
                                <option value="62">Nilphamari</option>
                                <option value="32">Noakhali</option>
                                <option value="10">Pabna</option>
                                <option value="63">Panchagarh</option>
                                <option value="23">Patuakhali</option>
                                <option value="24">Pirojpur</option>
                                <option value="14">Rajbari</option>
                                <option value="1">Rajshahi</option>
                                <option value="33">Rangamati</option>
                                <option value="64">Rangpur</option>
                                <option value="51">Satkhira</option>
                                <option value="69">Savar</option>
                                <option value="42">Shariatpur</option>
                                <option value="43">Sherpur</option>
                                <option value="57">Sirajganj</option>
                                <option value="68">Sunamganj</option>
                                <option value="11">Sylhet</option>
                                <option value="18">Tangail</option>
                                <option value="65">Thakurgaon</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Phone</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="admin_phone" class="form-control"
                                id="text" placeholder="" value="01711237957"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Email</b></font>
                        </div>
                        <div class="col-sm-10"><input type="email" name="admin_email" class="form-control"
                                id="text" placeholder="" value="jahid2172@gmail.com" required></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Password</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="admin_password" class="form-control"
                                id="text" placeholder="" value="6b968ef73adf295ed22e7c33d21ed967" required></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Status</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="status" value="1" checked>
                            <font color="green"><b>Active</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="status" value="0">
                            <font color="#B8860B"><b>Inactive</b></font>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><button type="submit" name="update" value="Submit"
                                class="btn btn-primary btn-block" style="width: 150px"><i class="fas fa-edit"></i>
                                UPDATE</button></div>
                    </div>

                </form>

            </div><!--./card-body\-->
        </div><!--./card\-->

        <a href="../../admin-add/index.html">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="../../admin-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="../../admin-details/1/index.html">
            <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i> Details</button>
        </a>

        <a href="../../admin-photo/1/index.html">
            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i> Photo</button>
        </a>

    </div>
@endsection
