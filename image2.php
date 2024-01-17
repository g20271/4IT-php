<?php
$image = imagecreatetruecolor(100, 100);
$colorR = imagecolorallocate($image, 255, 0, 0);
imagefilledrectangle($image, 0, 0, 100, 100, $colorR);
$colorWh = imagecolorallocate($image, 255, 255, 255);
$points = array(50, 50, 25, 80, 85, 45, 15, 80);
imagefilledpolygon($image, $points, 5, $colorWh);
header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);
