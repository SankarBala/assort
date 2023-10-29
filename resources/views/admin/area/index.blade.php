@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../area-add/index.html">Add Area</a></li>
                <li class="breadcrumb-item active" aria-current="page">Area List</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Area List (13)</div><!--/.card-header-->
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
                                    <center>City</center>
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
                                    <center>City</center>
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
                                <td align="center" width="8%">13</td>

                                <td>Dhanmondi</td>

                                <td>dhanmondi</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/13/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/13/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">12</td>

                                <td>Maniknagor</td>

                                <td>maniknagor</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/12/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/12/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">11</td>

                                <td>West Dhanmondi</td>

                                <td>west-dhanmondi</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/11/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/11/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">10</td>

                                <td>Rayer Bazar</td>

                                <td>rayer-bazar</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/10/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/10/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">9</td>

                                <td>Aftabnagar</td>

                                <td>aftabnagar</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/9/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/9/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">8</td>

                                <td>Razabazar</td>

                                <td>razabazar</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/8/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/8/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">7</td>

                                <td>Mirpur</td>

                                <td>mirpur</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/7/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/7/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">6</td>

                                <td>Khilghaon</td>

                                <td>khilghaon</td>

                                <td>
                                    <a href="../areas/1.html" title="">
                                        Rajshahi</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/6/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/6/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">5</td>

                                <td>Bashundhara</td>

                                <td>bashundhara</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/5/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/5/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">4</td>

                                <td>Niketon</td>

                                <td>niketon</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/4/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/4/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">3</td>

                                <td>Banani</td>

                                <td>banani</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/3/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/3/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">2</td>

                                <td>Uttara</td>

                                <td>uttara</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/2/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/2/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">1</td>

                                <td>Gulshan</td>

                                <td>gulshan</td>

                                <td>
                                    <a href="../areas/3.html" title="">
                                        Dhaka</a>
                                </td>

                                <td align="center" width="8%">
                                    <font color='green'>Active</font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../area-details/1/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../area-edit/1/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--table-responsive-->

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="../area-add/index.html"><button type="button" class="btn btn-outline-primary btn-sm"><i
                    class="fas fa-plus-circle"></i> Add</button></a>

    </div>
@endsection
