<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <li class="nav-item ">
          <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a> -->
          <div class="dropdown-toggle user-panel mt-3 pb-3 mb-3 d-flex" data-bs-toggle="dropdown">

            <style>
              .dropdown-toggle::after {
                display: inline-block;
                margin-left: 0.255em;
                vertical-align: 1.255em;
                content: "";
                border-top: .3em solid;
                border-right: .3em solid transparent;
                border-bottom: 0;
                border-left: .3em solid transparent;
                margin-top: 0.9em;
                color: white;
              }
            </style>

            <div class="image">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Shail Shah</a>
            </div>
          </div>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="/admin/dashboard" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/CounsellorDetails" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Counsellor Details
                </p>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a href="/admin/leaveApprove" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Leave Approval
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/AddUniversity" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Add University
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/UniversityList" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  University List
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row ">
            <div class="col-md-12">
              <h1>Add Counsellor</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Counsellor details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="createform" method="post">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <?php if (!empty($session1)) { ?>
                          <div class="alert alert-success">
                            <p> Data added </p>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Counsellor name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="name">Email</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="name">Join Date</label>
                          <input type="date" class="form-control" name="date">
                        </div>
                        <div class="form-group">
                          <label for="name">Commission percentage</label>
                          <input type="text" class="form-control" name="commission">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="phone number">Counsellor id</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="c_id" placeholder="Enter id">
                        </div>
                        <div class="form-group">
                          <label for="phone number">Phone number</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                          <label for="name">Salary</label>
                          <input type="text" class="form-control" name="salary" placeholder="Salary"></input>
                        </div>
                        <div class="form-group">
                          <label for="name">no of Leads</label>
                          <input type="text" class="form-control" name="leads" id="Succseeful Leads"></input>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Counsellor details Display</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Salary</th>
                            <th>join date</th>
                            <th>Commission percentage</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php if (!empty($details)) {
                              foreach ($details as $details) {
                            ?>


                          <tr>
                            <td><?php echo $details['c_id'];   ?></td>
                            <td><?php echo $details['name'];   ?></td>
                            <td><?php echo $details['email'];   ?></td>
                            <td><?php echo $details['phone'];   ?></td>
                            <td><?php echo $details['Salary'];   ?></td>
                            <td><?php echo $details['join_date'];   ?></td>
                            <td><?php echo $details['commission'];   ?></td>
                            <td>
                              <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Update</button>
                            </td>
                          </tr>
                        <?php }
                            } else { ?>
                        <tr colspan="8"> Records not found</tr>
                      <?php } ?>

                      </tr>

                        </tbody>

                      </table>
                    </div>
                    <!-- /.card-body -->


                              <tr>
                                <td>
                                  <?php echo $details['c_id']; ?>
                                </td>
                                <td>
                                  <?php echo $details['name']; ?>
                                </td>
                                <td>
                                  <?php echo $details['email']; ?>
                                </td>
                                <td>
                                  <?php echo $details['phone']; ?>
                                </td>
                                <td>
                                  <?php echo $details['Salary']; ?>
                                </td>
                                <td>
                                  <?php echo $details['join_date']; ?>
                                </td>
                                <td>
                                  <?php echo $details['commission']; ?>
                                </td>
                                <td>
                                  <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#myModal<?php echo $details['c_id']; ?>">Update</button>
                                </td>
                              </tr>
                              <div class="modal" id="myModal<?php echo $details['c_id']; ?>">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Update Details</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      <form action="<?php echo base_url() ?>" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="name">Counsellor name</label>
                              <input type="text" class="form-control" value='<?php echo $details['name']; ?>' name="name"placeholder="Enter name">
                            </div>
                            <div class="form-group">
                              <label for="name">Email</label>
                              <input type="email" class="form-control" id="c_name" value='<?php echo $details['email']; ?>' name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="name">Join Date</label>
                              <input type="date" name="date" value='<?php echo $details['join_date']; ?>'  class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="name">Commission percentage</label>
                              <input type="text"value='<?php echo $details['commission']; ?>'  class="form-control" name="commission">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phone number">Phone number</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone number">
                            </div>
                            <div class="form-group">
                              <label for="name">Salary</label>
                              <input type="text" class="form-control"value='<?php echo $details['Salary']; ?>'  name="salary" placeholder="Salary"></input>
                            </div>
                            <div class="form-group">
                              <label for="name">no of Leads</label>
                              <input type="text" value='<?php echo $details['Predefined_lead']; ?>'  class="form-control" name="leads" id="Succseeful Leads"></input>
                            </div>
                          </div>

                        </div>

                      </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <a href="<?php echo base_url('admin/edit/' . $details['id']) ?>" class="btn btn-primary">Edit</a>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>
                            

                          </tr>

                        </tbody>

                      </table>
                    </div>
                    <!-- /.card-body -->

                  </div>
                </div>
              </div>
              
              <div class="modal" id="myView">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Student Details</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <table class="table table-hover text-nowrap">
                        <th>Name</th>
                        <th>Phone number</th>
                        <th>Email ID</th>
                        <th>Country</th>
                      </table>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>

                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!--/.col (left) -->
            <!-- right column -->

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>