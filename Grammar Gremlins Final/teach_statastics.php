<?php

session_start();
if(!isset($_SESSION['username'])){
 header("Location: index.php");
}

include('connect.php');
//echo $_GET['id'];
//$id = $_GET['id'];
//echo $id;
/*$val11=$_GET['id'];
try{
$sql1="select teacher_id from teacher_registration where fname='$val11'";
 foreach ($dbh->query($sql1) as $row)
        {
		 $val2 = $row['teacher_id'];

 $sql = "SELECT * FROM teacher_registration where teacher_id=$val2";
// $dbh = setFetchMode(PDO::FETCH_ASSOC);
//  foreach ($dbh->query($sql) as $row)
//        {

        $stmt = $dbh->prepare($sql);
  // $stmt->bindValue(":id", $id);
   
   $stmt->execute();
   $results = $stmt->fetchAll(); 
    }

    /*** close the database connection ***/
   /* $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    } */
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
 
	</head>
	<body class="container-fluid">
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid-layout">
				<div class="row">
					<div class="12u">
						
					  <header id="header">
							<h1><a href="#" class="mobileUI-site-name ">Grammer Gremlins</a></h1>
						  <nav class="mobileUI-site-nav"></nav>
						</header>
					</div>
				</div>
			</div>
		</div><div id="none" >
			<div class="5grid-layout">
				<div class="row">
					<div class="12u">
					  <nav class="mobileUI-site-nav">
								
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
						  <h2>Teacher View Student Statstics</h2><br>
						  <form action="teach_statastics1.php" method="POST">
                            
                              <table width="500" border="1">
                              <tr>
							  		    
                                <td >Select class</td> 
								<td align="left" valign="top"><p>
                                 
	<?php
	include("connect.php");							
	  try{
	
$sql1="select classname from class";
  echo  '<select name="standard" id="standard" >';
foreach ($dbh->query($sql1) as $row)
        {
		 $val2 = $row['classname'];
         echo "<option value='".$val2."'>" . $val2 . "</option>";
         }

    /*** close the database connection ***/
  $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	  echo  '</select>';
		   ?>
                               
								  </p>
								  </td>
								</tr>
								
								
								<tr>
							  		    
                                <td >Select Student</td> 
								<td align="left" valign="top"><p>
                                 
	<?php	
							  include("connect.php");
							  try{
$sql1="select fname,lname from student_registration";
echo  '<select name="student" id="student" 	>';
 foreach ($dbh->query($sql1) as $row1)
        {
		 $val3 = $row1['fname'];
		 $val4= $row1['lname'];
		 
         echo "<option value=".$val3.">".$val3."&nbsp;".$val4."</option>";
         }

    /*** close the database connection ***/
    $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	echo '</select>';
		   ?>
            
								  </p>
								  </td>
								</tr>
								
                                
                                
                              <tr>  <?php
							
							 
							   ?><td>
                                <br>
				 
                                <input type="submit" class="button" value="Get Student Report"> 
				 
                              </label></td>
								<td><br>
								<a href="teacher_main_dashboard.php"><input type="button" class="button" name="cancel" value="Cancel"></a>
								</td>
                              </tr>
                            </table> 
                             
								
                            
                               
					    </form>
                        
                        
                        <div id="data5">

                        
                        </div>
                        
                        
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