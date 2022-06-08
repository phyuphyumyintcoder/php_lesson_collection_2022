<?php 

// parent class
class Fruit 
{
 public $name;
 public $color;

 public function __construct($name, $color)
 {
  $this->name = $name;
  $this->color = $color;
 }
 
 public function intro()
 {
  echo "I am a {$this->name} and my color is {$this->color}";
 }
 
}

// child class

// class Strawberry extends Fruit
// {
//  public function message()
//  {
//   echo "Am i a fruit or a berry?";
//  }
// }

// $str = new Strawberry("Strawberry", "Red");
// $str->intro();
// echo "<br>";
// $str->message();