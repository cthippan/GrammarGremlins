<?php

session_start();
if(!isset($_SESSION['username'])){
 header("Location: index.php");
}
include("connect.php");
$val1=$_SESSION['username'];

 $query = $dbh->prepare('SELECT * FROM student_registration WHERE fname=:id');
	
	  $query->execute(array(':id' => $val1)); 					   
		 $count  = $query->rowCount();				   
  
 if($count==1)
{
	  $result         = $query->fetch(PDO::FETCH_ASSOC);
	  $_SESSION['lifetimescore']=$result['lifetimescore'];
	  $_SESSION['classid']=$result['classid'];
}


$lifetimescore=$_SESSION['lifetimescore'];
$classid=$_SESSION['classid'];
//}
//echo "$val1";
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Grammar Gremlins</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="cjamfonts.css" rel="stylesheet">
		<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
        </style>
<noscript><link rel="stylesheet" href="css/5grid/core.css" /><link rel="stylesheet" href="css/5grid/core-noscript.css" /><link rel="stylesheet" href="css/style.css" /></noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=65&amp;mobileUI.openerWidth=76"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script>
$(document).ready(function(){
     event.preventDefault();

$("#start").click(function(){
  window.location="getques.php?q=1";

});
});

</script>	
		
		
	</head>
	<body class="container-fluid">
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid-layout">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a href="#" class="mobileUI-site-name">Grammar Gremlins</a></h1>
								
						</header>
					
					</div>
				</div>
			</div>
	<!--	</div><div id="none" >
			<div class="5grid-layout">
				<div class="row">
					<div class="12u">
					  <nav class="mobileUI-site-nav">
								<marquee>
								<p class="current-page-item" style="font-size:32px" >Grammar Gremlins!</p>
								</marquee>
					  </nav>
					</div>
				</div>
			</div>
		</div>-->
		
		<div id="main">
			<div class="5grid-layout">
				<div class="row main-row">
					<div class="4u">
						
					  <section>
                      <p align="right">Player:  <?php echo "$val1" ?> Class : <?php echo "$classid" ?> </p>
                      
                     <center> <h2>You are Entering Level -  
                         <?php

include_once("connect.php");
try{

if($_SESSION['lifetimescore']==0)
{
$val1=0;
echo $val1;
}
else
{
    $sql = "SELECT min(levelnumber) as maxlevel FROM gamelevel where level_up_threshold   > ".($_SESSION['lifetimescore']);
    
    foreach ($dbh->query($sql) as $row)
        {
				
            $val1 = $row['maxlevel'];
			//if($val1==0)
			//$val1=1;
           

			
        }
		echo $val1;
}

 $sql1 = "SELECT level_up_threshold,level_down_threshold FROM gamelevel where levelnumber = $val1" ;

    
    foreach ($dbh->query($sql1) as $row1)
        {
				
            $val2 = $row1['level_up_threshold'];
			$val3 = $row1['level_down_threshold'];
           

			
        }



    $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

                         ?> </h2></center><br>

                      <br><br>
                      <center><p>You must accrue the level-up threshold of <?php echo $val2; $_SESSION['levelupthreshold'] = $val1; ?> points to move up the next level.</p></center>
                      <center><p>Earning below the level-down threshold of <?php echo $val3; ?> points will move you down a level.</p></center>
                      <br><br>
                      <center> <p>Your Lifetime Score: <?php echo $lifetimescore; ?></p></center>
                      <br><br>
                       <center>
                         <input type="submit" class="button" id="start" name="start" value="Start">
                       </center><center><a href="view_lifetime_score.php"><input type="button" class="button"  name="view_top_10_lifetime_scores" value="View Top 10 Lifetime Scores"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="student_main_dashboard.php"> <input type="button" class="button" name="return_to_home_screen" value="Return to Home Screen"></a></center>                      
								  
					  </section>
		
        			</div>
			  </div>
		
        	</div>
		</div>
        
		<div id="footer-wrapper"><div class="5grid-layout"><div class="row"></div>
				<div class="row">
					<div class="12u">

						<div id="copyright"></div>

					</div>
				</div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>