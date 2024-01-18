<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subStr()関数の例</title>
</head>
<body>
    <?php
        $p = strRpos("C:\\path\\to\\config.txt", ".");
        $f = strRpos("C:\\path\\to\\config.txt", "\\");
        if(FALSE === $p || FALSE === $f){
            echo "ファイル名が検出できません。<br>\n";
        }
        else {
            echo "ファイル名は" . substr("C:\\path\\to\\config.txt", $f, $p - $f) . "です。<br>\n";
        }
    ?>
</body>
</html>