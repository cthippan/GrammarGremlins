<?php
include("connect.php");

$form = $_POST;
$setname = $form['setname'];
$classid = $form['classid'];
$passingscore = $form['passingscore'];
$date_created=date("Y-m-d");

$sql = "INSERT INTO questionset(setname, passingscore,date_created,classid) VALUES (:setname,:passingscore,:date_created,:classid)";
$STH = $dbh->prepare($sql);
 $STH->bindParam(":setname", $setname,PDO::PARAM_STR);
 $STH->bindParam(":passingscore", $passingscore,PDO::PARAM_INT);
  $STH->bindParam(":date_created", $date_created,PDO::PARAM_STR);
   $STH->bindParam(":classid", $classid,PDO::PARAM_INT);
 
$STH->execute(); 
/*echo "<script type='application/javascript'>alert('Record has been inserted....!');
		window.location = 'view.php'; </script>"; */


 ?>

