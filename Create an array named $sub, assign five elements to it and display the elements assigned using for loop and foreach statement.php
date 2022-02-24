<?php

$sub = array("c", "dbms", "c++", "Java"); 
$n= count($sub);

echo "<b>Array using for loop<br></b>;
for($i=0; $i<$n; $i++)
{
echo $sub[$i];
echo "<br>";
}
?>

<?php
$sub=array("c", "dbms", "c++", "java");
echo"<b>Array using foreach loop<br></b>";
foreach ($sub as $value)
{
echo "$value <br>";
}
?>