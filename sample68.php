<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mb_strlen()サンプルページ</title>
</head>
<body>
    <?php
        $t = "サンプルページ";
        echo "タイトルタグは" . mb_strlen("<title>$t</title>") . "文字です。<br>\n";
    ?>
</body>
</html>