<?php 

class Customer {
    // constructor function
    function _construct()
    {
        // implementateon
    }

    public function set_name($name){
        $this->name = $name;
        return $this->name;
    }

    public function get_name()
    {
        echo $this->name;
    }
}

$object = new Customer;
//echo $object;
$object->set_name("Ashin");
$object->get_name();

?>