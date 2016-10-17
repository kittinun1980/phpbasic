<?php

//$car=array("toyota","honda","isuzu");
$car = ["toyota","honda","isuzu"];
print_r($car);
echo '<hr>';

$count_car= count($car);

echo $count_car;
echo '<hr>';

for ($x = 0; $x < $count_car; $x++) {
echo $car[$x].'<br>';
    
}
