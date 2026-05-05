<?php
    class A
    {
        public function sayHello()
        {
            return "Hello. I am A.";
        }

    }

    class B extends A
    {
        public function sayHello()
        {
            return parent::sayHello()." It wase joke. I am B.";
        }
    }

    $a = new A;//<- рыбы
    $b = new B;//<- карась
    echo "A: ".$a->sayHello();
    echo '<br>';
    // var_dump($a instanceof A);
    echo '<br>';
    echo "B: ".$b->sayHello();
    echo '<br>';
    // var_dump($b instanceof A);




    class AA
    {
        public function method1()
        {
            return $this->method2();
        }
        public function method2()
        {
            return "A";
        }

    }

    class BB extends AA
    {
        public function method2()
        {
            return 'B';
        }
        
    }
    $a = new AA;
    $b = new BB;
    echo $b->method1();

?>