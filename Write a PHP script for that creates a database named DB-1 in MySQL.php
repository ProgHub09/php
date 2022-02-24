<?php
$dbhost='localhost';
$dbuser = 'root';
$dbpass = ";
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn)
{
die('Could not connect:'. mysql_error());
}

echo 'Connected successfully<br>';

$sql='CREATE Database DB-1';
$retval= mysql_query( $sql, $conn);

if(!$retval) {
   die('Could not create database: ');
}

echo "Database created successfully"; mysql_close($conn);
?>