<?php
session_start();
if(!isset($_SESSION['teacher'])){
 header("Location: cjamlogin.php");
} 

error_reporting(0);
ob_start();

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
.style4 {
	font-family: "Lucida Handwriting";
	font-size: 30px;
}
-->
        </style>
<noscript><link rel="stylesheet" href="css/5grid/core.css" /><link rel="stylesheet" href="css/5grid/core-desktop.css" /><link rel="stylesheet" href="css/5grid/core-1200px.css" /><link rel="stylesheet" href="css/5grid/core-noscript.css" /><link rel="stylesheet" href="css/style.css" /><link rel="stylesheet" href="css/style-desktop.css" /></noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=55&amp;mobileUI.openerWidth=66"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script>
	    function PrintDiv1() 
 		{    
           //var divToPrint = document.getElementById('main');
           //var popupWin = window.open();
           //popupWin.document.open();
           //popupWin.document.write('<html><body onload="window.print();">' + divToPrint.innerHTML + '</html>');
           //window.print();
		   //popupWin.document.close();
		   
        }
	

</script>


<script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
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
<table>
<tr><td>
<img src="images/Edumedia logo_small.gif" alt="" width="100" height="80"> </td>
<td>
				    <h2>Report Generation </h2>
</td>
</tr>
</table>
					<hr>

					
					<p><?php 
					include_once("connection.php");
					$data = array();
					$inv = array();
					$max = 0;
					echo "<table width='300'>
					<tr><td> Report From </td><td>".$_POST['txtfrom']."&nbsp;&nbsp; to Date &nbsp; ".$_POST['txtto']."<br></td></tr>";
					echo "<tr><td>Standard  </td><td>".$_POST['standard']."</td></tr>";
//					echo "<tr><td>For  </td><td>".$_POST['radiostudent']."</td></tr>";

					if ($_POST['radiochapter'] == "allchapters") 
					$chapter="%";
					else
					if (isset($_POST['chapter']))
					$chapter=$_POST['chapter'];
					else
					$chapter="%";
					
					if ($_POST['radiosubject'] == "allsubject")
					$subject="%";
					else
					if (isset($_POST['subject']))
					$subject=$_POST['subject'] ;
					else
					$subject="%";
					
					if ($_POST['radiostudent'] == "allstudent")
					$student = "%";
					else
					if (isset($_POST['student']))
					$student=$_POST['student'];
					else
					$student="%";
					if($student == '%')
					echo "<tr><td>Students </td><td>All</td></tr>";
					else
					echo "<tr><td>Students </td><td>".$student."</td></tr>";

					if($subject == '%')
					echo "<tr><td>Subject </td><td>All</td></tr>";
					else
					echo "<tr><td> Subject </td><td>".$subject."</td></tr>";

					if($chapter == '%')
					echo "<tr><td>Chapter </td><td>All</td></tr>";
					else

					echo "<tr><td>Chapter </td><td>".$chapter."</td></tr>";
					echo "</table>";

					$std=$_POST['standard'];
					
					$result = mysql_query("SELECT * FROM teacher_subject_taken,standard where teacher_subject_taken.standardid=standard.stid and userid='$_SESSION[teacher]'");
					
					while($row = mysql_fetch_array($result))
					{
						 $std=$row['stid'];
  				    } 
					$fromdate=strtotime($_POST['txtfrom']);
					$todate=strtotime($_POST['txtto']);
					$datefrom=date('Y-m-d',$fromdate);
					$dateto=date('Y-m-d',$todate);

$sql="select * from test_history where std like '$_POST[standard]' and chap like '$chapter' and subject like '$subject' and userid in (select userid from student_registration where teacher_id = '$_SESSION[teacher]' and userid like '$student' ) and date between '$datefrom' and '$dateto' order by userid,date";

$result=mysql_query($sql);

echo "<p><table id = 'reporttable' border='1' width=800 align='justify'>
<tr bgcolor='#dddddd'>
<th> User Id </th>
<th>Correct </th>
<th>InCorrect </th>
<th>Not Ans </th>
<th>Total </th>					
<th>Percent </th>															
<th>Time Taken </th>
<th>Date * </th>										
</tr>";



	while($row = mysql_fetch_array($result))
	  {
		$data[] = $row['incorrect'];
		$inv[] = $row['userid'];
	  echo "<tr align='center' style='border-bottom:1pt solid grey;'>";
	  echo "<td>" . $row['userid'] . "</td>";
	  echo "<td>" . $row['correct'] . "</td>";
	  echo "<td>" . $row['incorrect'] . "</td>";
	  echo "<td>" . $row['notans'] . "</td>";
 	  echo "<td>" . $row['total'] . "</td>";					  					  					  
	  echo "<td>" . $row['percent'] . "</td>";
	  echo "<td>" . $row['timetaken'] . "</td>";
	  echo "<td>" . $row['date'] . "</td>";					  					  					  
	  echo "</tr>";
	  }
	  echo "</table> </p>";

	if(mysql_num_rows($result)==0)
	echo "<font color='red'> No data exists for this query </font>";
?></p>
<input type="button" onclick="tableToExcel('reporttable', 'Report')" value="Export to Excel">
					<hr>
				    <p><a href="cjamindex.php">Admin Home</a> <p> * Date and time are as at Ontario Canada </p></p>
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

						<div id="copyright">
							&copy; Jamnadas Publishing House 2013. All rights reserved. | Design: <a href="http://www.vqube.co.in">Virtual Qube Technologies</a></div>

					</div>
		  </div>
			</div>
		</div>
		
	<!-- ********************************************************* -->
	</body>
</html>