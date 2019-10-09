<?php

class Cars{

    Private $price = 1900;

    public function GetPrice()
    {
        return $this->price;
    }

    public function SetPrice()
    {
        return $this->price = $this->price + 200;
    }



}

$ford = new Cars();
echo 'Price: '.$ford->GetPrice();

// set new price
echo'<h2>Set New Price</h2>';
echo $ford->SetPrice();




?>