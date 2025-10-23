<?php
$mushrooms = 50;
$berries = '20';
$result =  $mushrooms + $berries;
$str = strval($result);
$str[2] = '9';
echo $str;
