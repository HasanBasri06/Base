<?php

use App\Controller\WelcomeController;

return [
    "deneme" => [
        "controller" => WelcomeController::class,
        "method" => "index"        
    ],
    "users" => [
        "controller" => WelcomeController::class,
        "method" => "user"
    ]
];