<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subject19</title>
</head>
<body>
    <?php
    $address = '三豊市詫間町551-1番地';

    $start = 0;
    $end = strpos($address, '市', $start);
    $shi = substr($address, $start, $end - $start);
    $start = $end + strlen('市');

    $end = strpos($address, '町', $start);
    $tyou = substr($address, $start, $end - $start);
    $start = $end + strlen('町');

    $end = strpos($address, '番地', $start);
    $banchi = substr($address, $start, $end - $start);

    echo '市名: ' . $shi .'市'. '<br>';
    echo '町名: ' . $tyou . '町'.'<br>';
    echo '番地: ' . $banchi .'番地'. '<br>';
    ?>
</body>
</html>