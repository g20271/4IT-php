<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name=sample36.php method=POST>
        <select name="fruit">
            <option value="apple">りんご</option>
            <option value="orange">みかん</option>
            <option value="grape">ぶどう</option>
        </select>
        <input type="submit" value="送信">
    </form>

    <?php
    if (isset($_POST["fruit"])) {
        print $_POST["fruit"];
    }
    ?>
</body>

</html>