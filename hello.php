<?php
session_start();



  
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
                //   $sid=$_POST['s_id'];
                //   $f_name=$_POST['f_name'];
                //   $m_name=$_POST['m_name'];
                //   $l_name=$_POST['l_name'];
                //   $gender=$_POST['gender'];
                //   $dob=$_POST['dob'];
                //   $address=$_POST['address'];
                //   $phonenum=$_POST['phonenum'];
                //   $email=$_POST['email'];

                //   $g_name=$_POST['g_name'];
                //   $gphone=$_POST['gphone'];





				  $qry_1 = 'SELECT COUNT(s_id) FROM sprofile';
				  $qry_2 = 'SELECT COUNT(fac_id) FROM faculty'; 
                  // $qry_2 = 'INSERT INTO sguardian VALUES('$sid','$g_name','$gphone')'; 
                  $result_1 = mysqli_query($conn,$qry_1);
                  $result_2 = mysqli_query($conn,$qry_2);
				
				$noOfStudents =  mysqli_fetch_row($result_1);
				$noOfTeachers = mysqli_fetch_row($result_2);
				  //   $cid = implode(",",$_POST['courses']);

                  // print_r($cid);
                //   for ($i=0; $i < sizeof($cid); $i++) { 
                //     $qry_3 = 'INSERT INTO scourse VALUES('. $_POST['s_id'] . ',' . $cid[$i] .')';
                //     $result_3 = mysqli_query($conn,$qry_3);
                //   }
                //   if($result_1 && $result_2 && $result_3)
                //     echo '<h2><b>Added Successfuly</b></h2>';
                  /*Execute query*/ 
                  // $result = mysqli_query($conn,$qry_1);  
                    /*Show the rows in the fetched result set one by one*/ 

                             
                        //      else{ 
                        //       header('location:login_form.php'); 
                        //    exit(); 
                            // }  
            

?>





<!DOCTYPE html>
<html>
<head>
<?php
  require('admin_files.html');
?> 
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
			  <div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
				  <div class="inner">
					<h3><?php  echo $noOfStudents[0] ?></h3>

					<p>Total Students</p>
				  </div>
				  <div class="icon">
					<i class="ion ion-person-add"></i>
				  </div>
<!--				  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
				</div>
			  </div>
			  <!-- ./col -->
			  <div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
				  <div class="inner">
					<h3><?php  echo $noOfTeachers[0] ?></h3>

					<p>Total Teachers</p>
				  </div>
				  <div class="icon">
					<i class="ion ion-person-add"></i>
				  </div>
<!--				  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
				</div>
			  </div>
			  <!-- ./col -->
			  
			</div>
			
			  <!-- ./col -->
			  <!-- ./col -->
			</div>
      	</div>
      	<br>
      	
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
<?php
	mysqli_free_result($result_1);
	mysqli_free_result($result_2);
	mysqli_close($conn);
?>