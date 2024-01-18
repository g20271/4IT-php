<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mb_strstr()関数の例</title>
</head>
<body>
    <?php
        if(mb_strstr("私の名前は天竺です", "天竺")){
            echo "result: [" . mb_strstr("私の名前は天竺です", "天竺") . "]<br>\n";
        }
        else {
            echo "result: [false]<br>\n";
        }
    ?>
</body>
</html>