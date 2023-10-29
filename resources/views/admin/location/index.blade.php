@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <!-- <li class="breadcrumb-item"><a href="/city-add/">Add City</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">City List</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> City List (65)</div><!--/.card-header-->
            <div class="card-body">



                <form class="form-inline mr-auto" method="POST" action="#">

                    <input class="form-control" type="text" placeholder="search by id / name / phone / email "
                        aria-label="Search" name="search" value="" style="width:550px; border: 1px solid #e1e1e1;">
                    &nbsp;
                    <button class="btn btn-danger btn-sm" type="submit">Search</button>

                </form>
                <br>


                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr class="table-secondary">
                                <th>
                                    <center>ID</center>
                                </th>
                                <th>
                                    <center>Name</center>
                                </th>
                                <th>
                                    <center>Slug</center>
                                </th>
                                <th>
                                    <center>Status</center>
                                </th>
                                <th>
                                    <center>Actions</center>
                                </th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr class="table-secondary">
                                <th>
                                    <center>ID</center>
                                </th>
                                <th>
                                    <center>Name</center>
                                </th>
                                <th>
                                    <center>Slug</center>
                                </th>
                                <th>
                                    <center>Status</center>
                                </th>
                                <th>
                                    <center>Actions</center>
                                </th>
                            </tr>
                        </tfoot>

                        <tbody>


                            <tr>
                                <td align="center" width="8%">69</td>

                                <td>Savar</td>

                                <td>savar</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/69/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/69/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/69/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">68</td>

                                <td>Sunamganj</td>

                                <td>sunamganj</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/68/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/68/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/68/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">67</td>

                                <td>Maulvibazar</td>

                                <td>maulvibazar</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/67/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/67/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/67/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">66</td>

                                <td>Habiganj</td>

                                <td>habiganj</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/66/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/66/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/66/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">65</td>

                                <td>Thakurgaon</td>

                                <td>thakurgaon</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/65/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/65/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/65/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">64</td>

                                <td>Rangpur</td>

                                <td>rangpur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/64/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/64/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/64/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">63</td>

                                <td>Panchagarh</td>

                                <td>panchagarh</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/63/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/63/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/63/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">62</td>

                                <td>Nilphamari</td>

                                <td>nilphamari</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/62/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/62/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/62/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">61</td>

                                <td>Lalmonirhat</td>

                                <td>lalmonirhat</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/61/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/61/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/61/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">60</td>

                                <td>Kurigram</td>

                                <td>kurigram</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/60/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/60/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/60/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">59</td>

                                <td>Gaibandha</td>

                                <td>gaibandha</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/59/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/59/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/59/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">58</td>

                                <td>Dinajpur</td>

                                <td>dinajpur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/58/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/58/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/58/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">57</td>

                                <td>Sirajganj</td>

                                <td>sirajganj</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/57/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/57/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/57/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">54</td>

                                <td>Natore</td>

                                <td>natore</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/54/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/54/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/54/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">53</td>

                                <td>Naogaon</td>

                                <td>naogaon</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/53/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/53/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/53/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">52</td>

                                <td>Joypurhat</td>

                                <td>joypurhat</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/52/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/52/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/52/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">51</td>

                                <td>Satkhira</td>

                                <td>satkhira</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/51/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/51/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/51/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">50</td>

                                <td>Narail</td>

                                <td>narail</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/50/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/50/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/50/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">49</td>

                                <td>Meherpur</td>

                                <td>meherpur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/49/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/49/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/49/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">48</td>

                                <td>Magura</td>

                                <td>magura</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/48/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/48/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/48/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">47</td>

                                <td>Kushtia</td>

                                <td>kushtia</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/47/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/47/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/47/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">46</td>

                                <td>Jhenaidah</td>

                                <td>jhenaidah</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/46/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/46/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/46/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">45</td>

                                <td>Chuadanga</td>

                                <td>chuadanga</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/45/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/45/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/45/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">44</td>

                                <td>Bagerhat</td>

                                <td>bagerhat</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/44/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/44/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/44/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">43</td>

                                <td>Sherpur</td>

                                <td>sherpur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/43/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/43/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/43/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">42</td>

                                <td>Shariatpur</td>

                                <td>shariatpur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/42/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/42/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/42/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">41</td>

                                <td>Netrakona</td>

                                <td>netrakona</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/41/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/41/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/41/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">40</td>

                                <td>Narsingdi</td>

                                <td>narsingdi</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/40/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/40/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/40/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">39</td>

                                <td>Narayanganj</td>

                                <td>narayanganj</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/39/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/39/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/39/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">38</td>

                                <td>Munshiganj</td>

                                <td>munshiganj</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/38/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/38/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/38/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">37</td>

                                <td>Madaripur</td>

                                <td>madaripur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/37/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/37/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/37/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">35</td>

                                <td>Gopalganj</td>

                                <td>gopalganj</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/35/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/35/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/35/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">34</td>

                                <td>Faridpur</td>

                                <td>faridpur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/34/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/34/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/34/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">33</td>

                                <td>Rangamati</td>

                                <td>rangamati</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/33/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/33/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/33/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">32</td>

                                <td>Noakhali</td>

                                <td>noakhali</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/32/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/32/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/32/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">31</td>

                                <td>Lakshmipur</td>

                                <td>lakshmipur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/31/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/31/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/31/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">30</td>

                                <td>Khagrachhari</td>

                                <td>khagrachhari</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/30/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/30/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/30/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">29</td>

                                <td>Feni</td>

                                <td>feni</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/29/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/29/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/29/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">28</td>

                                <td>Comilla</td>

                                <td>comilla</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/28/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/28/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/28/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">27</td>

                                <td>Chandpur</td>

                                <td>chandpur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/27/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/27/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/27/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">26</td>

                                <td>Brahmanbaria</td>

                                <td>brahmanbaria</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/26/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/26/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/26/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">25</td>

                                <td>Bandarban</td>

                                <td>bandarban</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/25/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/25/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/25/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">24</td>

                                <td>Pirojpur</td>

                                <td>pirojpur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/24/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/24/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/24/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">23</td>

                                <td>Patuakhali</td>

                                <td>patuakhali</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/23/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/23/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/23/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">22</td>

                                <td>Jhalokati</td>

                                <td>jhalokati</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/22/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/22/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/22/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">21</td>

                                <td>Bhola</td>

                                <td>bhola</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/21/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/21/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/21/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">20</td>

                                <td>Barguna</td>

                                <td>barguna</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/20/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/20/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/20/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">19</td>

                                <td>Coxs Bazar</td>

                                <td>coxs-bazar</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/19/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/19/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/19/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">18</td>

                                <td>Tangail</td>

                                <td>tangail</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/18/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/18/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/18/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">17</td>

                                <td>Mymensingh</td>

                                <td>mymensingh</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/17/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/17/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/17/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">16</td>

                                <td>Manikganj</td>

                                <td>manikganj</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/16/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/16/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/16/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">15</td>

                                <td>Jamalpur</td>

                                <td>jamalpur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/15/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/15/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/15/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">14</td>

                                <td>Rajbari</td>

                                <td>rajbari</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/14/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/14/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/14/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">13</td>

                                <td>Barisal</td>

                                <td>barisal</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/13/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/13/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/13/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">12</td>

                                <td>Bogra</td>

                                <td>bogra</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/12/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/12/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/12/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">11</td>

                                <td>Sylhet</td>

                                <td>sylhet</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/11/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/11/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/11/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">10</td>

                                <td>Pabna</td>

                                <td>pabna</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/10/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/10/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/10/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">9</td>

                                <td>Kishoreganj</td>

                                <td>kishoreganj</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/9/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/9/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/9/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">7</td>

                                <td>Chittagong</td>

                                <td>chittagong</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/7/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/7/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/7/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">6</td>

                                <td>Gazipur</td>

                                <td>gazipur</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/6/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/6/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/6/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">5</td>

                                <td>Jessore</td>

                                <td>jessore</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/5/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/5/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/5/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">4</td>

                                <td>Khulna</td>

                                <td>khulna</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/4/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/4/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/4/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">3</td>

                                <td>Dhaka</td>

                                <td>dhaka</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/3/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/3/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/3/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">2</td>

                                <td>Chapai Nawabganj</td>

                                <td>chapai-nawabganj</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/2/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/2/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/2/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>


                            <tr>
                                <td align="center" width="8%">1</td>

                                <td>Rajshahi</td>

                                <td>rajshahi</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../city-details/1/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../city-edit/1/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../areas/1/index.html"><button type="button"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-map-marker-alt"></i>
                                            Areas</button></a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--table-responsive-->

            </div><!--/.card-body-->
        </div><!--/.card-->

        <!-- <a href="/admin-add/"><button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i> Add</button></a> -->

    </div>
@endsection
