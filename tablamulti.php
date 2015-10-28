<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $tabla=5;
        echo "<table border='1'>";
        echo "<tr><td>TABLA DEL $tabla</td></tr>";
        for($i=0;$i<=10;$i++){
            $x = $i * $tabla;
            echo "<tr><td>$tabla X $i = $x</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
