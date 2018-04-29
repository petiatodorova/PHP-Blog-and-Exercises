<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
        if (isset($_GET['num'])) {
            $num = intval($_GET['num']);
            $arr = array_fill(0, $num, 0);
            $arr[0] = 1;
            $arr[1] = 1;
            for ($i = 2; $i < $num; $i++) {
                $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
            }
            echo implode(" ", $arr);
    }
    ?>
</body>
</html>