<?php
$fn = "ground.jpg";
$gz = imagecreatefromjpeg($fn);
list($w, $h) = getimagesize($fn);
$new_h = 200;
$new_w = $w * $new_h / $h;
$mythumb = imagecreatetruecolor($new_w, $new_h);
imagecopyresized($mythumb, $gz, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
imagejpeg($mythumb, "temp/thumb.jpg");
imagedestroy($gz);
print "<img src='temp/image66.jpg' />サムネイル<br>";
print "<img src='".$fn."' />元画像";