<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    define("TAX", 5);
    $price = 1500;
    $quantity = 2;
    ?>
    <table border="1">
        <tr>
            <th>価格(円)</th>
            <th>数量(個)</th>
            <th>税率(%)</th>
            <th>合計(円)</th>
        </tr>
        <tr>
            <td> <?= $price ?>
            <td> <?= $quantity ?>
            <td> <?= $TAX ?>
            <td> <?= $price * $quantity * (1 + (TAX / 100)) ?>
        </tr>
    </table>
</body>

</html>