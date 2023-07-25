<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <b>更新ボタンで更新してください。<br>
        [現在時刻 ==> 乱数]のデータがファイルに追加されます。<br>
    </b>
    <p>
        <?php
        $filename = "temp/file1.text";
        $fh = @fopen($filename, "a");
        if ($fh) {
            $msg = date("Y/m/d H:i:s") . "==>";
            $msg .= rand(1, 9999) . "\n";
            fputs($fh, $msg);
            fclose($fh);
        } else {
            print "ファイルの書き込みのオープンに失敗する";
        }
        ?>
</body>

</html>