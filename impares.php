<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $impares=0;
        $num=0;
        while ($impares<10){
            if (($num%2)==1){
                echo "$num es IMPAR<br>";
                $impares++;
            }
            $num++;
        }
    ?>
</body>
</html>
