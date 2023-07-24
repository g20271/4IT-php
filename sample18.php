<?php
$a = 2;
$cnt = 1;
while ($cnt <= 10) {
    print $cnt . "⇨" . $a;
    print "<br>";
    $a *= 2;
    $cnt++;
}
print "ループ完了！";
