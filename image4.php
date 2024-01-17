<?php
$image = imagecreatetruecolor(500, 500);
$while = imagecolorallocate($image, 255, 255, 255);
imagefilledellipse($image, 250, 250, 400, 400, $while);
header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);