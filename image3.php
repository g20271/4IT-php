<?php
$image = imagecreatetruecolor(100, 100);
$blue = imagecolorallocate($image, 0, 0, 255);
imagefill($image, 0, 0, $blue);
header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);
