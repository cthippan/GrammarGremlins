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
<html><head>
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
       
</style>
<noscript><link rel="stylesheet" href="css/5grid/core.css" /><link rel="stylesheet" href="css/5grid/core-noscript.css" /><link rel="stylesheet" href="css/style.css" /></noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=65&amp;mobileUI.openerWidth=76"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
         <style>
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}</style>
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
                      <p align="right" style="">Player: <?php echo "$val1" ?></p>
                      
                     <center> <h2>Personal Performance Statistics</h2></center><br>

               
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                      
                      <div>
                      <div style="float:left;width:50%">
                      <?php

include("connect.php");
try{
   
    /*** The SQL SELECT statement ***/
    $sql = "select questype,difficulty,count(quesid) as total,count(quesid) as outof , (count(quesid)/(select count(quesid) from questions where questype = 'part_of_speech')*100 ) as score from questions where quesid IN(select quesid from student_answer where studid=1) and questype = 'part_of_speech' group by difficulty";
   
    echo " <center>
	<table style='border:#000000;width:60%;' bgcolor='#F7F2F2'> 
           
                <tr align='center'  bgcolor='#FCFCFC'>
                    <p><strong >Identifying Part of Speech</strong></p>
                    <th>Level</th>
                    <th  >Percentage Correct</th>

                </tr>                    
    ";
    
    foreach ($dbh->query($sql) as $row)
        {
				
            $val2 = $row['difficulty'];
            $val3 = $row['score'];
			$val4 = $row['total'];
			$val5 = $row['outof'];
            echo '<tr bgcolor="#FCFCFC" align="center" ><td>';

            echo $val2;  
            echo '</td><td>';
            echo round($val3); echo '%'; echo '('; echo $val5; echo '/'; echo $val4; echo ')';
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
	  echo '</table></center>';
                         ?>
                      
                      </div>
                     
                      <div style="float:left;width:50%">
                     
                    
               
                        <?php

include("connect.php");
try{
   
    /*** The SQL SELECT statement ***/
   $sql = "select questype,difficulty,count(quesid) as total,count(quesid) as outof , (count(quesid)/(select count(quesid) from questions where questype = 'synonyms')*100 ) as score from questions where quesid IN(select quesid from student_answer where studid=1) and questype = 'synonyms' group by difficulty";
   
    echo " <center>
	<table style='border:#000000;width:60%;' bgcolor='#F7F2F2'> 
           
                <tr align='center'  bgcolor='#FCFCFC'>
                    <p><strong >Identifying Synonyms</strong></p>
                    <th>Level</th>
                    <th  >Percentage Correct</th>

                </tr>                    
    ";
    
    foreach ($dbh->query($sql) as $row)
        {
				
            $val2 = $row['difficulty'];
            $val3 = $row['score'];
			$val4 = $row['total'];
			$val5 = $row['outof'];
            echo '<tr bgcolor="#FCFCFC" align="center" ><td  >';

            echo $val2;  
            echo '</td><td>';
            echo round($val3); echo '%'; echo '('; echo $val5; echo '/'; echo $val4; echo ')';
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
	  echo '</table></center>';
                         ?>
                         
                         <br><br><br><br>
                        </div> 
                        
                       </div>
               
               
               
               
               
               
               
               
               
              
                
                  
            
                          
                     
                      
                     
                                   
							  
					  </section>
                     
                                     <section>
                      <div style="float:right;width:50%">
                      <?php

include("connect.php");
try{
   
    /*** The SQL SELECT statement ***/
   
   
    echo " <center>
	<table style='border:#000000;width:60%;' bgcolor='#F7F2F2'> 
           
                <tr align='center'  bgcolor='#FCFCFC'>
                    <p><strong >Total</strong></p>
                    <th>Level</th>
                    <th  >Percentage Correct</th>

                </tr>                    
    ";
    
    foreach ($dbh->query($sql) as $row)
        {
				
            $val2 = $row['difficulty'];
            $val3 = $row['score'];
			$val4 = $row['total'];
			$val5 = $row['outof'];
            echo '<tr bgcolor="#FCFCFC" align="center" ><td  >';

            echo $val2;  
            echo '</td><td>';
            echo round($val3); echo '%'; echo '('; echo $val5; echo '/'; echo $val4; echo ')';
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
	  echo '</table></center>';
                         ?>
                      
                      
                      
                      
                      </div>
                      
                      </section>
                     
                     
                      
                      <section>
                      <div>
                      <div style="float:right;width:50%">
                      <?php

include("connect.php");
try{
   
    /*** The SQL SELECT statement ***/
   $sql = "select questype,difficulty,count(quesid) as total,count(quesid) as outof , (count(quesid)/(select count(quesid) from questions where questype = 'antonyms')*100 ) as score from questions where quesid IN(select quesid from student_answer where studid=1) and questype = 'antonyms' group by difficulty";
   
    echo " <center>
	<table style='border:#000000;width:60%;' bgcolor='#F7F2F2'> 
           
                <tr align='center'  bgcolor='#FCFCFC'>
                    <p ><strong >Identifying Antonyms</strong></p>
                    <th>Level</th>
                    <th  >Percentage Correct</th>

                </tr>                    
    ";
    
    foreach ($dbh->query($sql) as $row)
        {
				
            $val2 = $row['difficulty'];
            $val3 = $row['score'];
			$val4 = $row['total'];
			$val5 = $row['outof'];
            echo '<tr bgcolor="#FCFCFC" align="center" ><td  >';

            echo $val2;  
            echo '</td><td>';
            echo round($val3); echo '%'; echo '('; echo $val5; echo '/'; echo $val4; echo ')';
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
	  echo '</table></center>';
                         ?>
                      
                      
                      
                      
                      </div>

                       </div>
                      </section>
                      
                      
                      
                       <section> 
		<div style="margin-top:20px"><center>
                          <a href="student_practice_mode.php"><input type="button" class="button" name="return_to_practice_mode_main_screen" value="Return to Practice Mode Main Screen"></a> </center> </div></section>
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