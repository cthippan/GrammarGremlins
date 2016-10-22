<?php
session_start();
if(!isset($_SESSION['teacher'])){
 header("Location: cjamlogin.php");
}
//error_reporting(0); 
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
.style5 {color: #3300FF}
-->
        </style>
<noscript><link rel="stylesheet" href="css/5grid/core.css" /><link rel="stylesheet" href="css/5grid/core-desktop.css" /><link rel="stylesheet" href="css/5grid/core-1200px.css" /><link rel="stylesheet" href="css/5grid/core-noscript.css" /><link rel="stylesheet" href="css/style.css" /><link rel="stylesheet" href="css/style-desktop.css" /></noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=55&amp;mobileUI.openerWidth=66"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script language="javascript" type="text/javascript" src="js/datetimepicker.js"></script>
<script language="javascript">

function enablestudent()
{
//alert("Function called");
	document.getElementById("student").disabled=false;
//	document.getElementById("subject").disabled=true;
//	document.getElementById("chapter").disabled=true;
}

function enablesubject()
{
//alert("Function called");
//	document.getElementById("student").disabled=true;
	document.getElementById("subject").disabled=false;
//	document.getElementById("chapter").disabled=true;
}

function enablechapter()
{
//alert("Function called");
//	document.getElementById("student").disabled=true;
//	document.getElementById("subject").disabled=true;
	document.getElementById("chapter").disabled=false;
}


function disablestudentcombo()
{
//alert("Function called");
	document.getElementById("student").disabled=true;

//
}

function disablesubjectcombo()
{
	document.getElementById("subject").disabled=true;
}

function disablechaptercombo()
{
		document.getElementById("chapter").disabled=true;
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
						  <nav class="mobileUI-site-nav"></nav>
						</header>
					</div>
				</div>
			</div>
		</div>
		<div id="none" >
          <div class="5grid-layout">
            <div class="row">
              <div class="12u">
                <h1>
                <p class="mobileUI-site-name"></h1>
                <nav class="mobileUI-site-nav">
                <marquee><p class="current-page-item" style="font-size:32px" >E D U C E L L</p>
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
				    <h2 class="style5">Report Generation </h2>
				    <hr>
					<form method="post" action="teacher_reportgen_php.php">
				    <table width="680" border="1" bgcolor="#E9E9E9" style="border-color:#000000" >
                      <tr align="justify">
                        <td width="175" align="left" valign="bottom">Date Range </td>
                        <td width="238" align="left" valign="bottom">From 
                        <input type="text" name="txtfrom" id="txtfrom"><script type="text/javascript" src="js/calendar-1.5.js"></script>
		<script type="text/javascript">
		var cal_2 = new Calendar({
			element: 'txtfrom',
			weekNumbers: true,
			startDay: 1,
			
			onOpen: function (element) {
				//do something
			}
		});
		</script></td>
                        <td width="245" align="left" valign="bottom">To
                        <input type="text" name="txtto" id="txtto"><script type="text/javascript" src="js/calendar-1.5.js"></script>
		<script type="text/javascript">
		var cal_2 = new Calendar({
			element: 'txtto',
			weekNumbers: true,
			startDay: 1,
			
			onOpen: function (element) {
				//do something
			}
		});
		</script></td>
                      </tr>
                      <tr>
                        <td height="47">Standard</td>
                        <td colspan="2"><select name="standard" id="standard">
						  		<?php
 

include_once("connection.php");
$result=mysql_query("SELECT distinct standard FROM teacher_subject_taken,standard where teacher_subject_taken.standardid=standard.stid and userid='$_SESSION[teacher]'" );

while($row = mysql_fetch_array($result))
  {
  echo "<option>" . $row['standard'] . "</option>";
  }
echo "</select>";
?>					
                          </select></td>
                      </tr>
                      <tr>
                        <td height="54">Student Wise </td>
                        <td colspan="2"><input name="radiostudent" type="radio" value="allstudent" onClick="disablestudentcombo()">
                          All 
                          <input name="radiostudent" type="radio" value="selectivestudent" onClick="enablestudent()">
                          Selective 
                          <select name="student" id="student" disabled="disabled" >
						  		<?php
 

include_once("connection.php");
$result=mysql_query("SELECT * FROM student_registration where teacher_id = '$_SESSION[teacher]'" );

while($row = mysql_fetch_array($result))
  {
  echo "<option>" . $row['userid'] . "</option>";
  }
echo "</select>";
?>					
                          </select>                        </td>
                      </tr>
                      <tr>
                        <td height="51">Subject Wise </td>
                        <td colspan="2"><input name="radiosubject" type="radio" value="allsubject" onClick="disablesubjectcombo()">
All
  <input name="radiosubject" type="radio" value="selectivesubject" onClick="enablesubject()">
Selective
<select name="subject" id="subject" disabled="disabled">
						  		<?php
 

include_once("connection.php");
$result=mysql_query("SELECT * FROM teacher_subject_taken,subject where teacher_subject_taken.subjectid=subject.subjectid and userid='$_SESSION[teacher]'" );

while($row = mysql_fetch_array($result))
  {
  echo "<option>" . $row['subject'] . "</option>";
  }
echo "</select>";
?>					
</select></td>
                      </tr>
                      <tr>
                        <td height="56">Chapter Wise </td>
                        <td colspan="2"><input name="radiochapter" type="radio" value="allchapters" onClick="disablecombo()">
All
  <input name="radiochapter" type="radio" value="selectivechapter" onClick="enablechapter()">
Selective
<select name="chapter" id="chapter" disabled="disabled">
<option>chapter1</option>
<option>chapter2</option>
<option>chapter3</option>
<option>chapter4</option>
<option>chapter5</option>
<option>chapter6</option>
<option>chapter7</option>
<option>chapter8</option>
<option>chapter9</option>
<option>chapter10</option>
</select></td>
                      </tr>
                      <tr>
                        <td height="28">&nbsp;</td>
                        <td colspan="2"><p>
                          <input type="submit" name="Submit" value="Generate Report">
                        </p></td>
                      </tr>
                    </table>
			</form>
				    <p><a href="cjamindex.php">Admin Home</a> </p>
			      </div>
		</div>
	  </div>
		</div>
		<div id="footer-wrapper"><div class="5grid-layout"><div class="row"><div class="8u"><section>
		  <div class="5grid">
								<div class="row">
								  <div class="3u"></div>
								</div>
		  </div>
						</section>
					
					</div>
					</div>
		<div class="row">
					<div class="12u">

						
					</div>
		  </div>
			</div>
		</div>
		
	<!-- ********************************************************* -->
	</body>
</html>