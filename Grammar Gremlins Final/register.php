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
<script type="text/javascript">

function checkmobno()
{
    var n=document.getElementById("mobno1").value;
    if (n.length < 10)
    {

		document.getElementById("mobno1").focus();
		document.getElementById("mobno1").clear();
//				document.getElementById("mobno1").value="";
        alert("Please check mobile number");
        return false;
    }
	

}

function checkmobno1()
{
    var n=document.getElementById("mobno2").value;
    if (n.length < 10)
    {

		document.getElementById("mobno2").focus();
		document.getElementById("mobno2").clear();
//				document.getElementById("mobno2").value="";
        alert("Please check mobile number");
        return false;
    }
	
}


function validateForm()
{
<!-- name text box validation -->
var x=document.getElementById("txtname").value;
if (x==null || x=="")
  {
  alert(" name must be filled out");
  return false;
  }
 <!-- emailvalidation -->
var x1=document.getElementById("txtemailid").value;
var atpos=x1.indexOf("@");
var dotpos=x1.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x1.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
 else if (x1==null || x1=="")
  {
  alert(" name must be filled out");
  return false;
  }
 <!-- mobile number1 validation -->
 var x2=document.getElementById("mobno1").value;
 if (x2==null || x2=="")
  {
  alert(" name must be filled out");
  return false;
  }
  else if(x2.length!=10)
  {
  alert(" Enter correct no");
  }
  <!-- mobile number2 validation -->
   var x3=document.getElementById("mobno2").value
 if (x3==null || x3=="")
  {
  alert(" name must be filled out");
  return false;
  }
  else if(x3.length!=10)
  {
  alert(" Enter correct no");
  }
   var x4=document.getElementById("mobno2").value
 if (x4==null || x4=="")
  {
  alert(" name must be filled out");
  return false;
  }
  
}

</script>

<script type="text/javascript">

  function register(str)
  {
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    return re.test(str);
  }

  function checkForm(form)
  {
    if(form.fname.value == "") {
      alert("Error: Firstname cannot be blank!");
	  
      form.fname.focus();
	  document.getElementById('fname').style.borderColor='#e52213';
document.getElementById('fname').style.border='solid';
      return false;
    }
    re = /^\w+$/;
	if(form.lname.value == "") {
      alert("Error: Lastname cannot be blank!");
	  document.getElementById('lname').style.borderColor='#e52213';
document.getElementById('lname').style.border='solid';
      form.lname.focus();
      return false;
    }
    re = /^\w+$/;
	if(form.email.value == "") {
      alert("Error: Email cannot be blank!");
	  document.getElementById('email').style.borderColor='#e52213';
document.getElementById('email').style.border='solid';
      form.email.focus();
      return false;
    }
    re = /^\w+$/;
    
    if(form.password.value != "" && form.password.value == form.password.value) {
      if(!checkPassword(form.password.value)) {
        alert("The password you have entered is not valid!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
	  fname.style.backgroundColor = "red";

      return false;
    }
    return true;
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
						  <h2>Student Registration </h2><br>
						  <form action="email.php" method="post" onSubmit="return checkForm(this);" autocomplete="off">
					    <table width="900" border="1">
                              <tr>
                                <td >First Name</td>
                                <td ><label>
                                  <input type="text" name="fname" id="fname" placeholder="First Name" required pattern="[a-zA-Z0-9]{5,}" title="Minimum 2 letters or numbers.">
                                </label></td></tr>
                                 <td >Last Name</td>
                                <td ><label>
                                  <input type="text" name="lname" id="lname" placeholder="Last Name" title="Minimum 2 letters or numbers.">
                                </label></td></tr>
                                  <td >Email</td>
                                <td ><label>
                                  <input type="text" name="email" id="email" placeholder="Email" pattern="[^ @]*@[^ @]*" title="Please Enter Valid Email Id">
                                </label></td></tr>
                                 <td >Password</td>
                                <td ><label>
                              <input type="password" name="password" id="password" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Minimum 6 letters or numbers." >
                                </label></td>
                                <td>(Password must contain atleast 1 Uppercase, 1 number, and atleast 6 charcters.)</td></tr>
                                <td>Confirm Password</td>
                                <td ><label>
                                  <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Minimum 6 letters or numbers.">
                                </label></td>
                                <td>(Please enter Confirm password same as Password.)</td>
                              </tr> 
                              <tr>
                              <td>
<br>                              <input type="checkbox" name="visually" id="visually">Visually Impaired
                              </td>
                              </tr>
                              <tr>  <td>
                                <br>
                                <input type="submit" class="button" name="submit" value="submit">
                               </td>
                               <td>
                                <br>
                                <a href="index.php"><input type="button" class="button" name="cancel" value="Cancel"></a>
                               </td>
                              </tr>
                            </table>
					    </form>
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