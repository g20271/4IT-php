<?php
print "今日→" . date("Y/m/d") . "<br>";
print "昨日→" . date("Y/m/d", strtotime("-1 day")) . "<br>";
print "明日→" . date("Y/m/d", strtotime("-1 day")) . "<br>";
print "1ヶ月後→" . date("Y/m/d", strtotime("+1 month")) . "<br>";
print "2ヶ月後→" . date("Y/m/d", strtotime("+2 month")) . "<br>";
print "現在時刻→" . date("h: i: s") . "<br>";
print "8時間15分後→" . date("h:i:s", strtotime("+8 hour 15 minute")) . "<br>";