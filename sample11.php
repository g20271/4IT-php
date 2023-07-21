<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=1;
    $b=2;
    $c='c';
    echo '$aは数値の1' . '<br>';
    echo '$bは数値の2' . '<br>';
    echo '$cは文字列の2' . '<br><br>';
    echo '$a > $b:' . ($a > $b) . '<br>';
    echo '$a < $b:' . ($a < $b) . '<br>';
    echo '$b >= 2:' . ($b >= 2) . '<br>';
    echo '$c >= 2:' . ($c >= 2) . '<br>';
    echo '$b == $c:' . ($b == $c) . '<br>';
    echo '$b === $c:' . ($b === $c) . '<br>';
    ?>
</body>
</html>