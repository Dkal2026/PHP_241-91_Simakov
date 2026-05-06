<?php

    class A
    {
        public static function test(int $x)
        {
            return 'x = '.$x;
        }
    }

    echo A::test(1);
    echo "<br>";


    class User
    {
        private $role;
        private $name;

        public function __construct(string $name, string $role)
        {
            $this->name = $name;
            $this->role = $role;
        }

        public static function createAdmin(string $name)
        {
            return new self('admin', $name);
        }
    }

    var_dump(User::createAdmin('Ivan'));
    echo "<br>";


    class B
    {
        public static $x;
        public function getX()
        {
            return self::$x;
        }
    }

    B::$x = 5;
    echo B::$x;
    $b = new B;
    echo "<br>";
    echo $b::$x;
    echo "<br>";
    echo $b->getX(5);

    echo "<br>";

    class Human
    {
        public static $count = 0;

        public function __construct()
        {
            return self::$count++;
        }
        public static function getCountHuman()
        {
            return self::$count;
        }

    }

    $human1 = new Human;
    $human2 = new Human;
    $human3 = new Human;
    $human4 = new Human;
    $human5 = new Human;

    echo Human::getCountHuman();
?>