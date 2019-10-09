<?php
class Cars {
var $wheels = 4;
    

function greeting(){
    echo 'Hello World';
}


}

class Trucks extends Cars{

}


$tacoma = new Trucks();
echo $tacoma->wheels;







?>