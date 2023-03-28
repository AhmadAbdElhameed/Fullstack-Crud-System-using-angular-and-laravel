<?php

// Construct
// called when object has created
// can be inherited


// Destruct
// Called when object is destroyed

class Iphone{
    public $ram;
    public $name;


    public function __construct($na , $ra){
        $this->name = $na;
        $this->ram = $ra;

        echo "Hello " . $na . ' ,Your phone has ' . $ra . ' GB Ram'. '<br>';
    }

}

$phone = new Iphone("Ahmad",3);

echo "<pre>";
print_r($phone);
echo "</pre>";


//class Sony extends Iphone {
//
//}
//
//$sony = new Sony();
//echo "<pre>";
//print_r($sony);
//echo "</pre>";








