<?php
error_reporting(0);

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
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
        <script type="text/javascript">

  function checkPassword(str)
  {
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    return re.test(str);
  }

  function checkForm(form)
  {
    if(form.username.value == "") {
	document.getElementById('username').style.borderColor='#FF0000';
document.getElementById('username').style.border='solid';
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
    if(form.password.value != "" && form.password.value == form.password.value) {
      if(!checkPassword(form.password.value)) {
        alert("The password you have entered is not valid!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }
    return true;
  }

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
							<h1><a href="#" class="mobileUI-site-name">Welcome to Grammar Gremlins!</a></h1>
								
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
							<form action="login_php.php" method="post" style="background:url(/images/educell_background_washed.png) no-repeat" onSubmit="return checkForm(this);">
						<center>	<table border="1" align="center">
                             
                                <td align="center"><br>
                                  <tr>
                                  <td>
                                <h2><center>Please Login.</center></h2>
                                  </td>
                                  </tr>
                                  </table>
                                  <table width="380" border="1">
                                 
                                   <tr>
                                    <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>Email/Username</td>
                                      <td><input type="text" id="username" name="username" width="250"></td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp;</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                      <td>Password </td>
                                      <td><input type="password" id="password" name="password" width="250"></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                       
                                      <td><label>
                                        <input type="submit" name="Submit" value="Login" style="font-size:14px;width:100px;height:40px">
                                    </label></td>
                                    </tr>
                                    </table>
                                    <table width="1075" height="116" border="1">
                                    <tr>
                                      <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                    <td>
                                      <td colspan="1" align="center"><p><a href="register.php" class="button" style="font-size:24px;height:35px;width:380px">Register as a New Student</a></td>
                                      <td colspan="1" align="center"><p><a href="register1.php" class="button" style="font-size:24px;height:35px;width:380px">Register as a New Teacher</a></td>
                                    </tr>
                                  </table></centre>
                        
						  
						    <p>&nbsp;</p>
						   
							</form>
		 <a href="index_forgotpass.php">Forgot Password?&nbsp; Send password reset email </a>			  
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