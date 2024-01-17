<?php
$image = imagecreatetruecolor(600, 100);
imagecolorallocate($image, 0, 0, 0);
$yellow = imagecolorallocate($image, 255, 255, 0);
imageTTFtext($image, 60, 0, 10, 70, $yellow, "/usr/share/fonts/vlgothic/VL-Gothic-Regular.ttf", "詫間キャンパス");
header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);