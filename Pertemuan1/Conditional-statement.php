<?php
//kalo mau ada yang di input
echo "masukan GPA anda";
$gpa = (float)trim(fgets(STDIN));
if($gpa>3.7){
    echo " Selamat anda cumlaude";
} else if($gpa>3.6 && $gpa<=3.7){
    echo "Selamat anda magna cumlaude";
} else {
    echo "Yaudah GWS ";
}
$name = "josh";
switch ($name){
    case "josh":
        echo "Hello Josh";
        break;
    case "Devin":
        echo "Hello Devin";
        break;
    case "DAJAL":
        echo "Hello Dajal";
        break;
    default:
        echo "Lu siapa bang?";
        break;
}
?>
