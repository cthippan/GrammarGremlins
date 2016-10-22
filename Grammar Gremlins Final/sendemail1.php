
<?php
$email_t=$_POST['email'];
include("connect.php");
$val23=0;
try{
    //echo "</br>";
    /*** The SQL SELECT statement ***/
    $sql = "SELECT password,email FROM student_registration where email='".$_POST['email']."' ";
   
    
    foreach ($dbh->query($sql) as $row)
        {
		$val23=$row['email'];
            $val1 = $row['password'];
			
			
        //print $row['test_id'] .' - '. $row['test_name'] . ' - '.$row['test_add'] .'<br />';
        }

    /*** close the database connection ***/
    $dbh = null;
}

catch(PDOException $e)
    {
 if($e->getMessage())
 {
 echo "error";
 }
    }





if($val23=='0')
{
include("connect.php");
try{

    //echo "</br>";
    /*** The SQL SELECT statement ***/
    $sql = "SELECT password FROM teacher_registration where email='".$email_t."' ";
   

    foreach ($dbh->query($sql) as $row)
        {
            $val1 = $row['password'];
        //print $row['test_id'] .' - '. $row['test_name'] . ' - '.$row['test_add'] .'<br />';
        }

    /*** close the database connection ***/
    $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
include("index.php");
require_once 'Swift-5.0.1/lib/swift_required.php';

// Grab the Data
	$email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	$password=filter_var($val1,FILTER_SANITIZE_STRING);

// Create our body message
	$data = "<b>Email:</b> " . $email . "<br>" . "<b>Password:</b> " . $password;


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
		->setSubject ('Password Recovery')
		->setBody ($data, 'text/html');
		
// Send the message
echo "<script type='application/javascript'>alert('Mail Sent Successfully');
		window.location = 'index.php'</script>";
	$result = $mailer->send($message);

}
else
{

	include("index.php");
require_once 'Swift-5.0.1/lib/swift_required.php';

// Grab the Data
	$email=filter_var($email_t,FILTER_SANITIZE_EMAIL);
	$password=filter_var($val1,FILTER_SANITIZE_STRING);

// Create our body message
	$data = "Email: " . $email . "<br>" . "Password: " . $password;


//Create the transport
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl')
	->setUsername('prashanthreddy0505@gmail.com')
	->setPassword('Fall@2015');
	
// Create the mailer
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance('Grammer Gremlins')
		->setFrom (array('prashanthreddy0505@gmail.com' => 'Grammer Gremlins'))
		->setTo (array($email_t => 'Add Recipients'))
		->setSubject ('Password Recovery')
		->setBody ($data, 'text/html');
		
// Send the message
echo "<script type='application/javascript'>alert('Mail Sent Successfully');
		window.location = 'index.php'</script>";
	$result = $mailer->send($message);

	}
?>

</body>
</html>