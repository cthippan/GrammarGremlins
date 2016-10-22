<?php
include_once("connect.php");
include("add_class.php");
$txthidden=$_POST['txthidden1'];
if($_POST['txthidden1']=='0')
{
$form = $_POST;
$txthidden = $form['txthidden'];
$classname = $form['classname'];
//$id = $form['id'];

//if ($password == $cpassword)
//{

$sql = "INSERT INTO `class`(`classname`) VALUES (:classname)";
$STH = $dbh->prepare($sql);
 $STH->bindParam(":classname", $classname,PDO::PARAM_STR);

$STH->execute(); 




 
        for($j=1;$j<=$txthidden-1;$j++)
		{
		$form = $_POST;
		$queary=$form['id'.$j.''];
		

           // $servicename = $_POST["servicename"][$key];
            //$price = $_POST["price"][$key];

            $sql1 = "UPDATE student_registration SET classid=:cid WHERE email=:email";
			
			$STH1 = $dbh->prepare($sql1);
$STH1->bindParam(":cid", $classname,PDO::PARAM_STR);
 $STH1->bindParam(":email", $queary,PDO::PARAM_STR);

$STH1->execute();
}
 echo "<script type='application/javascript'>alert('Record Added Successfully...');
		window.location = 'add_class.php';</script>";
			}
			else
			{
		$form = $_POST;
$txthidden1 = $form['txthidden1'];
$classname = $form['classname'];
//$id = $form['id'];

//if ($password == $cpassword)
//{

$sql = "INSERT INTO `class`(`classname`) VALUES (:classname)";
$STH = $dbh->prepare($sql);
 $STH->bindParam(":classname", $classname,PDO::PARAM_STR);

$STH->execute(); 




 
        for($j=1;$j<=$txthidden1;$j++)
		{
		$form = $_POST;
		$queary=$form['id'.$j.''];
		

           // $servicename = $_POST["servicename"][$key];
            //$price = $_POST["price"][$key];

            $sql1 = "UPDATE student_registration SET classid=:cid WHERE email=:email";
			
			$STH1 = $dbh->prepare($sql1);
$STH1->bindParam(":cid", $classname,PDO::PARAM_STR);
 $STH1->bindParam(":email", $queary,PDO::PARAM_STR);

$STH1->execute();
}
 echo "<script type='application/javascript'>alert('Record Added Successfully...');
		window.location = 'add_class.php';</script>";
			}