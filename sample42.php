<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>判定関数</title>
</head>
<body>
    <?php
    $a="";
    $b="詫間一郎";
    if (empty($a)) {
        echo '$a は空です<br>';
    }
    if (isSet($b)) {
        echo '$b には' . $b . "が代入されています";
    }
    ?>
</body>
</html>