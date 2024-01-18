<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sscanf()関数の例1</title>
</head>
<body>
    <?php
        list($p) = sscanf("合計金額 3500円", "合計金額 %d円");
        echo "result:" . $p . "<br>\n";
    ?>
</body>
</html>