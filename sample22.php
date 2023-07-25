<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreachループのサンプル(キー利用)</title>
</head>ß

<body>
    <?php
    $arr = array(100, 101, 102, 103, 104, 105, 106, 107, 108, 109);
    foreach ($arr as $key => $val) {
        echo "キー" . $key . "の値" . $val . "です<br>";
    }
    ?>
</body>

</html>