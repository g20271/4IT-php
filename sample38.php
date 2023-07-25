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
        <input type="radio" name="fruit" value="apple">りんご
        <input type="radio" name="fruit" value="orange">みかん
        <input type="submit" value="送信">
    </form>

    <?php
    if (isset($_POST["fruit"])) {
        print $_POST["fruit"] . "<br>\n";
    }
    ?>
</body>

</html>