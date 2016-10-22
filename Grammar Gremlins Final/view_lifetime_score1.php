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
<noscript><link rel="stylesheet" href="css/5grid/core1.css" /><link rel="stylesheet" href="css/5grid/core-noscript.css" /><link rel="stylesheet" href="css/style1.css" /></noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=65&amp;mobileUI.openerWidth=76"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style>
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
</style>
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
                          <center>            
						  <h2>Top 10 Lifetime Scores </h2><br>
         
						 
                         <?php

include_once("connect.php");
try{
    echo "</br>";
    /*** The SQL SELECT statement ***/
  //  $sql = "select student_registration.student_id,student_registration.fname,student_registration.lifetimescore,gamelevel.studid,gamelevel.levelnumber from student_registration,gamelevel where student_registration.student_id=gamelevel.studid ORDER BY gamelevel.levelnumber DESC limit 10";
    
	$sql= "select fname,lifetimescore from student_registration order by lifetimescore DESC limit 10";
	
	echo "<table border='1' style='width:40%'>
            <tbody>
                <tr bgcolor='#CCCCCC'>
                    
                    <th >Name</th>
                    <th>Lifetime Score</th>

                <tr>                    
    ";
    
    foreach ($dbh->query($sql) as $row)
        {
				
            $val2 = $row['fname'];
			$val1 = $row['lifetimescore'];
            echo '<tr><td align="center">';

            echo $val2;  
            echo '</td><td align="center">';
            echo $val1;
            echo '</td></tr>';
			
        //print $row['test_id'] .' - '. $row['test_name'] . ' - '.$row['test_add'] .'<br />';
        }

    /*** close the database connection ***/
    $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	  echo '</table>';
                         ?>
                         
 <br><br>                        <a href="teacher_main_dashboard.php"><input type="button" class="button" name="return_to_game_mode_main_screen" value="Return to Main Dashboard"></a>
      		
</center>                      
								  <td 
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