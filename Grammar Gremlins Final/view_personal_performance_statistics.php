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
                      
                     <center> <h2>Personal Performance Statistics</h2></center><br>

                    <center>
                      
                      <?php

include("connect.php");
try{
    echo "</br>";
    /*** The SQL SELECT statement ***/
    $sql = "select questype,difficulty,count(quesid) as total,count(quesid) as outof , (count(quesid)/(select count(quesid) from questions where questype = 'part_of_speech')*100 ) as score from questions where quesid IN(select quesid from student_answer where studid=1) and questype = 'part_of_speech' group by difficulty";
    echo "<table>
            <tbody>
                <tr>
                    <p>Identifying Part of Speech</p>
                    <th>Level</th>
                    <th>Percentage Correct</th>

                <tr>                    
    ";
    
    foreach ($dbh->query($sql) as $row)
        {
				
            $val2 = $row['difficulty'];
            $val3 = $row['score'];
			$val4 = $row['total'];
			$val5 = $row['outof'];
            echo '<tr><td>';

            echo $val2;  
            echo '</td><td>';
            echo round($val3); echo '%'; echo '('; echo $val5; echo '/'; echo $val4; echo ')';
           
			
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
                      <br><br>
                      
                      
               
                        <?php

include("connect.php");
try{
    echo "</br>";
    /*** The SQL SELECT statement ***/
    $sql = "select questype,difficulty,count(quesid) as total,count(quesid) as outof , (count(quesid)/(select count(quesid) from questions where questype = 'synonyms')*100 ) as score from questions where quesid IN(select quesid from student_answer where studid=1) and questype = 'synonyms' group by difficulty";
    echo "<table>
            <tbody>
                <tr>
                    <p>Identifying Synonyms</p>
                    <th>Level</th>
                    <th>Percentage Correct</th>

                <tr>                    
    ";
    
    foreach ($dbh->query($sql) as $row)
        {
				
            $val2 = $row['difficulty'];
            $val3 = $row['score'];
			$val4 = $row['total'];
			$val5 = $row['outof'];
            echo '<tr><td>';

            echo $val2;  
            echo '</td><td>';
            echo $val3; echo '('; echo $val5; echo '/'; echo $val4; echo ')';
            echo '</td><td>';
			
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
                      <br><br>
                      <?php

include("connect.php");
try{
    echo "</br>";
    /*** The SQL SELECT statement ***/
    $sql = "select questype,difficulty,count(quesid) as total,count(quesid) as outof , (count(quesid)/(select count(quesid) from questions where questype = 'antonyms')*100 ) as score from questions where quesid IN(select quesid from student_answer where studid=1) and questype = 'antonyms' group by difficulty";
    echo "<table>
            <tbody>
                <tr>
                    <p>Identifying Antonyms</p>
                    <th>Level</th>
                    <th>Percentage Correct</th>

                <tr>                    
    ";
    
    foreach ($dbh->query($sql) as $row)
        {
				
            $val2 = $row['difficulty'];
            $val3 = $row['score'];
			$val4 = $row['total'];
			$val5 = $row['outof'];
            echo '<tr><td>';

            echo $val2;  
            echo '</td><td>';
            echo $val3; echo '('; echo $val5; echo '/'; echo $val4; echo ')';
            echo '</td><td>';
			
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
                         </center>
                         <br><br>
                       <center><a href="student_practice_mode.php"><input type="button" class="button" name="return_to_practice_mode_main_screen" value="Return to Practice Mode Main Screen"></a></center>                      
								  
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