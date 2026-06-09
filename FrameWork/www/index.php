<?php
    
    function MyAutoLoader(string $className)
    {
        require_once dirname(__DIR__).'\\'.$className.'.php';
    }
    try{
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



        echo "Такая страница не найдена";

        // $Controller = new \src\Controller\MainController();
    
    } catch (\MyProject\Exceptions\DbException $e) {

    echo $e->getMessage();

}
?>