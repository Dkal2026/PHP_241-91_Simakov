<?php

    return[
        "~^hello/(.*)$~" => [\src\Controller\MainController::class, 'sayHello'],
        "~^$~" => [\src\Controller\MainController::class, 'Main'],
        "~article/(\d+)$~" => [\src\Controller\ArticleController::class, 'show'],
    ];

?>