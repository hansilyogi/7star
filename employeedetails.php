<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <?php include('navbar.php'); ?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Employee Details</h1>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Add Employee</h3>
                  </div>
                  <form role="form">
                    <div class="card-body row">
                    <div class="form-group col-md-12">
                        <label for="department">Company</label>
                        <div class="input-group">
                          <select
                            class="form-control"
                            id="company"
                            name="company"
                          ></select>
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="department">Sub Company</label>
                        <div class="input-group">
                          <select
                            class="form-control"
                            id="subcompany"
                            name="subcompany"
                          ></select>
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="empl">Employee</label>
                        <div class="input-group">
                          <select
                            class="form-control"
                            id="employ"
                            name="employ"
                          ></select>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="month1">Month</label>
                        <input type="month" class="form-control" id="month1">                        
                      </div>
                      <div class="form-group col-md-6">
                        <label for="year">Year</label> 
                        <input type="date" class="form-control" id="year">
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </form>
                </div>
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
          <div class="container-fluid">
            <div class="card">
                <div class="card-header row">
                  <h3 class="card-title col-9">Display Data</h3>
                  <input type="text" class="form-control col-3" id="txt_searchemployee" name="txt_searchemployee" placeholder="Search Employee"/>
                </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>View Attendance</th>
                  </tr>
                </thead>
                <tbody id="displaydata"></tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <!-- Main Footer -->
      <footer class="main-footer">
        All rights reserved.
      </footer>
    </div>        
    <?php include('script.php'); ?>
    <script src="js/employeedetails.js"></script>
  </body>
</html>
