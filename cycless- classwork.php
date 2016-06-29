<?php
// <!-- 1. создать массив, в котором есть перечень автомобильных брендов
//      2. вывести все бренды через запятую на экран
//  -->

$array = array('bmw', 'Toyota', 'Mazda', 'Nisan');
$arrayCount = count($array);
for ($i = 0; $i < $arrayCount; $i++)
    echo $array['bmw']. ',' ['Toyota'] . ',' ['Mazda'];
    echo "<br />";
}
