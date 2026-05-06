<?php

    abstract class AbstractClass//!<- абстрактный класс.
    {
        abstract public function getValue();//<-абстрактная функция пишется так abstract * * *;
        public function printValue()
        {
            echo "Value ".$this->getValue();
        }
    }

    class ClassA extends AbstractClass
    {

        public function __construct(private $x){}
        public function getValue()
        {
            return $this->x;
        }
    }
    $a = new ClassA("Meow");
    $a->printValue();
?>