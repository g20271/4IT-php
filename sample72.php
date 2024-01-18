<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sscanf()関数の例3</title>
</head>
<body>
    <?php
        list($s, $f) = sscanf("NHK-FM 82.5MHz", "%s %fMHz");
        echo "局名:" . $s . "<br>\n";
        echo "周波数:" . $f . "<br>\n";
    ?>
</body>
</html>