<?php
    namespace src\Controller;

    class MainController
    {
        public function Main()
        {
            $path = dirname(dirname(__DIR__));
            require $path.'/Templates/Main/main.php';
        }

        public function sayHello(string $name)
        {
            echo "Hello, $name!";
        }
    }
?>