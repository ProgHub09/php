<?php

echo "Numerical array in ascending numerical order:<br>";
$numbers= array(40, 61, 2, 22, 13);

sort($numbers);
$n= count($numbers);

for($x = 0; $x < $n; $x++)
{

echo $numbers [$x];
echo "<br>";
}
echo "Numerical array in descending numerical order:<br>";
$numbers=array(40, 61, 2, 22, 13); 
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++){
echo $numbers[$x];
echo "<br>";
}
?>