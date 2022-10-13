<?php

use App\Kernel;

ini_set("display_errors", 1);

define('DIR', $_SERVER["DOCUMENT_ROOT"]."/base/");
define('PHP_BASE_LINK', $_SERVER["REQUEST_URI"]);

require DIR . "vendor/autoload.php";

$reqGet = isset($_GET["path"]) ? $_GET["path"] : PHP_BASE_LINK;

(new Kernel)->run($reqGet);


