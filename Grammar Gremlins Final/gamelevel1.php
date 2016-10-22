<?php

include_once("connect.php");


$form = $_POST;

$fname = $form['fname'];
$lno = $form['levelnumber'];
$levelup = $form['level_up_threshold'];
$leveldown = $form['level_down_threshold'];
$eans = $form['prop_easyans'];
$mans = $form['prop_medans'];
$hans = $form['prop_hardans'];




$sql = "INSERT INTO `gamelevel`(`levelnumber`, `level_up_threshold`, `level_down_threshold`, `prop_easyans`, `prop_medans`, `prop_hardans`) VALUES (:lno,:levelup,:leveldown,:eans,:mans,:hans)";
$STH = $dbh->prepare($sql);
 $STH->bindParam(":lno", $lno,PDO::PARAM_INT);
 $STH->bindParam(":levelup", $levelup,PDO::PARAM_INT);
 $STH->bindParam(":leveldown", $leveldown,PDO::PARAM_INT);
 $STH->bindParam(":eans", $eans,PDO::PARAM_INT);
 $STH->bindParam(":mans", $mans,PDO::PARAM_INT);
  $STH->bindParam(":hans", $hans,PDO::PARAM_INT);

$STH->execute(); 

?>