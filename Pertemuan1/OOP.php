<?php
/*OOP->suatu paradigma pemrograman coding-> yang mengimpleentasikan dunia nyata
OOP->Object Oriented Programing (Program berbasis objek
Ga bakal ada Function dan variabel
cuma punya data dan behavior(data = property& beahvior = method
*/
// object orang punya data:
// nama,
// umur,
// gender,

class person{
    public $nama, $umur, $gender;
    public function __construct($name, $age, $gender){
        $this->nama = $name;
        $this->umur = $age;
        $this->gender = $gender;
    }
    public function Introduction(){
        echo "My name is: " . $this->nama;
    }
}
class employee extends person{
    public $salary, $jobposition;
    public function __construct($name, $age, $gender, $salary, $jobposition){
        parent::__construct($name, $age, $gender);
        $this->salary = $salary;
        $this->jobposition = $jobposition;
    }
}
$devin = new person("Devin", 21, "male");
var_dump($devin);
?>