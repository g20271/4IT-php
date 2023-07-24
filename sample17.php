<?php
$a = 2;
for ($cnt = 1; $cnt <= 10; $cnt++) {
    print $cnt . "⇨" . $a;
    $a *= 2;
}
print "ループ完了！";
