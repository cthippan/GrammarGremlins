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
        <script language="javascript" type="text/javascript">
var tot=0;
var n = 1;
function addRow(tableID) { 


        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var cell1 = row.insertCell(0);
        var element1 = document.createElement("input");
        element1.type = "checkbox";
        element1.name="chkbox[]";
        cell1.appendChild(element1);
		


        var cell2 = row.insertCell(1);
		
				
		
        cell2.innerHTML = "<table width='40' border='10'><tr><td><label><span>"+ n +"</span></label>&nbsp;&nbsp;</td><td><input type='text' name='id" + n +"' placeholder='enter email'></td></tr></table>";



        //var cell4 = row.insertCell(3);
        //cell4.innerHTML =  "<input type='text'  name='price[]' />";
		
		n++;
		
		
        document.getElementById('txthidden').value= n ;
				
        }    
		
		function total()
		{
		var sum=0;
var cost = document.getElementsByName('price[]');
for(var i=0;i<cost.length;i++)
{
var a=parseFloat(cost[i].value);
sum = sum+a;	

}
document.getElementById('totalamount').value = sum;
var total=document.getElementById('totalamount').value;
var receive=document.getElementById('received').value;
var pending=total-receive;
document.getElementById('pending').value=pending;
}
		
		function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for(var i=1; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
				
				 document.getElementById('txthidden1').value=rowCount ;
            }
        }
        }catch(e) {
            alert(e);
        }
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
                      <p align="right">Teacher: <?php  echo "$val1" ?></p>
                     
                      <br>
                      <center>
                    <!-- <h2>Add Class </h2><br>-->
						  <form action="add_class1.php" method="post">
                          <input type="hidden" name="txthidden" id="txthidden">
                           <input type="hidden" name="txthidden1" id="txthidden1" value='0'>
					    <table width="500" border="1">
                              <tr>
                                <td >Class Name</td>
                                <td ><!--<p class="text-box">-->
                               <!-- <label for="0">1<span class="box-number">1</span></label>-->
                                  <input type="text" name="classname" id="classname"></p>
                                </td></tr>
                                
                                <tr>
                                <td>
                                   <INPUT type="button" value="Add Row" onClick="addRow('dataTable')" />
                                   <INPUT type="button" value="Delete Row" onClick="deleteRow('dataTable')" />
                                   <form action="" method="post" name="f">  

<TABLE width="300" border="1">
<thead>
<tr align="center">
<th width="50"></th><th width="20"></th>
<th width="100"></th>

</tr>
</thead>

                <tbody id="dataTable">

</tbody>
</TABLE>
                                </td>
                                </tr>
                             
                              <tr>  <td>
                                <br>
                                <input type="submit" class="button" name="create_class" value="Create Class">
                               </td>
                               <td>
                                <br>
                                <a href="teacher_main_dashboard.php"><input type="button" class="button" name="save_and_exit" value="Save and Exit"></a>
                               </td>
                              </tr>
                            </table>
					    </form>
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