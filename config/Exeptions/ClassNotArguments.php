<?php 

namespace App\Exeptions;

use Exception;
use Throwable;

class ClassNotArguments extends Exception
{
    protected function message(){
        return $this->getMessage();
    }
}