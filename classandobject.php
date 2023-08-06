<?php

class MyBike{

    public $brand="Bajaj";
    public $model="NS200";
    public $color="Red";
    public $prize="Rs.1,45,000/-";
    public function printBikeDetails(){
        echo "I have buy a $this->color color $this->model bike from $this->brand Showroom and it's prize is $this->prize";
    }
}

$mybike = new MyBike();
$mybike->printBikeDetails();


?>