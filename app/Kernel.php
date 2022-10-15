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
                echo (new $className)->$methodName();                
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
            elseif($integrated["require"][$i] == "angularJs"){
                array_push(self::$integrated, '<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>');
            }
            else{
                throw new Exception("istenilen yapı sistemimizde bulunmuyor " . $integrated["require"][$i]);
            }
        }

        foreach (self::$integrated as $value) {
            echo $value;
        }
    }

    public function cliRun($item)
    {
        // array(2) {
        //     [0]=>
        //     string(5) "basri"
        //     [1]=>
        //     string(10) "route:list"
        //   }
        if($item[0] != "basri"){
            var_dump($item[0] . " geçerli komut değildir");
        }

        $expPath = explode(":", $item[1]);
        
        if($expPath[0] == "route" and $expPath[1] == "list"){
            $path = require "./app/web.php";
            foreach ($path as $key => $value) {
                print(
                    "'\033[32m".$key . "' \n   - \033[31m".$value['controller']."\033[0m\n   - \033[33m".$value['method']."\033[0m\n\n"
                );

            }
            print("\n");
        }
    }
}
