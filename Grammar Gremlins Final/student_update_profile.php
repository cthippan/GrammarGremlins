<?php

session_start();
if(!isset($_SESSION['username'])){
 header("Location: index.php");
}

include_once("connect.php");
//echo $_GET['id'];
//$id = $_GET['id'];
//echo $id;
$val11=$_GET['id'];
try{
$sql1="select student_id from student_registration where fname='$val11'";
 foreach ($dbh->query($sql1) as $row)
        {
		 $val2 = $row['student_id'];

 $sql = "SELECT * FROM student_registration where student_id=$val2";
// $dbh = setFetchMode(PDO::FETCH_ASSOC);
//  foreach ($dbh->query($sql) as $row)
//        {

        $stmt = $dbh->prepare($sql);
  // $stmt->bindValue(":id", $id);
   
   $stmt->execute();
   $results = $stmt->fetchAll();
    }

    /*** close the database connection ***/
    $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
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

<script type="text/javascript">
  function disablefield()
		{
		 if (document.getElementById('fname1').checked  == true && document.getElementById('lname1').checked  == true && document.getElementById('password1').checked  == true)
			 {
			 document.getElementById('fname').readOnly =''; 
				  document.getElementById('lname').readOnly =''; 
				   
				    document.getElementById('password').readOnly =''; 
					  document.getElementById('cpassword').readOnly =''; 
				  }
		else if (document.getElementById('fname1').checked  == false && document.getElementById('lname1').checked  == false && document.getElementById('password1').checked  == false)
			 {
			 document.getElementById('fname').readOnly ='true'; 
				  document.getElementById('lname').readOnly ='true'; 
				   
				    document.getElementById('password').readOnly ='true'; 
					  document.getElementById('cpassword').readOnly ='true'; 
				  }
				   else if (document.getElementById('fname1').checked  == true && document.getElementById('lname1').checked  == true )
			 {
			 document.getElementById('fname').readOnly =''; 
				  document.getElementById('lname').readOnly =''; 
				   
				    document.getElementById('password').readOnly ='true'; 
					  document.getElementById('cpassword').readOnly ='true'; 
				  }
				   else if (document.getElementById('fname1').checked  == true && document.getElementById('password1').checked  == true )
			 {
			 document.getElementById('fname').readOnly =''; 
				  document.getElementById('lname').readOnly ='true'; 
				   
				    document.getElementById('password').readOnly =''; 
					  document.getElementById('cpassword').readOnly =''; 
				  }
				   else if (document.getElementById('lname1').checked  == true && document.getElementById('password1').checked  == true )
			 {
			 document.getElementById('fname').readOnly ='true'; 
				  document.getElementById('lname').readOnly =''; 
				   
				    document.getElementById('password').readOnly =''; 
					  document.getElementById('cpassword').readOnly =''; 
				  }
				
			 else if (document.getElementById('fname1').checked  == true)
			 {
				  document.getElementById('lname').readOnly ='true'; 
				   
				    document.getElementById('password').readOnly ='true'; 
					  document.getElementById('cpassword').readOnly ='true'; 
				  }else  if (document.getElementById('lname1').checked  == true)
				   { 
				  document.getElementById('fname').readOnly ='true'; 
				  document.getElementById('lname').readOnly =''; 
				  document.getElementById('password').readOnly ='true'; 
				  				  document.getElementById('cpassword').readOnly ='true'; 
				  }
				  else  if (document.getElementById('password1').checked  == true)
				   { 
				  document.getElementById('fname').readOnly ='true'; 
				  document.getElementById('lname').readOnly ='true'; 
				  document.getElementById('password').readOnly =''; 
				  				  document.getElementById('cpassword').readOnly =''; 
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
						  <h2>Student Update </h2><br>
						  <form action="update1.php" method="post" onSubmit="return checkForm(this);" autocomplete="off">
                          <input type="hidden" name= "student_id" id="student_id" value="<?php echo $results[0]['student_id']; ?>" >
					    <table width="500" border="1">Select to Change
                              <tr><td><input type="checkbox" name="fname1" id="fname1" value="fname1" onChange="disablefield();"></td>
                                <td >  First Name</td>
                                
                                <td ><label>
                                 <input type="text" name="fname" id="fname" value="<?php echo $results[0]['fname']; ?>" required pattern="[a-zA-Z0-9]{5,}" title="Minimum 5 letters or numbers.">
                                </label></td></tr>
                                
                                <tr><td><input type="checkbox" name="lname1" id="lname1" value="lname1" onChange="disablefield();"></td> <td >Last Name</td>
                                <td ><label>
                                  <input type="text" name="lname" id="lname" value="<?php echo $results[0]['lname']; ?>" required pattern="[a-zA-Z0-9]{5,}" title="Minimum 5 letters or numbers.">
                                </label></td></tr>
                                 <tr>
                                 <td><input type="checkbox" name="password1" id="password1" value="password1" onChange="disablefield();"></td>
                                 <td >Password</td>
                                <td ><label>
                                  <input type="password" name="password" id="password" value="<?php echo $results[0]['password']; ?>" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Minimum 6 letters or numbers.">
                                </label></td></tr>
                                <tr><td><input type="hidden" name="cpassword1" id="cpassword1" ></td>
                                <td >Confirm Password</td>
                                <td ><label>
                                  <input type="password" name="cpassword" id="cpassword" value="<?php echo $results[0]['cpassword']; ?>" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Minimum 6 letters or numbers.">
                                </label></td>
                              </tr> 
                              <tr>
                              <td>
<br>                              <input type="checkbox" name="visually" id="visually">Visually Impaired
                              </td>
                              </tr>
                              <tr>  <td>
                                <br>
                                <input type="submit" class="button" name="update_profile" value="Update Profile">
                               </td>
                               <td><br>
                                <a href="student_main_dashboard.php"><input type="button" class="button" name="cancel" value="Cancel"></a>
                               </td>
                              </tr>
                            </table>
					    </form>
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