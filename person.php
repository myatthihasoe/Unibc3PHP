<?php
    class Person{
        private $name;
        private $age;

        // constructor 
        function _construct($name,$age){
            $this->name = $name; //obj ko hlan khall
            $this->age = $age;
        }

        function getData(){
            return [$this->name,$this->age];
        }
    }

    $ps = new Person("Mg Mg", 18);
    print_r($ps->getData());

?>