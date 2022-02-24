<?php

$a=array(12,43,66,21,56,43,43,78,78,100,43,43,43,21);
$vals = array_count_values($a);
echo 'No. of NON Duplicate Items: '.count($vals).'<br><br>';
print_r($vals);
?>