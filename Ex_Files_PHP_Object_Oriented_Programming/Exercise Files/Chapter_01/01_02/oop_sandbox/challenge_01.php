<?php

class Bicycle{
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name(){
        return $this->year . " " . $this->brand . " " . $this->model . "<br />";
    }

    function weight_lbs(){
        // 1kg = 2.2046226218 lbs
        return floatval($this->weight_kg) * 2.2046226218;
    }

    function set_weight_lbs($value){
        $this->weight_kg = floatval($value) / 2.2046226218;
    }
}

$bicycle1 = new Bicycle;
$bicycle1->brand = "Kawasaki";
$bicycle1->model = "Version 2";
$bicycle1->year = "2018";
$bicycle1->weight_kg = 2;
echo "<br />";
echo $bicycle1->name();
echo $bicycle1->weight_lbs() . " lbs <br />";

$bicycle1->set_weight_lbs(2);
echo $bicycle1->weight_kg . " kg <br />";
echo $bicycle1->weight_lbs() . " lbs <br />";
?>