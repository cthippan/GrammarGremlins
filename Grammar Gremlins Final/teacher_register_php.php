<?php
session_start();
//if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
// header("Location: cjamlogin.php");

//} 
$test=0;
//$usr=$_SESSION['usr'];
//echo $usr;
include_once("connection.php");

if ( $_POST['txtusername'] == "" or $_POST['txtname'] == "" )
{
	header("location:superunsuccess.php");
}
else
{
	if(isset($_POST['allsub']))
	{
	if($_POST['allsub'] == 'yes')
	$test=1;
	}
	
	
	//$strdate = date('Y-m-d', strtotime('+2 day'));
	$originalDate = $_POST['txtvalidtill'];
	$newDate = date("Y-m-d", strtotime($originalDate));

	if($newDate > date("Y-m-d"))
	{
		$sql="INSERT INTO login_master(userid,password,institute_name,admin_name,validtill,no_of_users)VALUES('$_POST[txtusername]','$_POST[txtpassword]','$_POST[institute]','$_POST[txtname]','$newDate','$_POST[noofusers]')";
		if (!mysql_query($sql,$con))
		    {
				header("location:superunsuccess.php");
			}
			else 
			{
				if ($test == 1)
				{
					
					include_once("connection.php");

echo $_FILES["file"]["tmp_name"];
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {

include("connection.php");
$filename=$_FILES["file"]["name"];
if(move_uploaded_file($_FILES["file"]["tmp_name"],'/images/'.$filename))
{
$filepath="images/institute/".$filename;
echo $filepath;
if(mysql_query("insert into institute_logo_master values('1','$filepath')"))
echo "upload successful";
else
echo "upload unsuccessful";
}
}



					$result=mysql_query("select distinct stid from standard where standard = '$_POST[txtstd]'");
					while($row = mysql_fetch_array($result))
					$stid = $row['stid'];
					$result1 = mysql_query("SELECT distinct subjectid FROM subject where subject.standardid='$stid'");
					while($row = mysql_fetch_array($result1))
							{
								//	echo $_POST['txtusername']; 
								//	echo $row['subjectid'];
							//	echo "insert into subject_taken (userid,subjectid) values ($_POST[txtusername],$row[subjectid])";
								mysql_query("insert into teacher_subject_taken (userid,subjectid,standardid) values ('$_POST[txtusername]','$row[subjectid]',$stid)");
					
					 		}
				
						//header("location:supersuccess.php");
				  }
				  else
				  header("location:teacher_subjectalloc.php?id=$_POST[txtusername]");
			 }
			
	}
//		else
//			header("location:superunsuccess.php");

}
//	header("location:superunsuccess.php");		

?>
