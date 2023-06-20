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
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->


                        <li class="nav-item">
                            <a href="/student/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Student Details
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/student/ApplicationStatus" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Application Status
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/student/FeePayment" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Fee Payment
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
                <h2 class="display-4 text-center">STUDENT INFORMATION</h2>
                <hr>
                <div class="card">
                    <div class="container p-3">
                        <div class="row">
                            <h3>General Information</h3>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Phone no.</th>
                                        <th>Date of Birth</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php if (!empty($details)) {
                                            foreach ($details as $details) {
                                        ?>
                                    <tr>
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
                                            <?php echo $details['dob']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['gender']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['address']; ?>
                                        </td>
                                    </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="container p-3">
                        <div class="row">
                            <h3>Educational Details</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>10th Score</th>
                                        <th>12th Score</th>
                                        <th>Board</th>
                                        <th>10th passing year</th>
                                        <th>12th passing year</th>
                                        <th>College Name</th>
                                        <th>Course Name</th>
                                        <th>Average CGPA</th>
                                        <th>Last SGPA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="container p-3">
                        <div class="row">
                            <h3>Company Details</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Expirence</th>
                                        <th>Job Type</th>
                                        <th>Country</th>
                                        <th>Visa Type</th>
                                        <th>Previous Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <tr>
                                        <td>
                                            <?php echo $details['company_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['work_exp']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['job_type']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['country']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['visa_type']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['prev_country']; ?>
                                        </td>
                                    </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="container p-3">
                        <div class="row">
                            <h3>IELTS & GRE Score</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Listening</th>
                                        <th>Reading</th>
                                        <th>Writing</th>
                                        <th>Speaking</th>
                                        <th>Overall</th>
                                        <th>GRE Ananlytical</th>
                                        <th>GRE Overall</th>
                                        <th>TOFEL Overall</th>
                                        <th>PTE Overall</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <tr>
                                        <td>
                                            <?php echo $details['IELTS_L']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['IELTS_R']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['IELTS_W']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['IELTS_S']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['IELTS_Overall']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['Gre_analytical']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['Gre_overall']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['TOFEL']; ?>
                                        </td>
                                        <td>
                                            <?php echo $details['PTE']; ?>
                                        </td>
                                    </tr>
                                <?php }
                                        } else { ?>
                            <?php } ?>
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