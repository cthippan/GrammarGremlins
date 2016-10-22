<?php
require_once("connect.php");
$id=$_POST['username'];
session_start();
$_SESSION['username']=$id;

if($_POST){
 $errMsg = '';
 //username and password sent from Form
  $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
 
 if($username == '')
 $errMsg .= 'You must enter your Username<br>';
 
 if($password == '')
 $errMsg .= 'You must enter your Password<br>';
 
 
 if($errMsg == ''){
	 $query = $dbh->prepare('SELECT * FROM student_registration WHERE fname=:id and password=:password');
	
	  $query->execute(array(':id' => $_POST['username'], 
                  ':password'  => $_POST['password'])); 					   
		 $count  = $query->rowCount();				   
  
 if($count==1)
{
	  $result         = $query->fetch(PDO::FETCH_ASSOC);
	 // $_SESSION['lifetimescore']=$result['lifetimescore'];
	//  $_SESSION['classid']=$result['classid'];
	
		 
            
	   
	    header("location:student_main_dashboard.php");   
        exit;   
	   
	 
 
  } else{
	
 if($errMsg == ''){
	 $query = $dbh->prepare('SELECT * FROM teacher_registration WHERE fname=:id and password=:password');
	
	  $query->execute(array(':id' => $_POST['username'], 
                  ':password'  => $_POST['password'])); 					   
		 $count  = $query->rowCount();				   
  
 if($count==1)
{
	  $result         = $query->fetch(PDO::FETCH_ASSOC);
	   
	
		 
            
	   
	    header("location:teacher_main_dashboard.php");   
        exit;   
	   
	 
 
  } else{
	  
	  $errMsg .= 'Incorrect username / password combination! <br>';
	  echo "<script type='text/javascript'>alert('Wrong username and password'); window.location = 'index.php' </script>";
	
 
 
  }
 }
 
  }
 }
 }

?>

    
