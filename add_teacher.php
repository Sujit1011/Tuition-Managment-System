
<?php session_start();


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
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1 class="m-0 text-dark">Teacher Registration</h1>
			  </div><!-- /.col -->
			</div><!-- /.row -->
		  </div><!-- /.container-fluid -->
		</div>
		<section class="content">
      		<div class="container">
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
                  $fac_id=$_POST['fac_id'];
                  $f_name=$_POST['fac_fname'];
                  $m_name=$_POST['fac_mname'];
                  $l_name=$_POST['fac_lname'];
                  $gender=$_POST['gender'];
                  $phonenum=$_POST['phonenum'];
                  $email=$_POST['email'];




                  $qry_1 = "INSERT INTO faculty(fac_id,fac_fname,fac_mname,fac_lname,fac_gender,fac_phonenum,fac_email) VALUES($fac_id,'$f_name','$m_name','$l_name','$gender',$phonenum,'$email')";
                  $result_1 = mysqli_query($conn,$qry_1);
                  // print_r($qry_1);
                  if($result_1)
                    echo '<h2><b>Added Successfuly</b></h2>';
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
          <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="add_teacher.php" method="post">
                      <fieldset>
                      <div class="form-group">
                            <label class="col-md-4 control-label">Teacher ID</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fac_id" placeholder="First Name" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>   
                      <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fac_fname" placeholder="First Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Middle Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fac_mname" placeholder="Middle Name" class="form-control" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fac_lname" placeholder="Last Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name="gender">
                                     <option value="M">Male</option>
                                     <option value="F">Female</option>
                                  </select>
                               </div>
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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phonenum" placeholder="Phone Number" class="form-control" required="true" value="" type="tel"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><button type="submit" class="btn btn-success" name="s_register" value="Login">Register</button></div>
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