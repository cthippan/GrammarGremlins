<?php
session_start();
if(!isset($_SESSION['super'])){
 header("Location: superlogin.php");
} 
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
.style2 {
	font-family: "Lucida Handwriting";
	font-size: 30px;
}
-->
        </style>
<noscript><link rel="stylesheet" href="css/5grid/core.css" /><link rel="stylesheet" href="css/5grid/core-desktop.css" /><link rel="stylesheet" href="css/5grid/core-1200px.css" /><link rel="stylesheet" href="css/5grid/core-noscript.css" /><link rel="stylesheet" href="css/style.css" /><link rel="stylesheet" href="css/style-desktop.css" /></noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=55&amp;mobileUI.openerWidth=66"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript">

function checkmobno()
{
    var n=document.getElementById("mobno1").value;
    if (n.length < 10)
    {

		document.getElementById("mobno1").focus();
		document.getElementById("mobno1").clear();
//				document.getElementById("mobno1").value="";
        window.alert("Please check mobile number");
        return false;
    }
}
</script>
	</head>
	<body class="container-fluid">
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid-layout">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a href="#" class="mobileUI-site-name">Jamnadas Publishing House</a></h1>
							<nav class="mobileUI-site-nav">
								<a href="index.php" class="current-page-item">Homepage</a>
								<a href="timetable.html">Time Table</a>
								<a href="twocolumn2.html">Latest Events</a>
								<a href="aboutus.html">About Us</a>
								<a href="contactus.html">Contact Us</a>
							</nav>
						</header>
					
					</div>
				</div>
			</div>
		</div><div id="none" >
			<div class="5grid-layout">
				<div class="row">
					<div class="12u">
					  <nav class="mobileUI-site-nav">
											<marquee>
								<p class="current-page-item" style="font-size:32px" >E D U C E L L</p>
								</marquee>
					  </nav>
					</div>
				</div>
			</div>
		</div>
		
		<div id="main">
			<div class="5grid-layout">
			  <div class="row main-row">
			    <div class="4u">
						
				  
						  <img src="images/contacts.png" width="97" height="94" align="absmiddle">
				  <section> <h2> Subject Allocation </h2>
						  <form action="teachersuballoc_php.php" method="post">
					    <table width="290" border="1">
                              <tr>
                                <td width="80">UserId</td>
                                <td width="248"><input type="text" name="txtusername" id="txtusername" value="<?php if(isset($_GET['id'])){ echo $_GET['id']; } else echo "";  ?>"></td>
                              </tr>
                              <tr>
                                <td height="33" align="left" valign="top"><p>Standard</p>                                </td>
                                <td align="left" valign="top"><p>
                                  <select name="standard" id="standard" >
                                    <?php
										include_once("connection.php");
										$result = mysql_query("SELECT * FROM standard");
										while($row = mysql_fetch_array($result))
											{
											 echo"<option>".$row['standard']."</option>";
											 echo "<br>" ;
											 }
											   ?>
                                  </select>
                                  <label></label>
                                  </p>                                </td>
                              </tr>
                              <tr>
                                <td height="69" align="left" valign="top">Subject</td>
                                <td align="left" valign="top"><p>
                                  <select name="subject" id="subject">
                                    <?php
										include_once("connection.php");
										$result = mysql_query("SELECT subject FROM subject");
										while($row = mysql_fetch_array($result))
											{
											 echo"<option>".$row['subject']."</option>";
											 echo "<br>" ;
											 }
											   ?>
                                  </select>
                                  </p>
                                  <p>
                                    <input type="submit" name="Submit" value="Register">
                                  </p></td>
                              </tr>
                            </table>
					    </form>
				    <p>
				      <footer class="controls"></footer>
				    </p>
				  </section>
			    </div>
			  </div>
			</div>
		</div>
		<div id="footer-wrapper"><div class="5grid-layout"><div class="row"></div>
				<div class="row">
					<div class="12u">

						<div id="copyright">&copy; Jamnadas Publishing House 2013. All rights reserved. | Design: <a href="http://www.vqube.co.in">Virtual Qube Technologies</a></div>

					</div>
				</div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>