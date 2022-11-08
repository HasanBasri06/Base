<?php

use App\Controller\WelcomeController;

return [
    "/" => [
        "controller" => WelcomeController::class,
        "method" => "index"
    ],
    "/post/{id}" => [
        "controller" => WelcomeController::class,
        "method" => "singlePost"
    ],
    "/deneme" => [
        "controller" => WelcomeController::class,
        "method" => "index"
    ],

];