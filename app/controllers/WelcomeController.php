<?php 

namespace App\Controller;
use App\Controller\Controller;

class WelcomeController extends Controller
{
    public function index()
    {

        $methodName = explode("\\", __METHOD__);
        Controller::view("app", ["classes" => $methodName[2]]);
    }

    public function test()
    {
        return "Hello World";
    }

}