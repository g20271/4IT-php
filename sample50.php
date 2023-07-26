<?php
$hass = array("田中", "中川", "木下", "中西", "角田");
$paas = array("吉井", "田中", "玉木", "中西");

echo "<pre>";
print_r(array_intersect($haas, $paas));
echo "</pre>";