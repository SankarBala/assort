@extends('admin.layouts.app')

@section('content')
    <div class="container mamb_edit">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../../project-add/index.html">Add Project</a></li>
                <li class="breadcrumb-item"><a href="../../project-list/index.html">Project List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Edit</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-edit"></i> Project Edit</div><!--/.card-header-->
            <div class="card-body">

                <form name="form1" method="POST" action="#">

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Type Name</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="project_type_id" class="form-control">
                                <option value="3">Handover Project</option>
                                <option value="1">Ongoing Projects</option>
                                <option value="4">Ready Flat</option>
                                <option value="2" Selected>Upcoming Projects</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Name</b></font>
                            <font color="red">*</font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="project_name" class="form-control" id="text"
                                placeholder="" value="Assort Hafsha Manor" required></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Address</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="project_address" class="form-control" rows="2">Modhubazar</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>City</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="location_id" class="form-control" id="CityIdEdit">
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
                            <font size="3" color="#808080"><b>Area</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="area_id" class="form-control" id="AreaIdEdit">
                                <option value="9">Aftabnagar</option>
                                <option value="3">Banani</option>
                                <option value="5">Bashundhara</option>
                                <option value="13">Dhanmondi</option>
                                <option value="1">Gulshan</option>
                                <option value="6">Khilghaon</option>
                                <option value="12">Maniknagor</option>
                                <option value="7">Mirpur</option>
                                <option value="4">Niketon</option>
                                <option value="10">Rayer Bazar</option>
                                <option value="8">Razabazar</option>
                                <option value="2">Uttara</option>
                                <option value="11" Selected>West Dhanmondi</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Zip Code</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="zip_code" class="form-control"
                                id="text" placeholder="" value="0"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Country</b></font>
                        </div>
                        <div class="col-sm-10">
                            <select name="country_id" class="form-control" id="CountryId">
                                <option value="1" Selected>Bangladesh</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Flat Size</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="project_flat_size" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Parking</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="project_parking" class="form-control"
                                id="text" placeholder="" value=""></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Height</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="project_height" class="form-control"
                                id="text" placeholder="" value=""></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Lift</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="project_lift" class="form-control"
                                id="text" placeholder="" value=""></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Substation</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="project_substation" value="1">
                            <font color="green"><b>YES</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="project_substation" value="0" checked>
                            <font color="red"><b>NO</b></font>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Generator</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="project_generator" value="1">
                            <font color="green"><b>YES</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="project_generator" value="0" checked>
                            <font color="red"><b>NO</b></font>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Unit</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="project_unit" class="form-control"
                                id="text" placeholder="" value=""></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Hand Over</b></font>
                        </div>
                        <div class="col-sm-10"><input type="text" name="project_hand_over" class="form-control"
                                id="text" placeholder="" value=""></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Details</b></font>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="project_details" class="form-control" rows="10">Dhaka-1209</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <font size="3" color="#808080"><b>Featured</b></font>
                        </div>
                        <div class="col-sm-10">
                            <input type="radio" name="featured" value="1">
                            <font color="green"><b>YES</b></font>&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="featured" value="0" checked>
                            <font color="red"><b>NO</b></font>
                        </div>
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

        <a href="../../project-add/index.html">
            <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button>
        </a>

        <a href="../../project-list/index.html">
            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> List</button>
        </a>

        <a href="../../project-details/1/index.html">
            <button type="button" class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i> Details</button>
        </a>

        <a href="../../project-photo/1/index.html">
            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i> Photo</button>
        </a>

    </div>
@endsection
