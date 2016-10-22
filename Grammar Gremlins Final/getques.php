<?php
session_start();
if(!isset($_SESSION['username'])){
 header("Location: index.php");
}
$val1=$_SESSION['username'];
$level=$_SESSION['levelupthreshold'];
$classid=$_SESSION['classid'];
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
table {
    
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}



body {
   
}

.container {
  margin-top: 0px;
  padding-top: 0px;
  background-color: #beb;
  width:auto;
}

.vertical {
  display: inline-block;
  width: 20%;
  height: 40px;
/* -webkit-transform: rotate(-90deg);
   
  
  transform: rotate(-90deg);*/
}

.vertical {
  box-shadow: inset 0px 4px 6px #ccc;
}

.progress-bar {
  box-shadow: inset 0px 4px 6px rgba(100, 100, 100, 0.6);
}
</style>





<noscript><link rel="stylesheet" href="css/5grid/core.css" /><link rel="stylesheet" href="css/5grid/core-noscript.css" /><link rel="stylesheet" href="css/style.css" /></noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=65&amp;mobileUI.openerWidth=76"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
		
		
		
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<script src="http://code.jquery.com/jquery-1.10.1.min.js" ></script>

<script>

var correct=<?php echo $_GET['correct']; ?>;
var incorrect=<?php echo $_GET['incorrect']; ?>;

//$(document).ready(function(){
//     event.preventDefault();

//$("#next").click(function(){
  //event.preventDefault();
  //alert("clicked");
 

/*	if(isset($_SESSION['correct']))
	$_SESSION['correct']=$_SESSION['correct']+10;
	else
	$_SESSION['correct']=10;
	 ?>
*/
 
  
  

   $.ajax({
  
					type: "GET",
					url: "getques.php",
					data: {q:1},
						
				}).done(function(data){
					//alert("done");
					 var ans= '<?php echo $_GET['ans']; ?>';
 					 var correctans = '<?php echo $_GET['correctans']; ?>';
  
  
  if(ans === correctans)
  {
  	 
	 correct=correct + 10;
	 //alert("correct "+correct);
	 document.getElementById('correct').value=correct;
	 document.getElementById('incorrect').value=incorrect;
	 
	 $('.progress-bar-success').css('width', correct+'%').attr('aria-valuenow', correct) 
	  $('.progress-bar-danger').css('width', incorrect+'%').attr('aria-valuenow', incorrect) 

	
  }
  else
  {
  incorrect = incorrect + 10;
  	 //alert("incorrect "+incorrect);
	 document.getElementById('correct').value=correct;
	 document.getElementById('incorrect').value=incorrect;
  /*	 
	if(isset($_SESSION['incorrect']))
	$_SESSION['incorrect']=$_SESSION['incorrect']+10;
	else
	$_SESSION['incorrect']=10;
	 ?>
   */
 
  
 	 $('.progress-bar-success').css('width', correct+'%').attr('aria-valuenow', correct) 
	  $('.progress-bar-danger').css('width', incorrect+'%').attr('aria-valuenow', incorrect) 
	}
  
   <?php include_once("connect.php");
   
   $sqllevel="select * from gamelevel where levelnumber = ".$level;
  foreach ($dbh->query($sqllevel) as $rowlevel)
        {
			$levelupthreshold = $rowlevel['level_up_threshold'];
			$questions=$rowlevel['prop_easyans']+$rowlevel['prop_medans']+$rowlevel['prop_hardans'];
		}
   		
  ?>
  //alert(parseInt(<?php echo $questions; ?>));
  if(parseInt((correct+incorrect)/10) == parseInt(<?php echo $questions; ?>) )
  {
    
  
	if(correct > parseInt(<?php echo $levelupthreshold; ?>))
	{	
	var username='<?php echo $val1; ?>';
	var levelupthresh='<?php echo $levelupthreshold; ?>';
	   $.ajax({
  
					type: "GET",
					url: "update_lifetimescore.php",
					data: {username:username,levelupthreshold:levelupthresh}
						
				}).done(function(data){
				 alert("level completed"); 
				});
			
  }
  else
  alert("Level Failed");
  
	  window.location="student_game_mode.php";
	}
	
	
		
					

       
	     });
 
  
  
  
  
  

</script>
		
	</head>
	<body>
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
					  
                      <p align="right">Player:  <?php echo "$val1" ?></p>
   <div class="container"> 					 
  Good Gremlins :  <div class='progress vertical'>
    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='90' aria-valuemin='0' aria-valuemax='100' style='width: '1%'>
    </div>
  </div>
<br>
 Bad Gremlins &nbsp;: &nbsp; <div class='progress vertical'>
  <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' style='width:'1%'>
    </div>
  </div>
  </div>
  </p>	
					  <div class='container'>
<form id="form1" action="" method="GET">


					  
                 <?php

if(!isset($_GET['q']))
{ $q=1;
//echo "q is set to ".$q;
}
else
{
 $sqllevelprev="select * from gamelevel where levelnumber = ".$level."-1";
 
  foreach ($dbh->query($sqllevelprev) as $rowlevelprev)
        {
			$questionsprev=$rowlevelprev['prop_easyans']+$rowlevelprev['prop_medans']+$rowlevelprev['prop_hardans'];
		}
   		//+intval($questionsprev)
  
 $q = intval($_GET['q']);
  //echo "q is set to".$q;
}






$con = mysqli_connect('localhost','root','','mcqtest');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"mcqtest");
$sqlset="select setid from questionset where classid = ".$classid;
$resultset = mysqli_query($con,$sqlset);
while($rowset = mysqli_fetch_array($resultset)) {
$sets=$rowset['setid'];
}


//and setid IN (".$sets.")";
$sql="SELECT * FROM questions WHERE quesid = '".$q."'" ;
//echo $sql;
$result = mysqli_query($con,$sql);



echo "<table>";
echo "<tr><td>


</td>";
echo "<td><table align='center'>
<tr>


 


</tr>";
while($row = mysqli_fetch_array($result)) {
    
    echo "<tr><td colspan=3>" . $row['question'] . "</td></tr><tr height=30%><td></td></tr>";
    echo "<tr><td width='10%'>  <input type='radio' name='ans' value='". $row['reschoice1'] ."' required></td><td>" . $row['reschoice1'] . "</td></tr>";
    echo "<tr><td> <input type='radio' name='ans' value='". $row['reschoice2'] ."' required></td><td>" . $row['reschoice2'] . "</td></tr>";
    echo "<tr><td> <input type='radio' name='ans' value='". $row['reschoice3'] ."' required></td><td>" . $row['reschoice3'] . "</td></tr>";
    echo "<tr><td> <input type='radio' name='ans' value='". $row['reschoice4'] ."' required></td><td>" . $row['reschoice4'] . "</td></tr>";
   echo "<tr><td> <input type='hidden' name='correctans' value='".$row['anschoice']."' ></td><td>";    
    echo "<tr><td> <input type='hidden' id='correct' name='correct' value='0' ></td><td>"; 
	 echo "<tr><td> <input type='hidden' id='incorrect' name='incorrect' value='0' ></td><td>"; 

}


echo "</td><td></td>";
echo "</table>";
mysqli_close($con);

					   ?>
					   
			   
					   
					   
					   
					   <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					     
					     <br>
					     <br>
						 
						 	
					     <input type="hidden" id="q" name = "q" value=<?php echo $q + 1; ?>>
					      
				         <input type="submit"  name="next" id="next" value="Next">
				         
					     </center>                      
				         </p>
						 </form>
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