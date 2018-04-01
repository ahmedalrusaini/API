<?php

class users{
    
    public $age = 0;
    
    function __construct() {
        echo "<br>construct";
    }
    
    function getName(){
        return '<br>Socrate';
    }
    
    function setAge($age){
        $this->age = $age;
    }
    
}

$user = new users();

echo $user->getName();

$user->setAge(60);

echo "<br>".$user->age;

?>