<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <h1 class="">Dashboard</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>Total leads</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>50</h3>

                  <p>Pending list</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>

                  <p>Documentation pending</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Application Submitted</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Lead Display</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Phone number</th>
                        <th>Date</th>
                        <th>Status</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td></td>
                        <td>11-7-2014</td>
                        <td>
                          Approved
                        </td>
                        <!-- <td><span class="tag tag-success">Approved</span></td>
                         -->




                      </tr>
                      <tr>
                        <td>219</td>
                        <td>Alexander Pierce</td>
                        <td></td>
                        <td>11-7-2014</td>
                        <td>
                          Pending
                        </td>

                      </tr>
                      <tr>
                        <td>657</td>
                        <td>Bob Doe</td>
                        <td></td>
                        <td>11-7-2014</td>
                        <td>
                          Approved
                        </td>

                      </tr>
                      <tr>
                        <td>175</td>
                        <td>Mike Doe</td>
                        <td></td>
                        <td>11-7-2014</td>
                        <td>
                          Pending
                        </td>

                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
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
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url() ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url() ?>plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url() ?>plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url() ?>plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url() ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url() ?>plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url() ?>plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url() ?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url() ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?php echo base_url() ?>plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url() ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() ?>dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() ?>dist/js/pages/dashboard.js"></script>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>