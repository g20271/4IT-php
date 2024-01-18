<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sscanf()関数の例1</title>
</head>
<body>
    <?php
        list($n1, $n2, $n3) = sscanf("03-1111-2222", "%2s-%d-%d");
        echo "市外局番:" . $n1 . "<br>\n";
        echo "市内局番:" . $n2 . "<br>\n";
        echo "番号:" . $n3 . "<br>\n";
    ?> 
</body>
</html>