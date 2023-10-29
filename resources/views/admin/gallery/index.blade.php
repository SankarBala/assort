@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../gallery-photo-add/index.html">Add Gallery Photo</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery Photo List</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Gallery Photo List (11)</div>
            <!--/.card-header-->
            <div class="card-body">



                <form class="form-inline mr-auto" method="POST" action="#">

                    <input class="form-control" type="text" placeholder="search by id / title " aria-label="Search"
                        name="search" value="" style="width:550px; border: 1px solid #e1e1e1;">
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
                                    <center>Photo</center>
                                </th>
                                <th>
                                    <center>Gallery Title</center>
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
                                    <center>Photo</center>
                                </th>
                                <th>
                                    <center>Gallery Title</center>
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
                                <td align="center" width="8%">11</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1698424051-search1.jpg'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>sdfsa</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/11/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/11/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/11/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">10</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1661688248-5.html'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Key plan</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/10/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/10/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/10/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">9</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1661688182-3.html'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Perspective view</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/9/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/9/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/9/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">8</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1698343183_technologistsankarbanner.png'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Front view</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/8/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/8/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/8/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">7</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1629631289_vvv.jpg'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Assort Abeda Castle</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/7/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/7/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/7/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">6</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1661688597_3.html'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Assort Masallah Tower</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/6/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/6/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/6/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">5</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1629104875-hafsa.jpg'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Assort Hafsa Manor</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/5/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/5/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/5/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">4</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1629104760-cam%2002%20copy.jpg'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Assort Khaled Homes</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/4/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/4/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/4/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">3</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1628589756_3.jpg'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Assort Kiron Vila</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/3/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/3/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/3/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">2</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1628589491_53543281_781194822263216_4350819793746526208_n.jpg'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Noor Castle</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/2/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/2/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/2/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>

                            <tr>
                                <td align="center" width="8%">1</td>

                                <td align="center" width="12%">
                                    <img src='../../images/gallery/1628589412_jpg-3.jpg'
                                        class='rounded img-responsive img-fluid' style='width:80px;'>
                                </td>

                                <td>Assort Sahera Homes</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../gallery-photo-details/1/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../gallery-photo-edit/1/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                    <a href="../gallery-photo-upload/1/index.html"><button type="button"
                                            class="btn btn-outline-warning btn-sm"><i class="fas fa-image"></i>
                                            Photo</button></a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--table-responsive-->

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="../gallery-photo-add/index.html"><button type="button" class="btn btn-outline-primary btn-sm"><i
                    class="fas fa-plus-circle"></i> Add</button></a>

    </div>
@endsection
