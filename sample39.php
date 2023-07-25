<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name=sample38.php method=POST>
        <input type="checkbox" name="fruit1" value="apple">りんご
        <input type="checkbox" name="fruit2" value="orange">みかん
        <input type="checkbox" name="fruit3" value="grape">ぶどう
        <input type="submit" value="送信">
    </form>

    <?php
    foreach ($_POST as $key => $value) {
        print $key . "=" . $value . "<br>\n";
    }
    ?>
</body>

</html>