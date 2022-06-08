<?php 
include('1_inheritances.php');
class Strawberry extends Fruit
{
 public function message()
 {
  echo "Am i a fruit or a berry?";
 }
}

// create object
$strawberry = new Strawberry("Strawberry", "Red");
$strawberry->intro();