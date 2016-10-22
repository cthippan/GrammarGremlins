<?php  
include("connect.php");
$username=$_GET['username'];
$levelupthreshold=$_GET['levelupthreshold'];
	   $sql = "UPDATE `student_registration` SET `lifetimescore`= :lifetimescore WHERE `fname`= :username ";
       echo $sql;
$STH = $dbh->prepare($sql);

 $STH->bindParam(":username", $username,PDO::PARAM_STR);
  $STH->bindParam(":lifetimescore", $levelupthreshold,PDO::PARAM_INT);
	$STH->execute();   
  ?>