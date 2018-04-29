<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    X: <input type="text" name="num1"/>
    Y: <input type="text" name="num2"/>
    Z: <input type="text" name="num3"/>
    <input type="submit"/>
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $num3 = intval($_GET['num3']);
    $count = 0;
    if ($num1 == 0 || $num2 == 0 || $num3 == 0) {
        echo "Positive";
        return;
    } else {
        if ($num1 < 0) {
            $count++;
        }
        if ($num2 < 0) {
            $count++;
        }
        if ($num3 < 0) {
            $count++;
        }
        if ($count % 2 == 0) {
            echo "Positive";
        } else {
            echo "Negative";
        }
    }
}
?>
</body>
</html>