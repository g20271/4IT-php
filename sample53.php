<?php
$haas = array("田中", "滝川", "木下", "堀江", "中西", "角田");
$saas = array("吉井", "玉井", "江川");
$newusr = array_merge($haas, $saas);
echo "<pre>";
print_r($newusr);
echo "</pre>";