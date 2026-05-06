<?php
    class Cat
    {
        private $name;
        private $color;
        private $weight;

        public function __construct($name, $color, $weight)// <- функция шаблон __construct()
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function setWeight($weight)
        {
            if($weight > 5 ) echo "Ваш коt жирный. Его вес: $weight кг.".'<br>';
            else $this->weight = $weight;

            if($weight < 0) echo "Вашего кота не существует (примите таблетки пока не стало хуже). Его вес: $weight кг.".'<br>';
            else $this->weight = $weight;
        }

        public function setColor($color)
        {
            if($color == "радужный" ) echo "Мы не любим $color цвет".'<br>';
            else $this->color = $color;
        }

        public function setName($name)
        {
            if($name == "кот" || $name == "cat" || $name == "Кот" || $name == "Cat") echo "Эта слишком банальное имя - $name ,будь креативнее.".'<br>';
            else $this->name = $name;
        }


        public function getWeight()
        {
            return $this->weight;
        }
        
        public function getColor()
        {
            return $this->color;
        }
        
        public function getName()
        {
            return $this->name;
        }

        public function getInfo()
        {
            echo " Вес кошки: $this->weight".'<br>';
            echo "Цвет кошки: $this->color".'<br>';
            echo "Имя кошки: $this->name".'<br>';
        }

        public function sayMeow()
        {
            echo 'Meow'.'<br>';
            echo "Меня зовут: $this->name";
        }

    }

    $cat = new Cat("Барсик", "Синий", 3);
    $cat2 = new Cat("T1000", "красный", 3);
    $cat3 = new Cat("кб", "зелёный", 3); //! Всегда создание объекта через new!!!

    echo "Cat1".'<br>';
    echo $cat->getInfo();
    echo $cat->sayMeow().'<br>';
    // var_dump($cat).'<br>';
    echo '<br>';

    echo "Cat2".'<br>';
    echo $cat2->getInfo();
    echo $cat2->sayMeow().'<br>';
    // var_dump($cat2).'<br>';

    echo '<br>';

    echo "Cat3".'<br>';
    echo $cat3->getInfo();
    echo $cat3->sayMeow().'<br>';
    // var_dump($cat3).'<br>';
?>