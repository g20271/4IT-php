<?php
function fact($n) {
    if($n == 0) return 1;
    return $n * fact($n - 1);
}

$n = 10;
echo 'fact($n) = ' . fact($n) . "<br>";