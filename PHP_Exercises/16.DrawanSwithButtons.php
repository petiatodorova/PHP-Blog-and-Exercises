<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
    <?php
    for ($row = 1; $row <= 9; $row++) {
        if ($row % 4 == 1)
            for ($col = 1; $col <= 5; $col++) {
                echo "<button style='background-color: blue'>1</button>";
            } else if ($row >= 2 && $row <= 4){
            echo "<button style='background-color: blue'>1</button>";
            for ($col = 2; $col <= 5; $col++) {
                echo "<button>0</button>";
            }
        } else {
            for ($col = 1; $col <= 4; $col++) {
                echo "<button>0</button>";
            }
            echo "<button style='background-color: blue'>1</button>";
        }
        echo "<br />";
    }
    ?>
</body>
</html>