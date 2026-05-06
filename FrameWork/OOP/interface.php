<?php

    interface CalcSquare //?<- интерфейс.
    {
        public function calculateSquare():float;//<- функция внутри интерфейса.
    }
    class Rectangle implements CalcSquare//!<- подключение интерфейса к классу.
    {
        private $x;
        private $y;

        public function __construct(int $x, int $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function calculateSquare():float//*<- тип данных возвращаемых этой фукции.
        {
            return $this->x * $this->y;
        }

    }

    class Square //!<- класс не подключено интерфейсу.
    {
        public function __construct(private $x){}
        public function calculateSquare():float
        {
            return pow($this->x, 2);
        }
    }

    class Circle implements CalcSquare
    {
        const pi = 3.14;
        public function __construct(private $r){}
        public function calculateSquare():float
        {
            return self::pi * ($this->r ** 2);
        }
    }

    $regtangle = new Rectangle(2, 1);
    $square = new Square(2);
    $circle = new Circle(3);

    $array = [new Circle(3), new Square(2), new Rectangle(2, 1)];
    foreach($array as $research)
    {
        if($research instanceof CalcSquare)//!<- проверяет подписан ли класс на этот интерфейс.
        {
            echo $research->calculateSquare().'<br>';
        }
        else{
            echo "This class not intance calculateSquare <br>";
        }
        
    }
?>