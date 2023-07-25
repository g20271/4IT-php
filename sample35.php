<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name=sample35.php method=POST>
        <input type="hidden" name="abc" value="隠しフィールドです">
        <input type="submit" value="送信">
    </form>

    <?php
    if (isset($_POST["abc"])) {
        print $_POST["abc"];
    }
    ?>
</body>

</html>