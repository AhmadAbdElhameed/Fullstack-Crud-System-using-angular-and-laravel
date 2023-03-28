<?php

// Get
// Called when getting a property not accessible or not found
// Accept one parameter [$prop]

// Set
// Called when setting a value to property not accessible or not found
// Accept two parameters [$prop , $value]

class Iphone{
    public $ram;
    public $name;
    private  $color;
    public function __get($prop){
        echo 'Property [ ' . $prop . ' ] Is not accessible or not found'.'<br>';
    }

    public function __set($prop , $val){
        echo 'Property [ ' . $prop . ' ] Is not accessible or not found'.'<br>';
        echo 'You can not assign this value [ '.$val .' ]' . '<br>';
    }

}

$phone = new Iphone();
//echo $phone->color;
$phone->color = "Red";
echo "<pre>";
print_r($phone);
echo "</pre>";









