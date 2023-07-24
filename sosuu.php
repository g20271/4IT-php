<?php
$yaku = 0;
$sosu = 0;
for ($i = 1; $i <= 100; $i++) {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % $j == 0) {
            $yaku = $yaku + 1;
        }
    }

    if ($yaku == 2) {
        print $i . " ";
        $sosu = $sosu + 1;
    }
    $yaku = 0;
}
print "<br>1から100までの素数は" . $sosu . "個あります";
?>