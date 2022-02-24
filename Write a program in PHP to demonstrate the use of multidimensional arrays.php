<?php

$emp = array
(
array(1,"c",4000),
array(2,"c++",5000),
array(3,"java",8000)
);

for ($row = 0; $row < 3; $row++) {
for ($col = 0; $col < 3; $col++) {
echo $emp[$row][$col]." ";
}
echo "<br/>";
}
?>