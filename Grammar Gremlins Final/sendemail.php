
<?php

include_once("connect.php");
try{
    //echo "</br>";
    /*** The SQL SELECT statement ***/
    $sql = "SELECT password FROM teacher_registration where email='".$_POST['email']."' ";
   
    
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


include("teacher_index.php");
require_once 'Swift-5.0.1/lib/swift_required.php';

// Grab the Data
	$email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
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
		->setTo (array($_POST['email'] => 'Add Recipients'))
		->setSubject ('Password Recovery')
		->setBody ($data, 'text/html');
		
// Send the message
echo "<script type='application/javascript'>alert('Mail Sent Successfully');
		window.location = 'index.php'</script>";
	$result = $mailer->send($message);
	
?>

</body>
</html>