<?php

$host = "mysql";
$user = 'testdbUser';
$passwd = 'testdbPass';
$schema = 'testdb';
$mysqli = mysqli_connect($host, $user, $passwd, $schema);
if (!$mysqli)
{
   echo 'Connection failed<br>';
   echo 'Error number: ' . mysqli_connect_errno() . '<br>';
   echo 'Error message: ' . mysqli_connect_error() . '<br>';
   die();
}

echo 'Connection to MySQL is Successful<br>';
?>
