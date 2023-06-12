<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/select2/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        /* This method will add a new row */
        function addNewRow() {
            var table = document.getElementById("employee-table");
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length;
            var row = table.insertRow(rowCount);
            for (var i = 0; i < cellCount; i++) {
                var cell = row.insertCell(i);
                if (i < cellCount - 1) {
                    if (i == 0) {
                        cell.innerHTML = '<div class="form-group"><select id="university" name="university"class="form-select"> <option value="Charusat">Charusat</option> <option value="GCET">GCET</option>   <option value="Search more">Search more</option></select> </div>';

                        // cell.innerHTML='<select class="margin-left:10px"><option>Charusat</option><option>GCET</option><option><a href="">Search more</a></option></select>';
                    } else if (i == 3) {
                        cell.innerHTML = '<select class="form-select"><option>In progress</option><option>Offered Letter</option></select>';
                    } else {
                        cell.innerHTML = '<div class="form-group"><input type="text"class="form-control" /></div>';
                    }
                } else {
                    cell.innerHTML = '<input type="button" value="delete" class="btn btn-danger" onclick="deleteRow(this)" />';
                }
            }
        }

        /* This method will delete a row */
        function deleteRow(ele) {
            var table = document.getElementById('employee-table');
            var rowCount = table.rows.length;
            if (rowCount <= 1) {
                alert("There is no row available to delete!");
                return;
            }
            if (ele) {
                //delete specific row
                ele.parentNode.parentNode.remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }
        }
    </script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
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
            <div class="container"><br>
                <h2>STUDENT INFORMATION</h2>
                <div class="card">
                    <div class="card-header">
                        <h3>Enter student details</h3>
                    </div>

                    <form>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Student name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Student Phone number</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter number">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="container">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <h3>General Information</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="firstname">First Name</label>
                                                <input type="text" class="form-control" id="firstname" placeholder="Enter First name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" class="form-control" id="lastname" placeholder="Enter Last name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label>Select</label>
                                        <select class="form-control">
                                            <option>Application</option>
                                            <option>Coaching</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Enter your number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date:</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" rows="5" placeholder="Enter your address..."></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Gender</label>
                                            <div class="form-group form-inline">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="radio1">
                                                    <label class="form-check-label">Male</label>
                                                </div>
                                                &nbsp; &nbsp;
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="radio1">
                                                    <label class="form-check-label">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth:</label>
                                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                            </div>
                            <br>
                            <div class="form-group">
                                <div id="showOne" class="myDiv">
                                    <div class="card-body">
                                        <h2>SCHOOL DETAILS</h2>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3">10th
                                                        Score</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
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
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>12th
                                                        Score (if pursing then average
                                                        score)</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Your 12th Board</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio1">
                                                        <label class="form-check-label">CBSE
                                                            Board</label>
                                                    </div>
                                                    &nbsp; &nbsp;
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio1">
                                                        <label class="form-check-label">ICSE
                                                            Board</label>
                                                    </div>
                                                    &nbsp;&nbsp;
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio1">
                                                        <label class="form-check-label">State
                                                            Board</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3">Passing Year of
                                                        12th</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h2>COLLEGE DETAILS</h2>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label class="col-md-3">College
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3">Course
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3">Average CGPA</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5">Last Semester
                                                        SGPA</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="showTwo" class="myDiv">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-md-2 col-form-label">Company
                                                        name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-md-2">Experience</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="">Job Type</label>
                                                    <div class="form-group form-inline">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="radio1">
                                                            <label class="form-check-label">Part-Time</label>
                                                        </div>
                                                        &nbsp; &nbsp;
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="radio1">
                                                            <label class="form-check-label">Full-Time</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="showThree" class="myDiv">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="container">
                                                <h2>Country Selection</h2>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">Select the country
                                                        <select class="form-control" name="country">
                                                            <option value="">USA</option>
                                                            <option value="">Cananda</option>
                                                            <option value="">UK</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="container">
                                                <h2>Type of Visa</h2>
                                                <div class="row">
                                                    <div class="col-md-6">Select visa type
                                                        <select class="form-control" name="country">
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
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="container">
                                                <label>Applied Again</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">Have
                                                                you applied before for any
                                                                country?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="container">
                                                <label>If yes then please fill</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Country
                                                                name</label>
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="Enter country name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="showFour" class="myDiv">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="container">
                                                <h2>IELTS SCORE</h2>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">Have
                                                                you appeared for IELTS exam
                                                                before?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="container">
                                                <label>If yes then please fill yout score</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="col-md-2 col-form-label">Writing</label>
                                                            <div class="col-md-10">
                                                                <input type="number" max="9" class="form-control" placeholder="0.0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 col-form-label">Listening</label>
                                                            <div class="col-md-10">
                                                                <input type="number" max="9" class="form-control" placeholder="0.0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="col-md-2 col-form-label">Speaking</label>
                                                            <div class="col-md-10">
                                                                <input type="number" max="9" class="form-control" placeholder="0.0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 col-form-label">Reading</label>
                                                            <div class="col-md-10">
                                                                <input type="number" max="9" class="form-control" placeholder="0.0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-groupml ml-3">
                                                        <label>Overall</label>
                                                        <div>
                                                            <input type="number" max="9" class="form-control" placeholder="0.0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="container">
                                                <h2>GRE SCORE</h2>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">Have
                                                                you appeared for GRE exam
                                                                before?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="container">
                                                <label>If yes then please fill yout score</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Verbal
                                                                Reasoning</label>
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Quantitative
                                                                Reasoning</label>
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Analytical
                                                                Reasoning</label>
                                                            <div>
                                                                <input type="text" class="form-control" placeholder="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Overall Score</label>
                                                    <div>
                                                        <input type="text" class="form-control" placeholder="0.0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline-info">UPDATE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>

    <script src="<?php echo base_url() ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url() ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>dist/js/demo.js"></script>
    <script>
        $(function() {
            $('.select2').select2()
        });
    </script>

    <script src="<?php echo base_url() ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myselection').on('change', function() {
                var demovalue = $(this).val();
                $("div.myDiv").hide();
                $("#show" + demovalue).show();
            });
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>