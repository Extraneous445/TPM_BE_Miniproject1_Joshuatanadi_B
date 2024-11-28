<?php
$a = 1;
$b="string";
$c= true;
$d= 10.9;
$arr= [1,2,3,4,5,"string", true, 10.021];
$obj1= (object) $arr;
$obj2=[
    "nama"=> "php",
    "age"=>10,
];
// var_dump($d); //baca tipe data
const PI = 3.14; //ga pake dolar, pake caps
define ("nama", "php");// kalo kita print "nama" maka yang keluar adalah "PHP"

//echo=print, print_r
// echo $a;
//kalo mau enter/tuurn line bisa pake "\n"
//kalo mau print arry dia ga bisa langsung keluarin semua mesti satu satu, kalo mau print arr dan obj pake "print_r
// echo [$a];
// print_r ($arr);
// print_r($obj2);


//aritmatika
//misal
$c= 10;
$d=6;

// echo $c+$d  ,"\n";
// echo $c-$d  ,"\n";
// echo $c*$d  ,"\n";
// echo $c/$d  ,"\n";
// echo $c%$d  ,"\n";

//Assignment Operator, bisa semua aritmatika
$x=5;
$x+=5;
// echo $x;
// Operator perbandingan 
//== , !=, <,>, <=,>=, ==={identik}, !=={identik}
// var_dump(10 == "10");
// var_dump(10==="10");

// If&Else
// if(10=="10"){
//     echo "Benar";
// } else{
//     echo "salah";
// };

//operator Logika && || !
$x=10;
if(!($x>5 && $x<20)){
    echo "Salah";
} else{
    echo "Benar";
};
?>