<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
session_start();
if (isset($_SESSION)) {
	if($_SESSION['username'] != ''){
		$s_id = $_SESSION['username'];
	}
}
else{
	exit("INVALID LOGIN CREDENTIALS !!!!");
}
$conn = mysqli_connect('localhost', 'root', '','tutioncenter');  
                
                  /*Check link to the mysql server*/ 
                  if (mysqli_connect_errno())
                  {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }
                
                  $qry = 'SELECT present,total 
                          FROM sattendance 
                          WHERE s_id = ' . $s_id; 
                  /*Create query*/ 
                  $qry = 'SELECT * 
                          FROM sprofile,sguardian 
                          WHERE sprofile.s_id = sguardian.s_id'; 
                
                  /*Execute query*/ 
                  $result = mysqli_query($conn,$qry);  
                /*Show the rows in the fetched result set one by one*/ 
                $row = mysqli_fetch_row($result);
                 
                    // print_r($row);

                    $s_id = $row[0];
                    $fname = $row[1];
                    $mname = $row[2];
                    $lname = $row[3];
                    $gender = $row[4];
                    $dob = $row[5];
                    $address = $row[6];
                    $phonenum = $row[7];
                    $email = $row[8];
                    $g_name = $row[10];
                    $g_phone = $row[11];

                $qry = 'SELECT present,total 
                          FROM sattendance 
                          WHERE s_id = ' . $s_id; 
                          /*Execute query*/ 
                $result = mysqli_query($conn,$qry);  
                /*Show the rows in the fetched result set one by one*/ 
                $row = mysqli_fetch_row($result);
                  $present = $row[0];
                  $totalAttendance = $row[1];
                 
                  $qry = 'SELECT AVG((marks/total)*100) 
                  FROM sgrade 
                  WHERE s_id = ' . $s_id; 
                  /*Execute query*/ 
                $result = mysqli_query($conn,$qry);  
                /*Show the rows in the fetched result set one by one*/ 
                $row = mysqli_fetch_row($result);
                $marksPercentage = $row[0];

                mysqli_free_result($result);
                mysqli_close($conn); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student | Dashboard</title>
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
  require('student_navbar.html');
?>
  
  
  	<div class="content-wrapper">
		<div class="content-header">
		  <div class="container-fluid">
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1 class="m-0 text-dark">Dashboard</h1>
			  </div><!-- /.col -->
			</div><!-- /.row -->
		  </div><!-- /.container-fluid -->
		</div>
		<section class="content">
      	<div class="container-fluid">
      		<div class="row">
			  <div class="col">
				<!-- small box -->
				<div class="small-box bg-info">
				  <div class="inner">
					<h3><?php echo $present?></h3>

					<p>Attendence</p>
				  </div>
				  <div class="icon">
					<i class="ion ion-person-add"></i>
				  </div>
<!--				  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
				</div>
			  </div>
			  <!-- ./col -->
			  <div class="col">
				<!-- small box -->
				<div class="small-box bg-success">
				  <div class="inner">
					<h3><?php echo $marksPercentage ?></h3>

					<p>Average Marks</p>
				  </div>
				  <div class="icon">
					<i class="ion ion-person-add"></i>
				  </div>
<!--				  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
				</div>
			  </div>
			  <!-- ./col -->
			  
			  <!-- ./col -->
			  <!-- ./col -->
			</div>
      	</div>
      	<br>
<!--
      	<div class="col-12">
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>		
	</div>
-->
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