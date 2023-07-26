<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>数値のソート</title>
</head>
<body>
    <?php
    $a = array(10, 8, 35, 100, 66, -1);
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    
    sort($a);
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    
    rsort($a);
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    ?>
</body>
</html>