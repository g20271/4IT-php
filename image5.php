<?php
$image = imagecreate(500, 500);
imagecolorallocate($image, 0, 0, 0);
$yellow = imagecolorallocate($image, 255, 255, 0);
imageellipse($image, 250, 250, 400, 400, $yellow);
header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);