<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Advanced form elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/adminlte.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style type="text/css">
        #regiration_form fieldset:not(:first-of-type) {
            display: none;
        }
    </style>
</head>

<body>

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

        <div class="content-wrapper">
            <div class="container">
                <br>
                <h2>General Information</h2>
                <div class="card">
                    <div class="card-body">
                        <form action="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea name="address" class="form-control" rows="5" placeholder="Enter your address..."></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Gender</label>
                                                <div class="form-group form-inline">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender">
                                                        <label class="form-check-label">Male</label>
                                                    </div>
                                                    &nbsp; &nbsp;
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender">
                                                        <label class="form-check-label">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date of Birth:</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="DOB" />
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="card-footer">
                            <button class="btn btn-outline-success" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="regiration_form" novalidate action="action.php" method="post">
                                    <fieldset>
                                        <h2>Step 1: Add School and College Details</h2>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3">10th
                                                        Score</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="10_score" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Your Current Status in
                                                        12th</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio1">
                                                        <label class="form-check-label">Still
                                                            Pursing</label>
                                                    </div>
                                                    &nbsp; &nbsp;
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio1">
                                                        <label class="form-check-label">Completed</label>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-md-3">Passing Year of
                                                        10th</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="10_passing" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3">College
                                                        name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="college_name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3">Course
                                                        name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="course_name" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>12th
                                                        Score (if pursing then average
                                                        score)</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="12_score" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Your 12th Board</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="board">
                                                        <label class="form-check-label">CBSE
                                                            Board</label>
                                                    </div>
                                                    &nbsp; &nbsp;
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="board">
                                                        <label class="form-check-label">ICSE
                                                            Board</label>
                                                    </div>
                                                    &nbsp;&nbsp;
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="board">
                                                        <label class="form-check-label">State
                                                            Board</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3">Passing Year of
                                                        12th</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="12_passing" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3">Average CGPA</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="cgpa" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5">Last Semester
                                                        SGPA</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="sgpa" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="password" class="next btn btn-info" value="Next" />
                                    </fieldset>
                                    <fieldset>
                                        <h2> Step 2: Add Work Details</h2>
                                        <hr>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-md-2 col-form-label">Company
                                                        name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="company_name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-md-2">Experience</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="work_exp" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="">Job Type</label>
                                                    <div class="form-group form-inline">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="job_type">
                                                            <label class="form-check-label">Part-Time</label>
                                                        </div>
                                                        &nbsp; &nbsp;
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="job_type">
                                                            <label class="form-check-label">Full-Time</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                                        <input type="button" name="next" class="next btn btn-info" value="Next" />
                                    </fieldset>
                                    <fieldset>
                                        <h2>Step 3: Country Selection</h2>
                                        <hr>
                                        <div class="form-group">
                                            <h4>Select the country</h4>
                                            <select class="form-control" name="country">
                                                <option value="">USA</option>
                                                <option value="">Cananda</option>
                                                <option value="">UK</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Select visa type</h4>
                                                <select class="form-control" name="visa_type">
                                                    <option value="">Tourist Visa
                                                    </option>
                                                    <option value="">Study Visa</option>
                                                    <option value="">Buisness Visa
                                                    </option>
                                                    <option value="">Employment Visa
                                                    </option>
                                                    <option value="">Transport</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="container">
                                                <br>
                                                <label>Applied Again</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">Have
                                                                you applied before for any
                                                                country?</label>
                                                        </div>
                                                        <label>If yes then please fill</label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Country
                                                                        name</label>
                                                                    <div>
                                                                        <input type="text" name="prev_country" class="form-control" placeholder="Enter country name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                                        <input type="button" name="next" class="next btn btn-info" value="Next" />
                                        <!-- <input type="submit" name="submit" class="submit btn btn-success" value="Submit" /> -->
                                    </fieldset>
                                    <fieldset>
                                        <h2>Step 4: IELTS & GRE SCORE</h2>
                                        <hr>
                                        <div class="container">
                                            <h4>IELTS SCORE</h4>
                                            <div class="row">
                                                <div class="container">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">Have
                                                                you appeared for IELTS exam
                                                                before?</label>
                                                        </div>
                                                    </div>
                                                    <label>If yes then please fill yout score</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-md-2 col-form-label">Writing</label>
                                                                <div class="col-md-10">
                                                                    <input type="number" max="9" name="IELTS_W" class="form-control" placeholder="0.0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 col-form-label">Listening</label>
                                                                <div class="col-md-10">
                                                                    <input type="number" max="9" name="IELTS_L" class="form-control" placeholder="0.0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-md-2 col-form-label">Speaking</label>
                                                                <div class="col-md-10">
                                                                    <input type="number" max="9" name="IELTS_S" class="form-control" placeholder="0.0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 col-form-label">Reading</label>
                                                                <div class="col-md-10">
                                                                    <input type="number" max="9" name="IELTS_R" class="form-control" placeholder="0.0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-groupml ml-3">
                                                            <label>Overall</label>
                                                            <div>
                                                                <input type="number" max="9" name="IELTS_Overall" class="form-control" placeholder="0.0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h4>GRE SCORE</h4>
                                                    <div class="row">
                                                        <div class="container">
                                                            <div class="col-md-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox">
                                                                    <label class="form-check-label">Have
                                                                        you appeared for GRE exam
                                                                        before?</label>
                                                                </div>
                                                            </div>
                                                            <label>If yes then please fill yout score</label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Analytical
                                                                            Reasoning</label>
                                                                        <div>
                                                                            <input type="text" name="Gre_analytical" class="form-control" placeholder="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Overall Score</label>
                                                                        <div>
                                                                            <input type="text" name="Gre_overall" class="form-control" placeholder="0.0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <h5>TOFEL Overall</h5>
                                                                    <div>
                                                                        <input type="text" name="TOFEL" class="form-control" placeholder="0.0">
                                                                    </div>
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <div class="form-group">
                                                                    <h5>PTE Overall</h5>
                                                                    <div>
                                                                        <input type="text" name="PTE" class="form-control" placeholder="0.0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                                        <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <br>

            </div>
        </div>


        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>
    <!-- /.control-sidebar -->
    <!-- /.control-sidebar -->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url() ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="<?php echo base_url() ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url() ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url() ?>plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url() ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url() ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url() ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?php echo base_url() ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="<?php echo base_url() ?>plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="<?php echo base_url() ?>plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
    <script>
        $(document).ready(function() {
            var current = 1,
                current_step, next_step, steps;
            steps = $("fieldset").length;
            $(".next").click(function() {
                current_step = $(this).parent();
                next_step = $(this).parent().next();
                next_step.show();
                current_step.hide();
                setProgressBar(++current);
            });
            $(".previous").click(function() {
                current_step = $(this).parent();
                next_step = $(this).parent().prev();
                next_step.show();
                current_step.hide();
                setProgressBar(--current);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>