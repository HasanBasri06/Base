<?php

use App\Controller\WelcomeController;

return [
    "/" => [
        "controller" => WelcomeController::class,
        "method" => "index"
    ],
    "/test" => [
        "controller" => WelcomeController::class,
        "method" => "test"        
    ],
];