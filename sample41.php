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
    $filename = "temp/file1.text";
    if (file_exists($filename, "r")) {
        $fh=@fopen($filename, "r");
        if ($fh) {
            while(!feof($fh)) {
                $temp=fgets($fh);
                if($temp <> "") { echo str_replace("\n", "<br>", "★$temp"); }
            }
            fclose($fh);
        }else {
            print "ファイルの読み込みのオープンに失敗しました";
        }
    }
    ?>
</body>

</html>