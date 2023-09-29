<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Types</title>
</head>
<body>
    <?php 
        $num1 = 12;
        $num2 = 24;
        $num3 = 3;
        $num4 = 5;

        $add = $num1 + $num2;
        $subtr = $num2 - $num1;
        $mult = $num1 * $num3;
        $div = $num2 / $num3;
        $mod = $num1 % $num4;
        $incr = $num1++;
        $decr = $num2--;

        print "
        $num1 + $num2 = $add<br>
        $num2 - $num1 = $subtr<br>
        $num1 * $num3 = $mult<br>
        $num2 / $num3 = $div<br>
        $num1 % $num4 = $mod<br>
        $num1++ = $incr<br>
        $num2-- = $decr
        "
    ?>
</body>
</html>