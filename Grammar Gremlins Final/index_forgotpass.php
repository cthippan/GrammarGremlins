<?php
session_start();

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
		<noscript><link rel="stylesheet" href="css/5grid/core.css" /><link rel="stylesheet" href="css/5grid/core-desktop.css" /><link rel="stylesheet" href="css/5grid/core-1200px.css" /><link rel="stylesheet" href="css/5grid/core-noscript.css" /><link rel="stylesheet" href="css/style.css" /><link rel="stylesheet" href="css/style-desktop.css" /></noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=55&amp;mobileUI.openerWidth=66"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script>

function forgetpass()
{

//window.close();
//alert("user id is "+ document.getElementById("lblid").innerHTML);
//window.open("forgotpasswd.php?userid="+document.getElementById("userid").value);
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
							<h1><a href="#" class="mobileUI-site-name">Grammer Gremlins</a></h1>
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
						<form method="POST" action="sendemail.php" onSubmit="return checkForm(this);" autocomplete="off">
						<h2>Forgot Password !</h2>
							<table width="382" border="1">
                              <tr>
                                <td width="168" height="27" align="left" valign="top">Enter your Email </td>
                                <td width="198" align="left" valign="top">
                                  <input type="email" pattern="[^ @]*@[^ @]*" name="email" id="email" title="Please Enter Valid Email Id" required>
							    </td>
                              </tr>
                            </table>
						  <p>
						    
							  
						      <input type="submit" value =" Recover Password!">
					    </p>
</form>
					  </section>
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


					</div>
		  </div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>