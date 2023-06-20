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
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url() ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
                            <h1>Add University</h1>
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
                                    <h3 class="card-title">University details</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">University name</label>
                                                    <input type="text" class="form-control" id="name" name="uname" placeholder="Enter name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Email</label>
                                                    <input type="email" class="form-control" name="Email" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Map Location</label>
                                                    <input type="text" class="form-control" name="map_loc" placeholder="Enter URL">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone number">Phone number</label>
                                                    <input type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Phone number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone number">Country</label>
                                                    <input type="text" class="form-control" name="Country" id="exampleInputPassword1" placeholder="Country">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="customFile">Logo</label>
                                                    <input type="file" class="form-control" name="Logo" id="customFile" />
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
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12">
                            <h1>Add Courses</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Courses details</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?php echo base_url('admin/AddUniversityCourses') ?>" method="post">
                                    <div class="card-body"> 
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="name">University name</label>
                                                    <input type="text" name="uname" class="form-control" placeholder="Enter course">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="name">Commission</label>
                                                    <input type="text" name="commission" class="form-control" placeholder="Enter course commission">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="name">Course name</label>
                                                    <input type="text" name="cname" class="form-control" placeholder="Enter course">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone number">Fees</label>
                                                    <input type="text" name="fees" class="form-control" id="exampleInputPassword1" placeholder="Phone number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Duration</label>
                                                    <input type="text" class="form-control" name="duration" placeholder="Enter duration">
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


                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12">
                            <h1>Add Courses Criteria</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Courses Criteria</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?php echo base_url('admin/CourseCriteria') ?>" method="post">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">University name</label>
                                                    <input type="text" class="form-control" name="uname" placeholder="Enter course ID">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">12 th score</label>
                                                    <input type="text" class="form-control" name="12" id="name" placeholder="Enter minimum 12 th score">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">IELTS_S</label>
                                                    <input type="text" class="form-control" id="name" name="speaking" placeholder="Enter speaking">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">IELTS_L</label>
                                                    <input type="text" class="form-control" name="listening" id="name" placeholder="Enter listening">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">GRE_overall</label>
                                                    <input type="text" class="form-control" name="GRE_overall" id="name" placeholder="Enter Gre score">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Work Experience</label>
                                                    <input type="text" class="form-control" name="work" id="name" placeholder="Enter work experience">
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <div class="form-group">
                                                    <label for="name">Course name</label>
                                                    <input type="text" class="form-control" name="cname" id="name" placeholder="Enter reading">
                                                </div>
                                                    <label for="name">IELTS_R</label>
                                                    <input type="text" class="form-control" name="reading" id="name" placeholder="Enter reading">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">IELTS_W</label>
                                                    <input type="text" class="form-control" name="writing" id="name" placeholder="Enter writing">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">IELTS_overall</label>
                                                    <input type="text" class="form-control" name="IELTS_overall"id="name" placeholder="Enter ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">GRE_analytical</label>
                                                    <input type="text" class="form-control" name="GRE_analytical"id="name" placeholder="Enter Gre analytical">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">TOEFL</label>
                                                    <input type="text" class="form-control" name="TOEFL"id="name" placeholder="Enter TOEFL score">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">PTE</label>
                                                    <input type="text" class="form-control" name="PTE" id="name" placeholder="Enter PTE score">
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


                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>