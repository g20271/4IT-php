<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="subject10.php" method="POST">
        <input type="password" name="password">
        <input type="submit" value="送信">
    </form>

    <?php
    $filename = "temp/pass.txt";
    $login = 0;
    if (file_exists($filename) && array_key_exists("password", $_POST)) {
        $fh = @fopen($filename, "r");
        if ($fh) {
            while(!feof($fh)) {
                $temp = fgets($fh);
                if (str_replace("\n", "", $temp)  == $_POST["password"]) {
                    print "ログイン成功<br>";
                    $login = 1;
                    break;
                }
            }
            fclose($fh);

            if ($login == 0) {
                print "ログイン失敗<br>";
            }
        } else {
            print "file can't open<br>";
        }
    }
    ?>
</body>

</html>