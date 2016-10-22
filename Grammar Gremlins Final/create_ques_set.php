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
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
        </style>
<noscript><link rel="stylesheet" href="css/5grid/core.css" /><link rel="stylesheet" href="css/5grid/core-noscript.css" /><link rel="stylesheet" href="css/style.css" /></noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=65&amp;mobileUI.openerWidth=76"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
<script src="http://code.jquery.com/jquery-1.10.1.min.js" ></script>
<!-- Ajax Script for inserting categories -->
<script>

$(document).ready(function(){
     event.preventDefault();


$("#Submit2").click(function(){
  event.preventDefault();
	 $("#createques").show();
       	var classid = $('#select2').children(':selected').attr('id');
	    var passingscore = document.getElementById('passingscore').value;
		var setname= document.getElementById('setname').value;
      
//		alert(setname);
	 
	 if (passingscore =="" && setname=="")
	 {
		 alert("Please Enter the values in the form ");
	 }
	 else {
	 	$.ajax({
					type: "POST",
					url: "insert_question_set.php",
					data: {classid:classid,passingscore:passingscore,setname:setname},
				}).done(function(data){
					alert("done");
       
	     });
		}
    });
			
		
		
		
		
		
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
                      
                     <center>
                       <table width="560" height="376" border="1" align="center">
                         <tr>
                           <td height="46" colspan="2"><div align="center" class="style1">Automatic Question Set </div></td>
                         </tr>
                         <tr>
                           <td width="152"><strong>Set Name : </strong></td>
                           <td width="392"><input name="textfield" type="text"></td>
                         </tr>
                         <tr>
                           <td><strong>Class</strong></td>
                           <td><strong>
                             <?php
							 include("connect.php");
							 try
							 {
					
							 
						echo "<select name='select2' id='select2'>";	 
							   $sql = "SELECT classid,classname FROM class";
							   		 foreach ($dbh->query($sql) as $row)
									 {
									 echo "<option id=".$row['classid'].">".$row['classname']."</option>";
									 }
						 
                        echo "</select>";
						 	}
							catch(PDOException $e)
							{echo $e->getMessage();}
						 
						 ?>
                           </strong></td>
                         </tr>
                         <tr>
                           <td height="30"><strong>Question Type </strong></td>
                           <td><strong>
                             <?php
						 echo "<select name='select3' id='select3'>
						 <option>part_of_speech</option>
						 <option>antonyms</option>
						 <option>synonyms</option>
                         </select>"
						 ?>
                           </strong></td>
                         </tr>
                         <tr>
                           <td><strong># of easy questions </strong></td>
                           <td><input name="textfield2" type="text" size="10"></td>
                         </tr>
                         <tr>
                           <td height="34"><strong># of Medium questions </strong></td>
                           <td><input name="textfield22" type="text" size="10"></td>
                         </tr>
                         <tr>
                           <td><strong># of Hard questions </strong></td>
                           <td><input name="textfield222" type="text" size="10"></td>
                         </tr>
                         <tr>
                           <td><strong>Passing Score </strong></td>
                           <td><strong>
                           <input name="textfield223" type="text" size="10">
                           / 100  </strong></td>
                         </tr>
                         <tr>
                           <td height="88">&nbsp;</td>
                           <td><p>&nbsp;
                           </p>
                             <p><strong>
                             <input type="submit" class="button" name="Submit" value="Create Question Set">
                               </strong></p></td>
                         </tr>
                       </table>
                       <p>&nbsp;</p>
                     </center>
                     <br>
                     <center>
                       </center><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#"></a>
                       </center>                      
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