<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name=sample34.php method=POST>
        複数行テキスト<br>
        <textarea rows="3" cols="20" name="abc"></textarea>
        <input type="submit" value="送信">
    </form>

    <?php
    if (isset($_POST["abc"])) {
        $abc = $_POST["abc"];
        $abc = str_replace("\r\n", "\n", $abc);
        $abc = str_replace("\r", "\n", $abc);
        $abc = str_replace("\n", "<br>", $abc);
        print $abc;
    }
    ?>
</body>

</html>