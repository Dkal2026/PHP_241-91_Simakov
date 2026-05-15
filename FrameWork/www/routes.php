<?php

    return[
        "~^hello/(.*)$~" => [\src\Controller\MainController::class, 'sayHello'],
        "~^bye/(.*)$~" => [\src\Controller\MainController::class, 'sayBye'],
        "~^$~" => [\src\Controller\MainController::class, 'Main'],
        "~article/(\d+)$~" => [\src\Controller\ArticleController::class, 'show'],
        "~^article/create$~" => [\src\Controller\ArticleController::class, 'create'],
        "~^article/store$~" => [\src\Controller\ArticleController::class, 'store'],
    ];

?>