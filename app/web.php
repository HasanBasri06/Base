<?php

use App\Controller\WelcomeController;

return [
    "/" => [
        "controller" => WelcomeController::class,
        "method" => "index"
    ],
    "/deneme" => [
        "controller" => WelcomeController::class,
        "method" => "index"        
    ],
];