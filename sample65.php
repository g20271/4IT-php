<?php
$gz = imagecreatefromjpeg("ground.jpg");
$col = imagecolorallocate($gz, 255, 255, 255);
imagestring($gz, 5, 10, 10, "ground", $col);
imagejpeg($gz, "temp/ground.jpg");
imagedestroy($gz);
print "<img src='temp/ground.jpg' />";