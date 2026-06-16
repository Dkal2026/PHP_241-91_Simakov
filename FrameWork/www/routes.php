<?php

    return[
        "~^hello/(.*)$~" => [\src\Controller\MainController::class, 'sayHello'],
        "~^bye/(.*)$~" => [\src\Controller\MainController::class, 'sayBye'],
        "~^$~" => [\src\Controller\MainController::class, 'Main'],

        //? Article
        "~article/(\d+)$~" => [\src\Controller\ArticleController::class, 'show'],
        "~^article/create$~" => [\src\Controller\ArticleController::class, 'create'],
        "~^article/edit/(\d+)$~" => [\src\Controller\ArticleController::class, 'edit'],
        "~^article/update/(\d+)$~" => [\src\Controller\ArticleController::class, 'update'],
        "~^article/delete/(\d+)$~" => [\src\Controller\ArticleController::class, 'delete'],
        "~^article/store$~" => [\src\Controller\ArticleController::class, 'store'],

        //? Users
        "~^users/register$~" => [\src\Controller\UsersController::class, 'signUp'],
        '~^users/login$~' => [\src\Controller\UsersController::class, 'login'],
        '~^users/logout$~' => [\src\Controller\UsersController::class, 'logout'],

        //? Comments
        '~^comment/store$~' => [\src\Controller\CommentController::class, 'store'],
        '~^comment/update/(\d+)$~' => [\src\Controller\CommentController::class, 'update'],
        '~^comment/edit/(\d+)$~' => [\src\Controller\CommentController::class, 'edit'],
        '~^comment/delete/(\d+)$~' => [\src\Controller\CommentController::class, 'delete'],
    ];

?>