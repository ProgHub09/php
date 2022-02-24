<?php

function xyz() //function with no parameter
{
$a = 'Hello';
$b = 'World!';
$c = $a.$b;

echo "$c<br>";
}

function abc($fname, $lname) //function with parameter
{
$a = $fname;
$b = $lname;
$c = $a.$b;
echo " $c";
}
xyz();
abc("Raj", "Patel");
?>