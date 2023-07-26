<?php
$color = array("black" => "#000", "blue" => "#00F", "red" => "#F00", "yellow" => "#FF0", "white" => "#FFF");

$values = array_values($color);
$keys = array_values($color);

$combined = array_combine($values, $keys);
echo "<pre>";
print_r($color);
print_r($combined);
echo "</pre>";