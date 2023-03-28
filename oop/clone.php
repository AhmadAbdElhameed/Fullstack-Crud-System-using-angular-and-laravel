<?php

// Clone
// Typical copy of object in php works by reference
// means both (main and copy) object will be interlinked


class Car{
    public $name;
    public $email;

    public function __construct($na , $em){
        $this->name = $na;
        $this->email = $em;
    }
//    public function __clone(){
//        $this->email = clone $this->email;
//    }

}

$car = new Car("Ahmad" , "Am@gmail.com");

echo "<pre>";
print_r($car);
echo "</pre>";

$copy = clone $car; // if you remove clone the copy will have the same values of main every time you change the values

$copy->name = "Sayed";
$copy->email = "Sa@sa.com";

echo "<pre>";
print_r($car);
echo "</pre>";

echo "<pre>";
print_r($copy);
echo "</pre>";




