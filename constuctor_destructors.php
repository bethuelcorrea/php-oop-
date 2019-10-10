<?php
class Cars {

    public $wheel_count = 4;
    static $door_count = 4;
        

    

   function __construct(){      
    
      //echo $this->wheel_count.'<br>';
      echo self::$door_count++;
       
    
   } 
   function __destruct(){      
    
    echo $this->wheel_count.'<br>';
    //echo self::$door_count;
     
  
 } 



}
$bmw = new Cars();
echo '<hr>';
$ford = new Cars();
echo '<hr>';
$Geo = new Cars();
echo '<hr>';







?>