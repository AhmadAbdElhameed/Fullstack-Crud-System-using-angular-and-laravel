<?php

// Call
// When Invoking Function not accessible or not found
// Accept 2 parameters [$method name , $Params]

class Iphone{
    public $ram;
    public $name;
    public function __call($method , $args){
        echo "The Method [" . $method . "] Not Found Or Not Accessible" . "<br>";
        print_r($args);
    }
}

$phone = new Iphone();
$phone->sayHello("Ahmad","4 GB");
echo "<pre>";
print_r($phone);
echo "</pre>";









