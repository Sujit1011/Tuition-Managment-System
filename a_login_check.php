<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
session_start(); 

if($_POST)
{
    if(isset($_POST['login']))
    {
        //session_unset();
        //session_unset();
        $username = $_POST['login'];
        $password = $_POST['password'];   
                  // if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
                  // require('login_form.php'); 
                
                  /*Connect to mysql server*/ 
                  if(($username === 'admin') && ($password === 'adminpassword'))
                    {
                        session_unset(); 
                        session_start(); 
                        $_SESSION['login_credentials'] = 'SUCCESSFUL LOGIN';
                        $_SESSION['username'] = $username;
                        header('location:hello.php');
                    }
                    else{                      
                        session_unset(); 
                        session_start(); 
                        $_SESSION['login_credentials'] = 'INVALID LOGIN CREDENTIALS';
                        $_SESSION['username'] = '';
                        include('admin_login_form.php');
                        
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
        include('admin_login_form.php');
        
    }
}
else{
    session_unset();
    session_destroy();
    include('admin_login_form.php');
}

?>