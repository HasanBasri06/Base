<?php 

function env($item){
    return $_ENV[strtoupper($item)];
}