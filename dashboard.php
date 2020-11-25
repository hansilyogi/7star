<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <?php include('navbar.php'); ?>
      <div class="content-wrapper">        
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
              </div>
              <!-- /.col -->
            </div>
            <div class="row"> 
              <div class="col-lg-4 col-6">
                <a href="attendance.php">
                <div class="small-box" style="background-color:#008B8B">
                  <div class="icon">
                    <i class="fas fa-user" style="color:black"></i>
                  </div>
                  <div class="inner">
                    <h3><label class="badge badge-primary right" id="present" name="present" text="0">0</label></h3>
                    <h4 class="text-dark p-1" style="color:black"><b>Present</b></h4>
                  </div>
                </div>
                </a>
              </div>
        
              <div class="col-lg-4 col-6">
                <a href="employeeview.php">
                <div class="small-box" style="background-color:#008B8B">
                  <div class="icon">
                    <i class="fas fas fa-users" style="color:black"></i>
                  </div>
                  <div class="inner">
                    <h3><label class="badge badge-success right" id="employee" name="employee" value="0">0</label></h3>
                    <h4 class="text-dark p-1"><b>Employee</b></h4>
                  </div>
                </div>
                </a>
              </div>

              <div class="col-lg-4 col-6">
                <a href="leaveAction.php">
                <div class="small-box" style="background-color:#008B8B">
                  <div class="icon">
                    <i class="fas fa-sticky-note" style="color:black"></i>
                  </div>
                  <div class="inner">
                    <h3><label class="badge badge-danger right" id="leavecount" name="leavecount" text="0">0</label></h3>
                    <h4 class="text-dark p-1"><b>Pending Leave</b></h4>
                  </div>
                </div>
                </a>
              </div>
            </div>
            <hr>
            <h5><b>Attendance Detail</b></h5>
          <div class="row">
            <div class="col-lg-4 col-6">
              <div class="small-box shadow" style="background-color:#008B8B">
                <div class="icon">
                  <i class="fas fa-map-marker-alt" style="color:black"></i>
                </div>
                <div class="inner">
                  <h3><label class="badge badge-info right" id="gpsemployee" name="gpsemployee" value="0">0</label></h3>
                  <h5>Attendance Via GPS</h5>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-6">
              <div class="small-box shadow" style="background-color:#008B8B">
                <div class="icon">
                  <i class="fas fa fa-wifi" style="color:black"></i>
                </div>
                <div class="inner">
                  <h3><label class="badge badge-warning right" id="wifiemployee" name="wifiemployee" value="0">0</label></h3>
                  <h5>Attendance Via WiFi</h5>
                </div>
              </div>
            </div>
          </div><br>
          </div>
          <!-- /.container-fluid -->
        </div>        
        <div class="content">          
        </div>        
      </div>      
      <footer class="main-footer">
        All rights reserved.
      </footer>
    </div>        
    <?php include('script.php'); ?>
    <script src="js/dashboard.js"></script>
  </body>
</html>
