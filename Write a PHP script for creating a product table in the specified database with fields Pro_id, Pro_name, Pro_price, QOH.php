Write a PHP script for creating a product table in the specified database with fields Pro_id, Pro_name, Pro_price, QOH.

<?php

$dbhost='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn)
{
  die('Could not connect: ');
}

echo 'Connected successfully <br>';

$sql = 'CREATE TABLE product
(pro_id INT,
Pro_name VARCHAR(20),
Pro_price INT)';

mysql_select_db('mydb');
$retval = mysql_query($sql, $conn);

if(!$retval)
{
   die('Could not create table: ". mysql_error());
}

echo "Table Created Successfully"; mysql_close($conn);
?>