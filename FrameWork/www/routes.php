<?php

    return[
        "~^hello/(.*)$~" => [\src\Controller\MainController::class, 'sayHello'],
        "~^bye/(.*)$~" => [\src\Controller\MainController::class, 'sayBye'],
        "~^$~" => [\src\Controller\MainController::class, 'Main'],
        "~article/(\d+)$~" => [\src\Controller\ArticleController::class, 'show'],
        "~^article/create$~" => [\src\Controller\ArticleController::class, 'create'],
        "~^article/edit/(\d+)$~" => [\src\Controller\ArticleController::class, 'edit'],
        "~^article/update/(\d+)$~" => [\src\Controller\ArticleController::class, 'update'],
        "~^article/delete/(\d+)$~" => [\src\Controller\ArticleController::class, 'delete'],
        "~^users/register$~" => [\src\Controller\UsersController::class, 'signUp'],
        "~^article/store$~" => [\src\Controller\ArticleController::class, 'store'],
        '~^users/login$~' => [\src\Controller\UsersController::class, 'login'],
        '~^users/logout$~' => [\src\Controller\UsersController::class, 'logout'],
    ];

?>