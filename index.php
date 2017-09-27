<?php

class Animal{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        echo $this->name;
    }
}

Class Cat extends Animal{


    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function meow(){

        echo "Cat $this->name is saying meow";
    }

}


$cat = new Cat('garfield');
$cat->getName();
echo '<br>';
$cat->meow();