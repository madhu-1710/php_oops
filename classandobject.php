<?php

echo "<h2><u>Bike Details:</u></h2>";

//$myname = "MadhuBalan";

class MyBike{
    public $dream_bike="KTM RC390";

    public $brand="Bajaj";
    public $model="NS200";
    public $color="Red";
    public $prize="Rs.1,45,000/-";

    public function printBikeDetails(){
        $fav_bike="NS200";
        echo "My Favourite bike is $fav_bike.  And I have buy a $this->color color $this->model bike from $this->brand Showroom and it's prize is $this->prize";
        echo nl2br("\n");
        //echo $this->dream_bike;
    }
}

$mybike = new MyBike();
$mybike->printBikeDetails();

echo "My Dream Bike : ".$mybike->dream_bike;
echo"<br>";
echo "My bike Color : ".$mybike->color;
echo"<br>";
echo "My bike Prize : ".$mybike->prize;
echo"<br>";
echo "My bike Model : ".$mybike->model;

echo "<br>";
echo "<br>";

echo "<h2><u>My College Details :</u></h2>";

class College{

    private $college = "St.John's College";
    private $location = "Palayamkottai, Tirunelveli";
    private $major = "Physics";
    private $degree = "B.Sc";
    private $batch = "2017-2020";

    public $HOD ="Dr. Daniel Sweetline";
 

    public function printCollegeDetails(){

        //$x= new College();         //create an object to print a $batch property instead of '$this' object
        $nickname="Oxford of South-India";

        echo "I have completed my UG degree $this->degree ($this->major) in $this->college at $this->batch. My college located in $this->location.";
        echo nl2br("\n");
        echo "My College also called as <i>$nickname</i>";
        //echo $x->batch;       // use 'x' object instead of '$this' object to print 
    }    
}

$myCollege= new College();
$myCollege->printCollegeDetails();
// echo $myCollege->college;  //Try to use private property ($college)
echo nl2br("\n");
echo "My HOD Name is "."<b>".$myCollege->HOD."</b>";



class Person{
    public $name;
    public function createPerson($name){
        // $this->$name =$name;
        echo $name;
    }
}

$madhu = new Person;
$madhu->createPerson('Maddy');

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";





?>