<?php

class Cars{

    public $model = 'Truck';
    static $year = 1979;
    static $owner = 'Mike Dallas';

    static function get_Owner(){
       
        echo Cars::$owner; // access static property
       
    }





}

$ford = new Cars();
//public property
echo $ford->model.' ';

// access a static property
echo Cars::$year.' ';

// acces a static method
Cars::get_Owner();



?>
