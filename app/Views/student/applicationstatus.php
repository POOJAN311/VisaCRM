<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                    }
                    else if (i == 3) {
                        cell.innerHTML = '<select class="form-select"><option>In progress</option><option>Offered Letter</option></select>';
                    }
                    else {
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
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Shail Shah</a>
                    </div>
                </div>

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
            <div class="container">
                <h2 class="display-4 text-center">APPLICATION STATUS</h2>
                <hr>
                <div class="card">
                    <div class="container p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>General Information</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row">First Name</th>
                                                <td>Shail</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Last Name</th>
                                                <td>Shah</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td colspan="2">shailshah24@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone No.</th>
                                                <td colspan="2">9898967126</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-end">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Date of Application</th>
                                                <td>06-05-21</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Gender</th>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td colspan="2">44,Tirath-3,Near AMUL diary road,Gujarat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Date of Birth</th>
                                                <td colspan="2">24-11-2001</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Application Status</label>
                            <select class="custom-select" id="myselection">
                                <option value="documentation">Documentation</option>
                                <option value="application">University Application</option>
                                <option value="visa">Visa Application</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="myDiv" id="showdocumentation">
                        <section class="content-header">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1>DataTables</h1>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                        </section>
                        <!-- Main content -->
                        <section class="content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- /.card -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">DataTable For All Documents</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No.</th>
                                                            <th>Document Name</th>
                                                            <th>Date & Time</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>10th Marksheet
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                Approved
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>12th Marksheet
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01 </td>
                                                            <td>
                                                                Approved
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td> Graduation Marksheet (Only for Graduates)
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                Pending
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td> Letter of recommendation
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                Pending
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td> Essay 1 (SOP1)
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                Approved
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td> Essay 2 (SOP2)
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                In progress
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td> Financial Document
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                Approved
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>8</td>
                                                            <td> Work Experience Document (if Applicable)
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                Pending
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->
                    </div>
                    <div class="myDiv" id="showapplication">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h3>Applied University</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <th scope="col">University Name</th>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Tuition Fees</th>
                                        <th scope="col">Status</th>
                                    </thead>
                                    <tbody>
                                        <tr scope="row">
                                            <td>University of Toronto</td>
                                            <td>Computer application and Embeded Systems</td>
                                            <td>$ 24,000</td>
                                            <td>Applied</td>
                                        </tr>
                                        <tr>
                                            <td>University of British Columbia</td>
                                            <td>Electrical Engineering and Applications</td>
                                            <td>$ 14,000</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>University of Ontario</td>
                                            <td>Mechanincal Engineering</td>
                                            <td>$ 29,000</td>
                                            <td>Offer Letter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="myDiv" id="showvisa">
                        <section class="content">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h3>Visa Status</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <th scope="col">Application ID</th>
                                                <th scope="col">Visa Type</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">Fees</th>
                                                <th scope="col">Status</th>
                                            </thead>
                                            <tbody>
                                                <tr scope="row">
                                                    <td>896548327361</td>
                                                    <td>Student Visa</td>
                                                    <td>United States</td>
                                                    <td>$ 500</td>
                                                    <td>In Progress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
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
        $(function () {
            $('.select2').select2()
        });
    </script>

    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myselection').on('change', function () {
                var demovalue = $(this).val();
                $("div.myDiv").hide();
                $("#show" + demovalue).show();
            });
        });
    </script>
</body>

</html>