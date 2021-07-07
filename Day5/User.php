<?php


class User
{
    public $name;
    public $city;
    public $date_of_birth;//25-01-2021
    public $status;
    public $age;// Derived value

    public function __construct(){
        $date_of_birth=$this->date_of_birth;
        $diff=date_diff(date_create($date_of_birth),date_create(date("Y-m-d")));
        $this->age=$diff->format('%y');
    }
}