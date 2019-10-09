<?php
class Cars {

    static $wheel_count = 4;
    static $door_count = 4;
    static $color = 'red';
     

    

   static function car_detail(){      
    
      echo Cars::$wheel_count.'<br>';// accessing static method with properties is done this way. NO $this
      echo Cars::$door_count.'<br>';
      
    
   } 


}
$bmw = new Cars();
echo Cars::$door_count.'<br>'; //this is to call a static

echo Cars::$color;  // no instance

Cars::car_detail();








?>