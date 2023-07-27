<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="subject09.php" method="POST">
        <input type="password" name="password">
        <input type="submit" value="送信">
    </form>

    <?php
    $filename = "temp/pass.txt";
    if (file_exists($filename) && array_key_exists("password", $_POST)) {
        $fh = @fopen($filename, "a");
        if ($fh) {
            fputs($fh, $_POST["password"] . "\n");
            fclose($fh);
        } else {
            print "file can't open<br>";
        }
    }
    ?>
</body>

</html>