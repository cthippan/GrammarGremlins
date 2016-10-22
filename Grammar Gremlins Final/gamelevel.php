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
.style2 {
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
$(document).ready(function(){
    $("form").on('submit',function(event){
    event.preventDefault();
        
      	var levelnumber = document.getElementById('lno').value;
	    var level_up_threshold = document.getElementById('levelup').value;
	 var level_down_threshold = document.getElementById('leveldown').value;
	    var prop_easyans = document.getElementById('eans').value;
	 var prop_medans = document.getElementById('mans').value;
	    var prop_hardans = document.getElementById('hans').value;
	 
	 
	 
       	$.ajax({
					type: "POST",
					url: "gamelevel1.php",
					data: {levelnumber:levelnumber,level_up_threshold:level_up_threshold,level_down_threshold:level_down_threshold,prop_easyans:prop_easyans,prop_medans:prop_medans,prop_hardans:prop_hardans},
				}).done(function(data){
					var rowCount;
        rowCount = $('#grdEmployee tr').length;         // GET ROW COUNT.

        // ADD TEXTBOX VALUES TO THE GRIDVIEW.

        
            $('#grdEmployee tr:last').after('<tr>' + 
                '<td>' + levelnumber + '</td>' +
                '<td>' + level_up_threshold + '</td>' +
                '<td>' + level_down_threshold + '</td>'+
                '<td>' + prop_easyans + '</td>'+
                '<td>' + prop_medans + '</td>' +
                '<td>' + prop_hardans + '</td>' + '</tr>');

				});
		  }
    );

});
</script>	<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->



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
                  <center>
						  <h2>Enter Game Level </h2><br>
						  <form action="" method="post"  autocomplete="off">
					    <table width="500" border="1">
                              <tr>
                                <td >Level Number</td>
                                <td ><label>
                                  <input type="text" name="levelnumber" id="lno" >
                                </label></td></tr>
                                 <td >Level up threshold</td>
                                <td ><label>
                                  <input type="text" name="level_up_threshold" id="levelup" r>
                                </label></td></tr>
                                  <td >Level down hreshold</td>
                                <td ><label>
                                  <input type="text" name="level_down_threshold" id="leveldown" p>
                                </label></td></tr>
                                 <td >Easy Ans</td>
                                <td ><label>
                              <input type="text" name="prop_easyans" id="eans"  >
                                </label></td></tr>
                                <td >Medium Ans</td>
                                <td ><label>
                                  <input type="text" name="prop_medans" id="mans" >
                                </label></td></tr>
                                 <td >Hard Ans</td>
                                <td ><label>
                                  <input type="text" name="prop_hardans" id="hans" >
                                </label></td></tr>
                              </tr> 
                             
                              <tr>  <td>
                                <br>
                                <input type="submit" class="button" name="submit" value="submit">
                               </td>
                               <td>
                                <br>
                                <a href="teacher_main_dashboard.php"><input type="button" class="button" name="cancel" value="Cancel"></a>
                               </td>
                              </tr>
                            </table>
					    </form>
                        <table id="grdEmployee" width="848" border="1">
                         <tr>
                           <td width="198">&nbsp;</td>
                           <td width="314">&nbsp;</td>
                           <td width="314">&nbsp;</td>
                            <td width="314">&nbsp;</td>
                           <td width="314">&nbsp;</td>
                           <td width="314">&nbsp;</td>
                         </tr>
                         <tr>
                           <td></td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                         </tr>
                       </table>
                        </center>
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