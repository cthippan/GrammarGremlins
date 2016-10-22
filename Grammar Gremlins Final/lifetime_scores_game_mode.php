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
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
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
                      <p align="right">Player: Booby Tables</p>
                      
                  <center><h2>Top 10 Lifetime Scores</h2></center>                     
                  <br>
                <center> <table border="1">
                  <tr>
                  <td bgcolor="#CCCCCC">Name &nbsp;&nbsp;</td>
                  <td bgcolor="#CCCCCC">Level &nbsp;&nbsp;</td>
                  <td bgcolor="#CCCCCC">Lifetime Score &nbsp;&nbsp;</td>
                  </tr>
                  <tr>
                  <td align="center">Henri</td>
                  <td align="center">20</td>
                  <td align="center">4400</td>
                  </tr>
                  <tr>
                  <td align="center">Mark</td>
                  <td align="center">18</td>
                  <td align="center">3500</td>
                  </tr>
                  <tr>
                  <td align="center">Katie</td>
                  <td align="center">16</td>
                  <td align="center">2840</td>
                  </tr>
                  </table></center>
                  <br><br><br><br><br><br><br><br>

                  <center><button name="return_game_mode_main_screen" class="button">Return to Game Mode Main Screen</button></center>
                  
                  <br><br><br>								  
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