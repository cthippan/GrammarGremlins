<?php

session_start();
if(!isset($_SESSION['username'])){
 header("Location: index.php");
}
$val1=$_SESSION['username'];
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
		<script src="http://code.jquery.com/jquery-1.10.1.min.js" ></script>

<script>
$(document).ready(function(){
     event.preventDefault();

$("#start_resume_question_set").click(function(){
  window.location="get_practice.php?q=1";

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
                      <p align="right">Player: <?php echo "$val1" ?></p>
                      
                     <center> <h2>Practice Mode</h2></center><br>

                      <br><br>
                      <center><p>You must earn 100 gremlins to pass this question set.</p></center>
                      <br><br>
                      <center><input type="submit" class="button" id="start_resume_question_set"  name="start_resume_question_set"  value="Start/Resume Question Set"></center>
                      <br><br>
                       <center><a href="view_personal_performance_statistics2.php"> <input type="button" class="button"  name="view_personal_performance_statistics2" value="View Perosnal Performance Statistics"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="student_main_dashboard.php"><input type="button" class="button" name="return_to_home_screen" value="Return to Home Screen"></a></center>                      
								  
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