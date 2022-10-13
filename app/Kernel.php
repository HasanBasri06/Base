<?php

namespace App;

use Exception;

class Kernel
{

    private $expUrlBase = [];
    private $expUrlCount = [];
    private static $integrated = [];

    public function run($item)
    {

        $path = require DIR . "app/web.php";
        $expReqUrl = array_keys($path);


        for ($c = 0; $c < count($expReqUrl); $c++) {
            if ($expReqUrl[$c] == $item) {
                $className  = $path[$item]["controller"];
                $methodName = $path[$item]["method"];
                (new $className)->$methodName();
            }
        }
    }

    public static function integrated()
    {
        $integrated = require "config/Integrated.php";


        for ($i = 0; $i < count($integrated["require"]); $i++) {
            if ($integrated["require"][$i] == "tailwindcss") {
                array_push(self::$integrated, '<script src="https://cdn.tailwindcss.com"></script>');
            } elseif ($integrated["require"][$i] == "jquery") {
                array_push(self::$integrated, '<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>');
            } elseif ($integrated["require"][$i] == "query_js") {
                array_push(self::$integrated, '<script src="app/views/js/app.js"></script>');
            } elseif ($integrated["require"][$i] == "style") {
                array_push(self::$integrated, '<link rel="stylesheet" href="app/views/css/style.css" />');
            }
            else{
                throw new Exception("istenilen yapı sistemimizde bulunmuyor " . $integrated["require"][$i]);
            }
        }

        foreach (self::$integrated as $value) {
            echo $value;
        }
    }
}
