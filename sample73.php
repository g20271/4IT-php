<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_replace()関数の例1</title>
</head>
<body>
    <?php
        $company = "Softbank Creative Corp.";
        echo str_replace("Creative", "Group", $company) . "<br>\n";
    ?>
</body>
</html>