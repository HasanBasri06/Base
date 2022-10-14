<?php 

namespace App\Controller;
use App\Controller\Controller;
use App\Model\Connect;

class WelcomeController extends Controller
{
    public function index()
    {

        $methodName = explode("\\", __METHOD__);
        Controller::view("app", ["classes" => $methodName[2]]);
    }

}