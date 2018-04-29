<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style> 
</head>
<body>
    <?php
    function grayRow($num){
        for ($i = 1; $i <= 10; $i++) {
            echo "<div style='background-color: rgb($num, $num, $num)'></div>";
            $num += 5;
        }
        echo "<br />";
    }

    $color = 0;
    for ($rows = 1; $rows <= 5; $rows++) {
        grayRow($color);
        $color += 51;
    }
    ?>
</body>
</html>