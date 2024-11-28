<?php
//function adalah suatu cara untuk kita dalam memodularisasi code kita
//function punya return type
/*contoh 
void: dia ga return apa apa
non void->int,string,bool,float
*/

//strlen buat itung jumlah string
//count buat itung jumlah arry
//buat kalku
function addData($value1, $value2){
    return $value1 + $value2;
}
$result =addData(value1: 10, value2:20);
echo $result;

//build in function
//empty ->buat cek apakah suatu value kosong
//isset -> buat cek apakah sebuah variabel punya value/tidak

$value="";
var_dump(empty($value));

$value= "1212";
var_dump(isset($value));
//toupper->biar outputnya jadi huruf besar
//tolower->biar outputnya jadi huruf kecil
echo strtoupper("halo semua")."\n";
echo strtolower("BIJI NAGA");

//explode
$mystring = "algo,matdis,bi";
$mystringarray= explode(",", $mystring);

print_r($mystringarray);

//implode ->nyatuin array jadi string
$mynewstring = implode("_____", $mystringarray);
echo $mynewstring . "\n";

//strreplace->mengganti suatu text/string didalam string
$mystring= "The sky is blue";
$mystring= str_replace("blue", "yellow", $mystring);
echo $mystring;

?>