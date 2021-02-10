<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
session_start(); 

if($_POST)
{
    if(isset($_POST['studentlogin']))
    {
        //session_unset();
        //session_unset();
        $username = $_POST['studentlogin'];
        $password = $_POST['studentpassword'];   
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
                  $qry = 'SELECT s_id,s_password FROM slogin WHERE '. $username .'= s_id'; 
                
                  /*Execute query*/ 
                  $result = mysqli_query($conn,$qry);  
                /*Show the rows in the fetched result set one by one*/ 
                    $row = mysqli_fetch_row($result);
                    if(!$row)
                    {
                        include('login_form.php');
                        session_unset(); 
                        session_start(); 
                        $_SESSION['login_credentials'] = 'INVALID LOGIN CREDENTIALS';
                        $_SESSION['username'] = null;
                    }
                    else if(($row[0] === $username) && ($row[1] === $password))
                    {
                        session_unset(); 
                        session_start(); 
                        $_SESSION['login_credentials'] = 'SUCCESSFUL LOGIN';
                        $_SESSION['username'] = $username;
                        header('location:student_dashboard.php');
                    }
                    else{                      
                        session_unset(); 
                        session_start(); 
                        $_SESSION['login_credentials'] = 'INVALID LOGIN CREDENTIALS';
                        $_SESSION['username'] = '';
                        include('login_form.php');
                        
                    }
                    
                
                mysqli_free_result($result);
                mysqli_close($conn);
                // } 
                // else{ 
                //   header('location:login_form.php'); 
                //   exit(); 
                // }

    }
    if(isset($_POST['teacherlogin']))
    {
        //session_unset();
        //session_unset();
        $username = $_POST['teacherlogin'];
        $password = $_POST['teacherpassword'];   
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
                  $qry = 'SELECT fac_id,fac_password FROM faclogin WHERE '. $username .'= fac_id'; 
                
                  /*Execute query*/ 
                  $result = mysqli_query($conn,$qry);  
                /*Show the rows in the fetched result set one by one*/ 
                    $row = mysqli_fetch_row($result);
                    if(!$row)
                    {
                        include('login_form.php');
                        session_unset(); 
                        session_start(); 
                        $_SESSION['login_credentials'] = 'INVALID LOGIN CREDENTIALS';
                        $_SESSION['username'] = null;
                    }
                    else if(($row[0] == $username) && ($row[1] == $password))
                    {
                        session_unset(); 
                        session_start(); 
                        $_SESSION['login_credentials'] = 'SUCCESSFUL LOGIN';
                        $_SESSION['username'] = $username;
                        header('location:teacher_dashboard.php');
                    }
                    else{                      
                        session_unset(); 
                        session_start(); 
                        $_SESSION['login_credentials'] = 'INVALID LOGIN CREDENTIALS';
                        $_SESSION['username'] = '';
                        include('login_form.php');
                        
                    }
                    
                
                mysqli_free_result($result);
                mysqli_close($conn);
                // } 
                // else{ 
                //   header('location:login_form.php'); 
                //   exit(); 
                // }

    }
    else{
        $_SESSION['username'] = '';
        $_SESSION['login_credentials'] = 'INVALID LOGIN CREDENTIALS';
        include('login_form.php');
        
    }
}
else{
    session_unset();
    session_destroy();
    include('login_form.php');
}

?>