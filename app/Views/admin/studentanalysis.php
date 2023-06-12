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
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Shail Shah</a>
                    </div>
                </div> -->

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
            <div class="container">
                <h2 class="display-4 text-center">Dashboard</h2>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="col">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-warning"><i class="far fa-user"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Active Students</span>
                                    <span class="info-box-number">500</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-info"><i class="far fa-flag"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total No. of Leads</span>
                                    <span class="info-box-number">2000 +</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-success"><i class="far fa-star"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total active Leads</span>
                                    <span class="info-box-number">600</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-dark"><i class="far fa-user"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total No. of Counsellor</span>
                                    <span class="info-box-number">60</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-primary"><i class="far fa-envelope"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">No. of Leave Applications</span>
                                    <span class="info-box-number">80</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-danger"><i class="far fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Visa Applications</span>
                                    <span class="info-box-number">328</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-info"><i class="far fa-building"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total No. of University</span>
                                    <span class="info-box-number">500 +</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-secondary"><i class="far fa-bookmark"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total No. of Colleges</span>
                                    <span class="info-box-number">220</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col">
                            <div class="info-box shadow-lg">
                                <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total No. of Courses</span>
                                    <span class="info-box-number">56</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <h2 class="display-4 text-center">Student Anaylsis</h2>
                <hr>
                <div class="card`">
                    <div class="card-header">
                        <span class="fw-bold">Student Visa Status</span>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 100%;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search Counsellor name">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Counsellor Name</th>
                                        <th>Application ID</th>
                                        <th>Phone No.</th>
                                        <th>Visa Status</th>
                                        <th>Payment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Shail Shah</td>
                                        <td>Ritesh Patel</td>
                                        <td>7874566138</td>
                                        <td>96647 71856</td>
                                        <td>In Progress</td>
                                        <td>Done</td>
                                    </tr>
                                    <tr>
                                        <td>Rohit Shah</td>
                                        <td>Ashwin Patel</td>
                                        <td>4529823247</td>
                                        <td>96947 71853</td>
                                        <td>Completed</td>
                                        <td>Done</td>
                                    </tr>
                                    <tr>
                                        <td>Poojan Patel</td>
                                        <td>Ritesh Patel</td>
                                        <td>9874566138</td>
                                        <td>89265 71856</td>
                                        <td>In Progress</td>
                                        <td>Done</td>
                                    </tr>
                                    <tr>
                                        <td>Mayan Prajapati</td>
                                        <td>Harsh Patel</td>
                                        <td>8874566138</td>
                                        <td>88531 71856</td>
                                        <td>Pending</td>
                                        <td>Done</td>
                                    </tr>
                                    <tr>
                                        <td>Aakash Kumar</td>
                                        <td>Ritesh Patel</td>
                                        <td>6844566138</td>
                                        <td>96647 71856</td>
                                        <td>Pending</td>
                                        <td>Pending</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script>
        $(function() {
            $('.select2').select2()
        });
    </script>

    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

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