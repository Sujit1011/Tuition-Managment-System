<?php
 
$dataPoints = array(
	array("y"=> 26274, "label"=> "2007"),
	array("y"=> 26380, "label"=> "2008"),
	array("y"=> 25058, "label"=> "2009"),
	array("y"=> 24864, "label"=> "2010"),
	array("y"=> 26707, "label"=> "2011"),
	array("y"=> 29309, "label"=> "2012"),
	array("y"=> 34519, "label"=> "2013"),
	array("y"=> 40101, "label"=> "2014"),
	array("y"=> 48401, "label"=> "2015"),
	array("y"=> 58580, "label"=> "2016")
);
 
?>






<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Geeks Tuitors | Dashboard</title>
  <!-- Latest compiled and minified CSS -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script>
	window.onload = function () {

	var chart = new CanvasJS.Chart("chartContainer", {
		title: {
			text: "Total students Graph"
		},
		subtitles: [{
			text: "2007 to 2016"
		}],
		axisY: {
			title: "Number of Students",
			includeZero: false
		},
		data: [{
			type: "stepLine",
			dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();

	}
</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
 	<div class="wrapper">
		 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
			  </li>
			  
			</ul>

			<!-- SEARCH FORM -->
			
		</nav>
	</div>
	
	
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="hello.php" class="brand-link">
      <img src="logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN Control</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition os-host-scrollbar-vertical-hidden"><div class="os-resize-observer-host"><div class="os-resize-observer observed" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer observed"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 1890px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="right: 0px; bottom: 0px;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <!-- Sidebar user panel (optional) -->
<!--
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sujit Soren</a>
        </div>
      </div>
-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="hello.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_students.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="hello_student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="delete_student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delete Student</p>
                </a>
              </li>
            </ul> 
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Teacher
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_teachers.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="hello_teacher.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="delete_teacher.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delete Teacher</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Courses
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_courses.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="hello_courses.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Courses</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Attendences
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_s_attendance.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Student Attendences</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_t_attendance.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Teacher Attendences</p>
                </a>
              </li>
            </ul>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden os-scrollbar-unusable"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
  </aside>
  
  
  	<div class="content-wrapper">
		<div class="content-header">
		  <div class="container-fluid">
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1 class="m-0 text-dark">Student Registration</h1>
			  </div><!-- /.col -->
			</div><!-- /.row -->
		  </div><!-- /.container-fluid -->
		</div>
		<section class="content">
      		<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="First Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Middle Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Middle Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Last Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control">
                                     <option>Male</option>
                                     <option>Female</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Date of Birth</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="dd/mm/yyyy" class="form-control" required="true" value="" type="date"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 1</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine2" name="addressLine2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State/Province/Region</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State/Province/Region" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code/ZIP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode" placeholder="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                        	
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="tel"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Gurdian Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="First Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Gurdian Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="tel"></div>
                            </div>
                         </div>
                      </fieldset>
                   </form>
                </td>
                
             </tr>
          </tbody>
       </table>
    </div>
      	
      	
		</section>
	</div>
	
	
	
	
	
	
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="plugins/moment/moment.min.js"></script>
	<script src="plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>	
</body>
</html>