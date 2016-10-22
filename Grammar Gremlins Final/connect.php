<?php
try{
$dbh = new PDO('mysql:host=localhost;dbname=mcqtest;charset=utf8', 'root', '');

}
 
 catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>