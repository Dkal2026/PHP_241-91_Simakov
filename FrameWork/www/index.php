<?php
    try{
        function MyAutoLoader(string $className)
        {
            require_once dirname(__DIR__).'\\'.$className.'.php';
        }
            spl_autoload_register('MyAutoLoader');

            $route = $_GET['route'] ?? '';
            $routes = require 'routes.php';

            foreach($routes as $pattern=>$value)
                {
                    $Controller = new $value[0];
                    $method = $value[1];
                    preg_match($pattern, $route, $matches);

                    if($matches)
                    {
                        unset($matches[0]);
                        $Controller->$method(...$matches);
                        return;
                    }
                    // print_r($method);
                }



            throw new \src\Exceptions\NotFoundExeption;
            // echo "Такая страница не найдена";

            // $Controller = new \src\Controller\MainController();

    }
    catch (\src\Exceptions\dbexception $e)
    {
        // (dirname(dirname(__DIR__)).'/Templates')
        $viev = new \src\Viev\Viev('../Templates/Errors');
        $viev->renderHtml('500.php', ['error'=>$e->getMessage()], 500);
    }
    catch (\src\Exceptions\NotFoundExeption $e)
    {
        $viev = new \src\Viev\Viev('../Templates/Errors');
        $viev->renderHtml('404.php', ['error' => $e->getMessage()], 404);
    }
?>