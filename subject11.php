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
    $items = array();
    foreach ($_POST as $key => $value) {
        if ("newitem" != $key && "button" != $key && "vote" != $key) {
            $items[$key] = $value;
        }
        if ("vote" == $key) {
            $countupkey = $value;
        }
    }
    if (!empty($_POST["newitem"])) {
        $items[$_POST["newitem"]] = 1;
    }
    if (!empty($countupkey)) {
        ++$items[$countupkey];
    }
    arsort($items);

    ?>

    <form method="POST" action="subject11.php">
        <?php
        foreach($items as $key => $count) {
        ?>

        <input type="hidden" name="<?= $key ?>" value="<?= $count ?>" />
        <input type="radio" name="vote" value="<?= $key ?>" />
        <?= $key ?>(<?= $count ?>票) <br/>

        <?php
        }
        ?>

        新規項目<input type="text" name="newitem">
        <input type="submit" name="button" value="投票">
    </form>
</body>

</html>