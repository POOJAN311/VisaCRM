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
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url() ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/counsellor/dashboard" class="brand-link">
        <img src="<?php echo base_url() ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Visa consultant</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
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
              <a href="/counsellor/Leads" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Leads
                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="/universityApplication.html" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  College Search
                </p>
              </a>
            </li> -->
            </li>
            <li class="nav-item">
              <a href="/counsellor/CollegeSearch" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  College Search
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/counsellor/AddStudent" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Add Student
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/counsellor/StudentInfo" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Student Information
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/counsellor/VisaDetails" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Visa Details
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/counsellor/Application" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Student Application
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/counsellor/Leave" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Leave
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/counsellor/StudentSearch" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Student search
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
              <h1> Leave Module </h1>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
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
            <!-- left column -->
            <div class="col">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"> Add Leave </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method='post'>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">

                      </div>


                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>First Day of Absence:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" name='start_leave' class="form-control datetimepicker-input" data-target="#reservationdate" />

                          </div>

                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Last Day of Absence:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" name='end_leave' class="form-control datetimepicker-input" data-target="#reservationdate" />


                          </div>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name">Description</label>
                        <textarea class="form-control" id="description" name='desc' placeholder="Optional"></textarea>
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
                      <h3 class="card-title"> Leave Display </h3>

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
                          <th>Date</th>
                            <th>Reason for Leave</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            
                            <?php if (!empty($de)) {
                              
                                ?>
                              <tr>
                              <td>
                                  <?php echo $de['Date']; ?>
                                </td>
                                <td>
                                  <?php echo $de['desc']; ?>
                                </td>
                                <td>
                                  <?php echo $de['status']; ?>
                                </td>
                                
                              </tr>
                              
                              
                            <?php }
                             else { ?>
                            <tr colspan="3"> Records not found</tr>
                          <?php } ?>

                          </tr>

                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->

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
  <script src="<?php echo base_url() ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="<?php echo base_url() ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() ?>dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>