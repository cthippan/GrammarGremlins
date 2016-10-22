<?php
include_once("connect.php");


$form = $_POST;
$id = $form['student_id'];
$fname = $form['fname'];
$lname = $form['lname'];
$password = $form['password'];
$cpassword = $form['cpassword'];

$sql = "UPDATE `student_registration` SET `fname`= :fname,`lname`= :lname, `password`= :password, `cpassword`= :cpassword WHERE `student_id`= :id ";
                                
$STH = $dbh->prepare($sql);
 $STH->bindParam(":id", $id,PDO::PARAM_INT);
 $STH->bindParam(":fname", $fname,PDO::PARAM_STR);
 $STH->bindParam(":lname", $lname,PDO::PARAM_STR);
  $STH->bindParam(":password", $password,PDO::PARAM_STR);
   $STH->bindParam(":cpassword", $cpassword,PDO::PARAM_STR);
$STH->execute();

 echo "<script type='application/javascript'>alert('Record Updated Successfully. And It will Logout...');
		window.location = 'logout.php';</script>";
?>