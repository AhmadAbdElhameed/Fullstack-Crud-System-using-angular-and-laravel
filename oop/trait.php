<?php

// Trait
//
//

trait Touch{
    public function touch(){
        echo "This is Touch feature";
    }
}
trait FaceDetect{
    public function faceDetect(){
        echo "This is faceDetect feature";
    }
}

trait FingerPrint{
    public function fingerPrint(){
        echo "This is fingerPrint feature";
    }
}

class Phone{
    use Touch;
    public $email;
    public $user;
}

class Sony{
    public $email;
    public $user;
}

class Nokia{
    use FaceDetect;
    use FingerPrint;
    use Touch;
    public $email;
    public $user;
}

$iphone = new Phone();
$iphone->touch();
echo "<pre>";print_r($iphone);echo "</pre>";

$sony = new Sony();
echo "<pre>";print_r($sony);echo "</pre>";

$nokia = new Nokia();
echo "<pre>";print_r($nokia);echo "</pre>";



