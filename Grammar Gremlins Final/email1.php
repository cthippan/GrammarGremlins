
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body class="container-fluid">
<?php
include_once("connect.php");
include("register1.php");

$form = $_POST;

$fname = $form['fname'];
$lname = $form['lname'];
$email = $form['email'];
$password = $form['password'];
$cpassword = $form['cpassword'];

if ($password == $cpassword)
{

$sql = "INSERT INTO `teacher_registration`(`fname`, `lname` , `email` , `password` , `cpassword`) VALUES (:fname,:lname,:email,:pass,:cpass)";
$STH = $dbh->prepare($sql);
 $STH->bindParam(":fname", $fname,PDO::PARAM_STR);
 $STH->bindParam(":lname", $lname,PDO::PARAM_STR);
 $STH->bindParam(":email", $email,PDO::PARAM_STR);
 $STH->bindParam(":pass", $password,PDO::PARAM_STR);
 $STH->bindParam(":cpass", $cpassword,PDO::PARAM_STR);
$STH->execute(); 



require_once 'Swift-5.0.1/lib/swift_required.php';

// Grab the Data
	$fname=filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
	$lname=filter_var($_POST['lname'],FILTER_SANITIZE_STRING);
	$email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	$password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
	$cpassword=filter_var($_POST['cpassword'],FILTER_SANITIZE_STRING);

// Create our body message
$data = "<b>First Name:</b> " . $fname . "<br>" . "<b>Last Name:</b> " . $lname . "<br>" . "<b>Email:</b> " . $email . "<br>" . "<b>Password:</b> " . $password;


//Create the transport
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com',587,'tls')
	->setUsername('prashanthreddy0505@gmail.com')
	->setPassword('Fall@2015')
	->setEncryption('tls');
	
// Create the mailer
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance('Grammer Gremlins')
		->setFrom (array('prashanthreddy0505@gmail.com' => 'Grammer Gremlins'))
		->setTo (array($_POST['email'] => 'Add Recipients'))
		->setSubject ('New Teacher Registration for Grammer Gremlins')
		->setBody ($data, 'text/html');
		
// Send the message

	$result = $mailer->send($message);
	echo "<script type='application/javascript'>alert('Record Added Successfully...');
		window.location = 'index.php'</script>";

}

else 
{

echo "<script type='application/javascript'>alert('Password dose not Matched!!!');
		window.location = 'register1.php'</script>";

}

?>

</body>
</html>