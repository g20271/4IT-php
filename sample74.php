<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_replace()関数の例2</title>
</head>
<body>
    <?php
        $motto = "I really need sincerity, belief and beneficence.";
        $tatemae = array("sincerity", "belief", "beneficence");
        $honne = array("Drag", "Sex", "Rock'n'Roll");
        echo str_replace($tatemae, $honne, $motto) . "<br>\n";
    ?>
</body>
</html>