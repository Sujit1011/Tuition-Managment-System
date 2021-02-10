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
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
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
		<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Courses Details Table</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>Course ID</th>
                      <th>Course Name</th>
                      <th>Teacher Name</th>
                      <th>Teacher E-Mail</th>                      
                      <th>Day</th>
                      <th>Time</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php   
                  // if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
                  // require('login_form.php'); 
                
                  /*Connect to mysql server*/ 
                  $conn = mysqli_connect('localhost', 'root', '','tutioncenter');  
                
                  /*Check link to the mysql server*/ 
                  if (mysqli_connect_errno())
                  {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }
                
                  /*Create query*/ 
                  $qry = 'SELECT courses.c_id, c_name, fac_fname , fac_email, classdetails.day, classdetails.time
                            FROM faculty,courses,classdetails 
                            WHERE courses.fac_id = faculty.fac_id
                              AND courses.c_id = classdetails.c_id'; 
                
                  /*Execute query*/ 
                  $result = mysqli_query($conn,$qry);  
                /*Show the rows in the fetched result set one by one*/ 
                while ($row = mysqli_fetch_row($result))
                { 
                    // print_r($row);
                    echo '<tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                    <td>'.$row[4].'</td>
                    <td>'.$row[5].'</td> 
                    <td>'.$row[6].'</td>
                    </tr>'; 
                }
                mysqli_free_result($result);
                mysqli_close($conn);
                // } 
                // else{ 
                //   header('location:login_form.php'); 
                //   exit(); 
                // }
                ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
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