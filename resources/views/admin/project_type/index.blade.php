@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="../project-type-add/index.html">Add Project Type</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Type List</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header text-center"><i class="fas fa-list"></i> Project Type List (4)</div><!--/.card-header-->
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

                                <td align="center" width="8%">4</td>

                                <td>Ready Flat</td>

                                <td>ready-flat-1627281658</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../project-type-details/4/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../project-type-edit/4/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>

                            </tr>


                            <tr>

                                <td align="center" width="8%">3</td>

                                <td>Handover Project</td>

                                <td>handover-project</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../project-type-details/3/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../project-type-edit/3/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>

                            </tr>


                            <tr>

                                <td align="center" width="8%">2</td>

                                <td>Upcoming Projects</td>

                                <td>upcoming-projects</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../project-type-details/2/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../project-type-edit/2/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>

                            </tr>


                            <tr>

                                <td align="center" width="8%">1</td>

                                <td>Ongoing Projects</td>

                                <td>ongoing-projects</td>

                                <td align="center" width="8%">
                                    <font color='green'><b>Active</b></font>
                                </td>
                                <td align="center" width="25%">

                                    <a href="../project-type-details/1/index.html"><button type="button"
                                            class="btn btn-outline-dark btn-sm"><i class="fas fa-chart-area"></i>
                                            Details</button></a>

                                    <a href="../project-type-edit/1/index.html"><button type="button"
                                            class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i>
                                            Edit</button></a>

                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div><!--table-responsive-->

            </div><!--/.card-body-->
        </div><!--/.card-->

        <a href="../project-type-add/index.html"><button type="button" class="btn btn-outline-primary btn-sm"><i
                    class="fas fa-plus-circle"></i> Add</button></a>

    </div>
@endsection
