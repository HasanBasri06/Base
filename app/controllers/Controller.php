<?php

namespace App\Controller;

class Controller
{
    public static function view($view, $data = [null])
    {
        extract($data);

        include DIR . "app/views/" . $view . ".view.php";
    }
}
