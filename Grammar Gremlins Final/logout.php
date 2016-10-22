<?php 

include("index.php");
 session_start();
 session_destroy();
 
  echo "<script type='application/javascript'>alert('Logout Successfully...');
		window.location = 'index.php';</script>";
?>

        