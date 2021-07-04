<?php


class CafeBoy
{
    public $name;
    public $city;
    public $birtofdate;
    public $age;

    public function makeTea(){
        return"Hader enaya eltneen";
    }
}
$newPerson = new Person();
$newPerson->name="Amira";
$newPerson->city="Luxor";
$newPerson->birtofdate="25-02-1999";

echo $newPerson->makeTea();
echo $newPerson->name;
//var_dump($newPerson);