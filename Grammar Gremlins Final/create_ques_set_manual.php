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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		
		<script type="text/javascript">

    $(document).ready(function() {

        $("#textfield5").blur(function() {
			//alert("clicked");
			$('#select5').empty();
            $('#select5').append($("<option>" + $('#textfield2').val() + "</option>"));
			  $('#select5').append($("<option>" + $('#textfield3').val() + "</option>"));
			    $('#select5').append($("<option>" + $('#textfield4').val() + "</option>"));
				  $('#select5').append($("<option>" + $('#textfield5').val() + "</option>"));

            return false;

        });

    });    

</script>
		
		
<script src="http://code.jquery.com/jquery-1.10.1.min.js" ></script>
<!-- Ajax Script for inserting categories -->
<script>

$(document).ready(function(){
     $("#createques").hide();
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
					//alert("");
       
	     });
	

       	

		  }
    });
	
	
	$("#Submit1").click(function(){
	  event.preventDefault();
	  	var classid = $('#select2').children(':selected').attr('id');
	    var passingscore = document.getElementById('passingscore').value;
		var setname= document.getElementById('setname').value;
		var question = document.getElementById('textfield22').value;
		var difficulty= document.getElementById('select4').value;
		var questype= document.getElementById('select3').value;
		var anschoice= document.getElementById('select5').value;				
		var reschoice1= document.getElementById('textfield2').value;
		var reschoice2= document.getElementById('textfield3').value;
		var reschoice3= document.getElementById('textfield4').value;
		var reschoice4= document.getElementById('textfield5').value;
									
	$.ajax({
					type: "POST",
					url: "insert_question.php",
					data: {setname:setname, question:question, difficulty:difficulty, questype:questype, anschoice:anschoice,reschoice1:reschoice1,reschoice2:reschoice2,reschoice3:reschoice3, reschoice4:reschoice4},
				}).done(function(data){
					var rowCount;
        rowCount = $('#grdEmployee tr').length;         // GET ROW COUNT.

        // ADD TEXTBOX VALUES TO THE GRIDVIEW.

        
            $('#grdEmployee tr:last').after('<tr><td>' + rowCount + '</td>' +
                '<td>' + question + '</td>' +
                '<td>' + difficulty + '</td>' +
                '<td>' + questype + '</td>' + '</tr>');
				});
	
	});
	
	
});
	
</script>
		
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
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
                      <p align="right">Player: <?php  echo "$val1" ?></p>
                      
                     <center>
					 <form id="createset" action="" method="post"">
                     <p>Note: Whenever you enter Question Set, you have to enter Questions!!!</p>
                       <table width="941" height="174" border="1" align="center">
                         <tr>
                         
                           <td height="46" colspan="6"><div align="center" class="style1">Manual Question Set </div></td>
                         </tr>
                         <tr>
                           <td width="123" height="120"><strong>Set Name : </strong></td>
                           <td width="190"><input name="setname" id="setname" type="text"></td>
                           <td width="95"><strong>Class</strong></td>
                           <td width="133"><strong>
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
                           <td width="114"><strong>Passing Score</strong></td>
                           <td width="246"><strong>
                             <input name="passingscore" id="passingscore" type="text" size="10">
/ 100 
<input type="submit" name="Submit2" id="Submit2" value="Add Set">
                           </strong></td>
                         </tr>
                       </table>
					   </form>
						 
						 <form id="createques" action="" method="post""  >
						 <table>
                         <tr>
                           <td height="24" colspan="6"><hr></td>
                         </tr>
                         <tr>
                           <td width="121" height="30"><strong>Question Type </strong></td>
                           <td width="94"><strong>
                           <?php
						 echo "<select name='select3' id='select3'>
						 <option>part_of_speech</option>
						 <option>antonyms</option>
						 <option>synonyms</option>
                         </select>"
						 ?>
                           </strong> </td>
                           <td width="129"><strong>Difficulty Level </strong></td>
                           <td width="294"><strong>
                             <?php
						 echo "<select name='select4' id='select4'>
						 <option>easy</option>
						 <option>medium</option>
						 <option>hard</option>
                         </select>"
						 ?>
                           </strong></td>
                           <td width="31">&nbsp;</td>
                           <td width="29">&nbsp;</td>
                         </tr>

                         <tr>
                           <td height="34"><strong>Question</strong></td>
                           <td colspan="5"><input name="textfield22" id="textfield22" type="text" size="80"></td>
                         </tr>
                         <tr>
                           <td height="32"><strong>Choices</strong></td>
                           <td colspan="5"><input name="textfield2" id="textfield2" type="text">
                           <input name="textfield3" id="textfield3" type="text">
                           <input name="textfield4" id="textfield4" type="text">
                           <input name="textfield5" id="textfield5" type="text"></td>
                         </tr>
                         <tr>
                           <td height="30"><strong>Correct Answer</strong></td>
                           <td colspan="5"><strong>
                             <?php
						 echo "<select name='select5' id='select5'>
                         </select>"
						 ?></strong></td>
                         </tr>
                         <tr>
                           <td height="28">&nbsp;</td>
                           <td colspan="5"><p><strong><input type="submit" name="Submit1" id="Submit1" value="Add Question">
                           </strong></p>                           </td>
                         </tr>
                         <tr>
                           <td height="28" colspan="6"><hr></td>
                         </tr>
                       </table>
					   </form>
                       <table id="grdEmployee" width="848" border="1">
                         <tr>
                           <td width="198">&nbsp;</td>
                           <td width="314">&nbsp;</td>
                           <td width="314">&nbsp;</td>
                         </tr>
                         <tr>
                           <td></td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                         </tr>
                       </table>
                       <p>&nbsp;</p>
                     </center>
                     <br>
                     <center>
                       </center><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="teacher_main_dashboard.php"><input type="button" class="button" name="button" value="Back to Dashboard"></a>
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