<?php 
class Customer {
 //Access Modifiers
 public $name;
 private $age;

 public function setNmae($name) {
  $this->name = $name;
 }

 public Function getNmae() {
  return $this->name;
 }

 public function setAge($age){ 
 $this->age = $age; 
 }

 public function getAge(){
  return $this->gae;
 } 
}
// create an pbject
$customer = new Customer();
// set the name property
$customer->setName('John');
// get the name property
echo $customer->getName();


?>