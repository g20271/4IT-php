<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>var_dump関数</title>
</head>
<body>
    <?php
    $text = "hello";
    $var = 50.3;
    $i = 10.0;
    $n = NULL;
    $sArray = array(5, 0);
    setType($i, "int");
    echo "<pre>";
    
    var_dump($text);
    var_dump($var);
    var_dump($i);
    var_dump($n);
    var_dump($sArray);
    echo "</pre>";
    ?>
</body>
</html>