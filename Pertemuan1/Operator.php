<?php
    $value1 = 132;
    $value2 = 201;

    echo $value1 + $value2 . "\n";
    echo $value1 - $value2 . "\n";
    echo $value1 * $value2 . "\n";
    echo $value1 / $value2 . "\n";
    echo $value1 % $value2 . "\n";
    
    //assignoperator -> ngeasign suatu value ke value lain
    $value1 += 1000;
    echo $value1 * $value2 . "\n";

    //operator (==,!=, >, <, <=, >=, ===, !==);
    //=== ->membandingkan secara identik termasuk tipe data
    //misal:
    var_dump(12!="!2");

    //logical operator
    //&&, ||, !
    var_dump($value1!=$value2);

?>