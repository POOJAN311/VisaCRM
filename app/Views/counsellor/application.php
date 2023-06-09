<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plugins/select2/css/select2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
                        cell.innerHTML = '<select id="university" name="university"class="form-select"> <option value="Charusat">Charusat</option> <option value="GCET">GCET</option>   <option value="Search more">Search more</option></select>';

                        // cell.innerHTML='<select class="margin-left:10px"><option>Charusat</option><option>GCET</option><option><a href="">Search more</a></option></select>';
                    } else if (i == 2) {
                        cell.innerHTML = '<select class="form-select"><option>Computer</option><option>Civil</option></select>';
                    } else if (i == 4) {
                        cell.innerHTML = '<select class="form-select"><option>In progress</option><option>Offered Letter</option></select>';
                    } else {
                        cell.innerHTML = '<div class="form-group"><input type="text"class="form-control" /></div>';
                    }
                } else {
                    cell.innerHTML = '<button type="button" class="btn btn-success" onclick="">Save</button>&nbsp;<button type="button"  class="btn btn-danger" onclick="deleteRow(this)" />Delete</button>&nbsp;<button type="button"  class="btn btn-success"id="sentMessage" data-toggle="modal" data-target="#largeModal" >Update</button>';
                    
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
        $scope.openModal = function(){
            $('#largeModal').modal('show');

};
    </script>
</head>

<body class="hold-transition sidebar-mini">
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
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url() ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <h2 class="text-center display-4">Search Student</h2>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <form action="enhanced-results.html">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Student ID</label>
                                                    <br>
                                                    <input type="text" class="form-control form-control-md" placeholder="Enter the student id">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-block btn-outline-success btn-flat">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <div class="container">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">STUDENT INFORMATION</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-3 p-5"><i class="fa fa-user" style="font-size:100px;"></i></div>
                                <div class="col-9">
                                    <form class="form-horizontal">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inputName3" class="col-sm-2 col-form-label"> First
                                                    Name</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName3" class="col-sm-2 col-form-label"> Last
                                                    Name</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email
                                                    Id</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Phone" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Address" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Application Procedure</label>
                            <select class="custom-select" id="myselection">
                                <option value="documentation">Documentation</option>
                                <option value="application">University Application</option>
                                <option value="visa"> Enter Visa Details</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
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
                                                <h3 class="card-title">DataTable with default features</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr No.</th>
                                                            <th>Document Name</th>
                                                            <th>Action</th>
                                                            <th>Date & Time</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>10th Marksheet
                                                            </td>
                                                            <td>
                                                                <input type="file" class="btn btn-block btn-primary ">
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                <form action="">

                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option selected="selected">Pending</option>
                                                                            <option>Reviewing</option>
                                                                            <option>Approved</option>
                                                                            <option>Need Reuploadation</option>

                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>12th Marksheet
                                                            </td>
                                                            <td> <input type="file" class="btn btn-block btn-primary ">
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01 </td>
                                                            <td>
                                                                <form action="">

                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option selected="selected">Pending</option>
                                                                            <option>Reviewing</option>
                                                                            <option>Approved</option>
                                                                            <option>Need Reuploadation</option>

                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td> Graduation Marksheet (Only for Graduates)
                                                            </td>
                                                            <td>
                                                                <input type="file" class="btn btn-block btn-primary ">
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                <form action="">

                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option selected="selected">Pending</option>
                                                                            <option>Reviewing</option>
                                                                            <option>Approved</option>
                                                                            <option>Need Reuploadation</option>

                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td> Letter of recommendation
                                                            </td>
                                                            <td>
                                                                <input type="file" class="btn btn-block btn-primary ">
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                <form action="">

                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option selected="selected">Pending</option>
                                                                            <option>Reviewing</option>
                                                                            <option>Approved</option>
                                                                            <option>Need Reuploadation</option>

                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td> Essay 1 (SOP1)
                                                            </td>
                                                            <td>
                                                                <input type="file" class="btn btn-block btn-primary ">
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                <form action="">

                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option selected="selected">Pending</option>
                                                                            <option>Reviewing</option>
                                                                            <option>Approved</option>
                                                                            <option>Need Reuploadation</option>

                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td> Essay 2 (SOP2)
                                                            </td>
                                                            <td>
                                                                <input type="file" class="btn btn-block btn-primary ">
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                <form action="">

                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option selected="selected">Pending</option>
                                                                            <option>Reviewing</option>
                                                                            <option>Approved</option>
                                                                            <option>Need Reuploadation</option>

                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td> Financial Document
                                                            </td>
                                                            <td>
                                                                <input type="file" class="btn btn-block btn-primary ">
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                <form action="">

                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option selected="selected">Pending</option>
                                                                            <option>Reviewing</option>
                                                                            <option>Approved</option>
                                                                            <option>Need Reuploadation</option>

                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>9</td>
                                                            <td> Work Experience Document (if Applicable)
                                                            </td>
                                                            <td>
                                                                <input type="file" class="btn btn-block btn-primary ">
                                                            </td>
                                                            <td> Date: 20-08-2022 | Time: 12:22:01</td>
                                                            <td>
                                                                <form action="">

                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select class="form-control select2" style="width: 100%;">
                                                                            <option selected="selected">Pending</option>
                                                                            <option>Reviewing</option>
                                                                            <option>Approved</option>
                                                                            <option>Need Reuploadation</option>

                                                                        </select>
                                                                    </div>
                                                                </form>
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
                        <div class="card">
                            <div class="card-header">
                                <h2>Add University</h2>
                                <button onclick="addNewRow()" class="btn btn-primary">Add New Row</button>
                                
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="employee-table">
                                <tr>
                                    <th>University name</th>
                                    <th>University ID</th>
                                    <th>Course name</th>
                                    <th>Course ID</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Update Status</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            
          </div>
          <div class="modal-body">
            <form>
            <label for="Status">Status</label>

<select class="form-select">
    <option>Offered letter</option>
    <option>Applied</option>
  
</select>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>

                    <section class="content">
                        <div class="container">
                            <div class="row">
                                <!-- left column -->
                                <div class="col">
                                    <!-- general form elements -->
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Visa details</h3>
                                        </div>
                                        <form>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Application ID</label>
                                                            <input type="text" class="form-control" id="name" placeholder="Enter name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Country">Country</label>
                                                            <select class="form-select">
                                                                <option value="canada">Canada</option>
                                                                <option value="USA">USA</option>
                                                                <option value="UK">UK</option>
                                                                <option value="Australia">Australia</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone number">Fees</label>
                                                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Fees">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Status</label>
                                                            <input type="radio" id="Pending" name="Pending" value="Pending">
                                                            <label for="Pending">Pending</label>
                                                            <input type="radio" id="css" name="Pending" value="Approved">
                                                            <label for="Approved">Approved</label>
                                                            <input type="radio" id="javascript" name="Pending" value="Inprogress">
                                                            <label for="Inprogress">Inprogress</label>
                                                        </div>

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
                        </div>
                </div>
            </div>
        </div>

        </section>

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
        $(document).ready(function() {
            $('#myselection').on('change', function() {
                var demovalue = $(this).val();
                $("div.myDiv").hide();
                $("#show" + demovalue).show();
            });
        });
    </script>


    <script src="<?php echo base_url() ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>