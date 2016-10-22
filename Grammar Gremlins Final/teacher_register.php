<?php
session_start();
if(!isset($_SESSION['super'])){
 header("Location: superlogin.php");
} 
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Grammar Gremlins</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="cjamfonts.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="js/themes/sky-blue/calendar.css" />
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
<script language="javascript" type="text/javascript" src="js/datetimepicker.js"></script>
<script type="text/javascript" src="js/calendar-1.5.min.js"></script>
<script type="text/javascript" src="js/calendar-1.5.min.js"></script>


<script type="text/javascript">
var cal_2 = new Calendar({
			element: 'txtvalidtill',
			weekNumbers: true,
			startDay: 1,
			minDate: new Date(new Date().getTime() - 60*60*24*1000),
			onOpen: function (element) {
		
			alert("date");

			}
		});
</script>

<script type="text/javascript">







function checkmobno()
{
    var n=document.getElementById("mobno1").value;
    if (n.length < 10)
    {

		document.getElementById("mobno1").focus();
//		document.getElementById("mobno1").clear();
//				document.getElementById("mobno1").value="";
        window.alert("Please check mobile number");
        return false;
    }
}

function checkmobno()
{
    var n=document.getElementById("mobno1").value;
    if (n.length < 10)
    {

		document.getElementById("mobno1").focus();
		//document.getElementById("mobno1").clear();
//				document.getElementById("mobno1").value="";
        window.alert("Please check mobile number");
        return false;
    }
	
}
function checkmobno1()
{
    var n=document.getElementById("mobno2").value;
    if (n.length < 10)
    {

		document.getElementById("mobno2").focus();
		//document.getElementById("mobno1").clear();
//				document.getElementById("mobno1").value="";
        window.alert("Please check mobile number");
        return false;
    }
	
}

function validateForm()
{
<!-- name text box validation -->
//alert("function called:");
var x=document.getElementById("txtname").value;
if (x==null || x=="")
  {
  alert(" name must be filled out");
  return false;
  }
 <!-- emailvalidation -->
var x1=document.getElementById("txtemailid").value;
var atpos=x1.indexOf("@");
var dotpos=x1.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x1.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
 else if (x1==null || x1=="")
  {
  alert(" name must be filled out");
  return false;
  }
 <!-- mobile number1 validation -->
 var x2=document.getElementById("mobno1").value
 if (x2==null || x2=="")
  {
  alert(" name must be filled out");
  return false;
  }
  else if(x2.length!=10)
  {
  alert(" Enter correct no");
  }
  <!-- mobile number2 validation -->
   var x3=document.getElementById("mobno2").value
 if (x3==null || x3=="")
  {
  alert(" name must be filled out");
  return false;
  }
  else if(x3.length!=10)
  {
  alert(" Enter correct no");
  }
   var x4=document.getElementById("mobno1").value
 if (x4==null || x4=="")
  {
  alert(" name must be filled out");
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
							<h1><a href="#" class="mobileUI-site-name ">Jamnadas Publishing House</a></h1>
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
						
				  <section>
				    <h2><img src="images/student.png" width="69" height="68">Teacher Registration </h2>
						  <form  action="teacher_register_php.php" method="post" onSubmit="validateForm()">
					    <table width="368" border="1">
                              <tr>
                                <td>UserId</td>
                                <td><input type="text" name="txtusername" id="txtusername"></td>
                              </tr>
                              <tr>
                                <td>Password</td>
                              <td><input type="password" name="txtpassword" id="txtpassword"/td>                              </tr>
                              <tr>
                                <td>Institute Name </td>
                                <td><input type="text" name="institute" id="institute"></td>
                              </tr>
                              <tr>
                                <td width="92">Admin Person </td>
                                <td width="236"><label>
                                  <input type="text" name="txtname" id="txtname">
                                </label></td>
                              </tr>
                              <tr>
                                <td>Standard</td>
                                <td><label>
                                  <select name="txtstd" id="txtstd">
								  <?php
								  include_once("connection.php");
										$result = mysql_query("select * from standard");
										while($row = mysql_fetch_array($result))
											{
											 echo"<option>".$row['standard']."</option>" ;
											 echo "<br>" ;
											 }
											   ?>
                                  </select>
                                  <input type="checkbox" name="allsub" value="yes" id="allsub">
                                  ALL subjects </label></td>
                              </tr>
                              <tr>
                                <td>Number of Users </td>
                                <td><input name="noofusers" type="text" id="noofusers"  maxlength="3"></td>
                              </tr>


                              <tr>
                                <td  align="left" valign="top"><label for="file">Upload Photo</label> </td>
                                <td align="left" valign="top"><input type="file" id="file" name="file"></td>
                              </tr>

                              <tr>
                                <td  align="left" valign="top">Valid Till</td>
                                <td align="left" valign="top"><input type="text" name="txtvalidtill" id="txtvalidtill">(yyyy-mm-dd) 
		<script type="text/javascript" src="js/calendar-1.5.js"></script>
		<script type="text/javascript">
		var cal_2 = new Calendar({
			element: 'txtvalidtill',
			weekNumbers: true,
			startDay: 1,
			minDate: new Date(new Date().getTime() - 60*60*24*1000),
			onOpen: function (element) {
				//do something
			}
		});
		</script>
                                  <input type="submit" name="Submit" value="Register">                                </td>
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

						

					</div>
				</div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>