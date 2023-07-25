<?php
$a = "SATO ICHIRO";
print substr($a, 3, 3) . "<br>";
print substr($a, 0, 7) . "<br>";
print substr($a, 8) . "<br>";
print substr($a, strlen($a) - 5) . "<br>";
$b = strpos($a, " ");
print substr($a, 0, $b) . "<br>";