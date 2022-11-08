<?php 

function dd($item){
    echo "<pre>";
        var_export($item);
    echo "</pre>";
}

function env($item){
    return $_ENV[strtoupper($item)];
}