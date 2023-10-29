  @extends('admin.layouts.app')

  @section('content')
      <div class="container">

          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="http://localhost/assortpropertiesltd.com/admin">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="../../project-list/index.html">Project List</a></li>
                  <li class="breadcrumb-item"><a href="../../project-photo-more/1/index.html">Project Photo More</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Delete</li>
              </ol>
          </nav>

          <div class="card shadow mb-4">
              <div class="card-header text-center"><span class="badge badge-light">
                      <font size="3"><i class="fas fa-trash-alt"></i>&nbsp; Delete</font>
                  </span></div><!--/.card-header-->
              <div class="card-body">





                  <div class="mamb-form">

                      <form name="form1" method="POST" action="#">

                          <div class="row">
                              <div class="col-sm-2">
                                  <font size="3" color="#808080"><b>Delete</b></font>
                              </div>
                              <div class="col-sm-10">

                                  <h2>
                                      <font size="5" color="green"><b>Assort Hafsha Manor</b></font>
                                  </h2><br>

                                  <img src='../../../images/projects/1629369776-hafsa1.jpg'
                                      class='rounded img-responsive img-fluid' style='width:200px;'>
                                  <br><br>

                                  <h3>
                                      <font size="5" color="#FF4500"><b>Want to delete Assort Hafsha Manor?</b></font>
                                  </h3><br>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-sm-2">&nbsp;</div>
                              <div class="col-sm-8">
                                  <!-- <button type="submit" name="update" value="Submit" class="btn btn-danger btn-block" style="width: 150px"><b>DELETE</b> -->
                                  <button type="submit" name="delete" value="Submit" class="btn btn-danger btn-block"
                                      style="width: 180px"><b><i class="fas fa-trash-alt"></i>&nbsp; DELETE NOW</b></button>
                              </div>
                          </div>

                      </form>
                  </div>

                  <br>

                  <div class="alert alert-warning" role="alert">
                      <font color="#FF0000"> <b>Warning:</b></font>
                      <font>If you click the "Delete Now" button then this admin (Assort Hafsha Manor) will be deleted from
                          the database and you can't restore the information of this admin (Assort Hafsha Manor) after
                          deleting. So, please be careful before taking action.</font>
                  </div><!--.alert .alert-warning-->


              </div><!--./card-body\-->
          </div><!--./card\-->

          <a href="../../project-list/index.html">
              <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list"></i> Project
                  List</button>
          </a>

          <a href="../../project-photo-more/1/index.html">
              <button type="button" class="btn btn-outline-success btn-sm"><i class="fas fa-image"></i> More Photo</button>
          </a>
      </div>
  @endsection
