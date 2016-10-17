<?php

class car{
    public $color;//property
    
    public function setColor($c){
        return 'car is :'.$this->color=$c;
    }
    
    public function sayHello(){
        return 'sayHello';
    }
}

$newcar=new car;

$test=$newcar->setColor('red');
echo $test;
echo '<hr>';
echo $newcar->sayHello();
echo '<hr>';
echo $newcar->color'orange';
