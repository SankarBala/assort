@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_add">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Admin</li>
                <li class="breadcrumb-item"><a href="/admin-list/index.html">Admin List</a></li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-plus-circle"></i> Add Admin</div><!--/.card-header-->
            <div class="card-body">



                <form name="form1" method="POST" enctype="multipart/form-data" action="#">

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Admin Level</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-control" name="admin_level_id" id="admin_level_id">
                                <option value=0>Select A Level</option>
                                <option value=1>Super Admin</option>
                                <option value=2>Normal Admin</option>
                                <option value=3>Administrator</option>
                                <option value=4>Editor</option>
                                <option value=5>Author</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Name</b></font>
                        </div>
                        <div class="col-sm-10"><input name="admin_name" type="text" class="form-control"
                                placeholder="enter name" value=""></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Address</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="admin_address" class="form-control" rows="2" placeholder="enter address"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>City</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-control" name="location_id" id="location_id">
                                <option value=0>Select A City</option>
                                <option value=44>Bagerhat</option>
                                <option value=25>Bandarban</option>
                                <option value=20>Barguna</option>
                                <option value=13>Barisal</option>
                                <option value=21>Bhola</option>
                                <option value=12>Bogra</option>
                                <option value=26>Brahmanbaria</option>
                                <option value=27>Chandpur</option>
                                <option value=2>Chapai Nawabganj</option>
                                <option value=7>Chittagong</option>
                                <option value=45>Chuadanga</option>
                                <option value=28>Comilla</option>
                                <option value=19>Coxs Bazar</option>
                                <option value=3>Dhaka</option>
                                <option value=58>Dinajpur</option>
                                <option value=34>Faridpur</option>
                                <option value=29>Feni</option>
                                <option value=59>Gaibandha</option>
                                <option value=6>Gazipur</option>
                                <option value=35>Gopalganj</option>
                                <option value=66>Habiganj</option>
                                <option value=15>Jamalpur</option>
                                <option value=5>Jessore</option>
                                <option value=22>Jhalokati</option>
                                <option value=46>Jhenaidah</option>
                                <option value=52>Joypurhat</option>
                                <option value=30>Khagrachhari</option>
                                <option value=4>Khulna</option>
                                <option value=9>Kishoreganj</option>
                                <option value=60>Kurigram</option>
                                <option value=47>Kushtia</option>
                                <option value=31>Lakshmipur</option>
                                <option value=61>Lalmonirhat</option>
                                <option value=37>Madaripur</option>
                                <option value=48>Magura</option>
                                <option value=16>Manikganj</option>
                                <option value=67>Maulvibazar</option>
                                <option value=49>Meherpur</option>
                                <option value=38>Munshiganj</option>
                                <option value=17>Mymensingh</option>
                                <option value=53>Naogaon</option>
                                <option value=50>Narail</option>
                                <option value=39>Narayanganj</option>
                                <option value=40>Narsingdi</option>
                                <option value=54>Natore</option>
                                <option value=41>Netrakona</option>
                                <option value=62>Nilphamari</option>
                                <option value=32>Noakhali</option>
                                <option value=10>Pabna</option>
                                <option value=63>Panchagarh</option>
                                <option value=23>Patuakhali</option>
                                <option value=24>Pirojpur</option>
                                <option value=14>Rajbari</option>
                                <option value=1>Rajshahi</option>
                                <option value=33>Rangamati</option>
                                <option value=64>Rangpur</option>
                                <option value=51>Satkhira</option>
                                <option value=69>Savar</option>
                                <option value=42>Shariatpur</option>
                                <option value=43>Sherpur</option>
                                <option value=57>Sirajganj</option>
                                <option value=68>Sunamganj</option>
                                <option value=11>Sylhet</option>
                                <option value=18>Tangail</option>
                                <option value=65>Thakurgaon</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Phone</b></font>
                        </div>
                        <div class="col-sm-10"><input name="admin_phone" type="text" class="form-control"
                                placeholder="017XXXXXXXX, 015XXXXXXXX" value=""></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Email</b></font>
                        </div>
                        <div class="col-sm-10"><input name="admin_email" type="email" class="form-control"
                                placeholder="example@gmail.com" value="" required></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Password</b></font>
                        </div>
                        <div class="col-sm-10"><input type="password" name="admin_password" class="form-control"
                                id="exampleInputPassword1" placeholder="***************" maxlength="100" required></div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Upload Photo</b></font>
                        </div>
                        <div class="col-sm-10"><input name="file_name" type="file" id="file_name"></div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><button type="submit" name="action" value="Submit"
                                class="btn btn-primary btn-block" style="width: 150px"><i class="fas fa-plus-circle"></i>
                                SUBMIT</button></div>
                    </div>

                </form>

                <font color="red">*</font> Required fields

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="/admin-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

    </div>
@endsection
