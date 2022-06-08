<?php
class Fruit { 
    public $name;
    public $color;

    function set_name($name) { 
        return $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_color($color) { 
        return $this->color = $color;
    }
    function get_color() { 
        return $this-> color;
    }
}
$apple = new Fruit($apple);
$apple->set_name("Apple");
$apple->set_color("Red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>