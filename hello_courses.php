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
	
	
  <?php
  require('admin_navbar.html');

?>
  
  
  	<div class="content-wrapper">
		<div class="content-header">
		  <div class="container-fluid">
      <?php
              if($_POST)
              {
                  
                  // if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
                  // require('login_form.php'); 
                  error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);          
                  /*Connect to mysql server*/ 
                  $conn = mysqli_connect('localhost', 'root', '','tutioncenter');  
                            
                  /*Check link to the mysql server*/ 
                  if (mysqli_connect_errno())
                  {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }
                            
                  /*Create query*/ 
                  $a = $_POST['CourseID'];
                  $b = $_POST['CourseName'];
                  $c = $_POST['TeacherID'];
                  $d= $_POST['Day'];
                  $e = $_POST['Time'];
                  $f = $_POST['Room'];

                  $qry_1 = "INSERT INTO courses VALUES(". $c  .",". $a .", '". $b ."')";
                  $qry_2 = "INSERT INTO classdetails VALUES(". $a .",'". $d  ."','". $f ."','". $e  ."')";  
  
                  $result_1 = mysqli_query($conn,$qry_1);
                  $result_2 = mysqli_query($conn,$qry_2);
                  // print_r($qry_1);
                  // print_r($qry_2);
                  if($result_1 && $result_2)
                    echo '<h2><b>Added Successfully</b></h2>';
                  else
                    echo '<h2><b>Addition Unsuccessful</b></h2>';
                  /*Execute query*/ 
                  // $result = mysqli_query($conn,$qry_1);  
                    /*Show the rows in the fetched result set one by one*/ 

                            mysqli_free_result($result_1);
                            mysqli_free_result($result_2);
                            mysqli_close($conn);
                            // } 
                            // else{ 
                            //   header('location:login_form.php'); 
                            //   exit(); 
                            // }  
              }
          ?>
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1 class="m-0 text-dark">Course Registration</h1>
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
                   <form class="well form-horizontal" method="post" action="hello_courses.php">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Course Id</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="CourseID" placeholder="Course Id" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Course Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="CourseName" placeholder="Course Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Teacher Incharge (Id)</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="TeacherID" placeholder="Teacher Incharge (Id)" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Room</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="Room" placeholder="Teacher Incharge (Id)" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Day</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name="Day" >
                                     <option value="Sunday">Sunday</option>
                                     <option value="Monday">Monday</option>
                                     <option value="Tuesday">Tuesday</option>
                                     <option value="Wednesday">Wednesday</option>
                                     <option value="Thrusday">Thrusday</option>
                                     <option value="Friday">Friday</option>
                                     <option value="Saturday">Saturday</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Time</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="Time" class="form-control" required="true" value="" type="time"></div>
                            </div>
                          </div>       
                          <div class="form-group">
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><button type="submit" class="btn btn-success" name="s_register" value="Login">Add Course</button></div>
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