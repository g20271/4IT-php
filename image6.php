<?php
$image = imagecreatetruecolor(150, 150);
imagecolorallocate($image, 255, 255, 255);
$color=imagecolorallocate($image, 255, 0, 0);
imagestring($image, 1, 10, 0, "Hello 123", $color);
imagestring($image, 2, 10, 40, "Hello 123", $color);
imagestring($image, 3, 10, 80, "Hello 123", $color);
imagestring($image, 4, 10, 120, "Hello 123", $color);
imagestring($image, 5, 10, 160, "Hello 123", $color);

header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);