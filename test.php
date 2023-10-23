<?php
    //Open in terminal
    calculate:
    $a = (int)readline("Enter First Integer: ");
    $b = (int)readline("Enter Second Integer: ");

    operate:
    $operator = readline("Enter Operation (add, sub, multi, div, mod): ");

    if ($operator == "add") {$c = $a + $b;}
    else if ($operator == "sub") {$c = $a - $b;}
    else if ($operator == "multi") {$c = $a * $b;}
    else if ($operator == "div") {$c = $a / $b;}
    else if ($operator == "mod") {$c = $a % $b;}
    else {goto operate;}

    echo $c;
    echo "<br>";
    repeat:
    $repeat = readline("Again? (y/n): ");
    if ($repeat == "y") {goto calculate;}
    else if ($repeat == "n") {goto end;}
    else {goto repeat;}

    end:
?>