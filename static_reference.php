<?php
class Cars {

    static $wheel_count = 4;
    static $door_count = 4;
    static $color = 'red';
     

    

   static function car_detail(){      
    
      return self::$wheel_count.'<br>'; //Static property Instead of using $this Use 'self'
      return self::$door_count.'<br>';
      
    
   }   


}

class Trucks extends Cars{

    static function display(){
        echo parent::car_detail();
    }
}


$bmw = new Cars();
echo Cars::$door_count.'<br>'; //this is to call a static

echo Cars::$color;  // no instance

echo Cars::car_detail().'<hr>';

// Call the static method from an extended class
Trucks::display();








?>