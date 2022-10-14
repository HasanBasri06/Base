<?php 

namespace App\Controller;
use App\Controller\Controller;
use App\Model\Connect;
use App\Model\User;

class WelcomeController extends Controller
{
    public function index()
    {

        $methodName = explode("\\", __METHOD__);
        Controller::view("app", ["classes" => $methodName[2]]);
    }

}