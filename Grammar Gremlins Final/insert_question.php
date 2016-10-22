<?php
include("connect.php");

$form = $_POST;


$sql = "SELECT setid FROM questionset where setname=".$form['setname'];
foreach ($dbh->query($sql) as $row)
        {
            $val1 = $row['setid'];
		}
$setid=$val1;

$question = $form['question'];
$difficulty = $form['difficulty'];
$questype = $form['questype'];
$anschoice = $form['anschoice'];
$reschoice1 = $form['reschoice1'];
$reschoice2 = $form['reschoice2'];
$reschoice3 = $form['reschoice3'];
$reschoice4 = $form['reschoice4'];



$sql = "INSERT INTO questions( setid, question, difficulty, questype, anschoice,reschoice1,reschoice2,reschoice3, reschoice4) VALUES (:setid, :question, :difficulty, :questype, :anschoice,:reschoice1,:reschoice2,:reschoice3, :reschoice4)";
$STH = $dbh->prepare($sql);
 $STH->bindParam(":setid", $setid,PDO::PARAM_INT);
 $STH->bindParam(":question", $question,PDO::PARAM_STR);
  $STH->bindParam(":difficulty", $difficulty,PDO::PARAM_STR);
   $STH->bindParam(":questype", $questype,PDO::PARAM_STR);
  $STH->bindParam(":anschoice", $anschoice,PDO::PARAM_STR);
 $STH->bindParam(":reschoice1", $reschoice1,PDO::PARAM_STR);
  $STH->bindParam(":reschoice2", $reschoice2,PDO::PARAM_STR);
   $STH->bindParam(":reschoice3", $reschoice3,PDO::PARAM_STR);
   $STH->bindParam(":reschoice4", $reschoice4,PDO::PARAM_STR);
   
$STH->execute(); 
/*echo "<script type='application/javascript'>alert('Record has been inserted....!');
		window.location = 'view.php'; </script>"; */


 ?>

