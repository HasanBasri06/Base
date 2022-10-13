<?php 

namespace App\Controller;
use App\Controller\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        Controller::view("app", ["name" => "John Doe"]);
    }

}