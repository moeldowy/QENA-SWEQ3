<?php

class Person{
    //class has properties,methods and magic methods
    public $name;
    public $city;

    public function __construct($name,$city){
        $this->name=$name;
        $this->city=$city;
        //$this->city="Cairo";
    }

    public function makeTea(){
        $sugar=2;
        $tea=1;
        return "Cup of tea contan Tea: $tea and Sugar: $sugar";
    }

}

$obj1 = new Person("ahmed","alex");
$obj2 = new Person("ali","Minia");
/*if(is_object($obj)){
    echo "yes it is object";
}*/
/*$obj->name="Ashraf";
$obj->city="Qena";*/
var_dump($obj1);
echo"<hr>";
var_dump($obj2);
echo"<hr>";
echo $obj1->makeTea();

function calc($x,$y){
    return $x + $y;
}
echo calc(2,3);