<?php

// Static Keyword : are used to access properties or methods in global scope .
// declare static methods or properties make them accessible without needing an instantiating of the class


class Human{

    public static $name;
    public $email;

    public static function hello(){
        echo "Hello";
    }
}

// $user = new Human();

// echo $user->hello();

echo Human::hello(); // when declare method as static you can access it without create an object



// can not access static property when creating object but you can access methods

$user = new Human();
echo $user->hello();
// echo $user->name(); // error here