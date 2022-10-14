<?php 

namespace App\Controller;
use App\Controller\Controller;
use App\Model\Connect;

class WelcomeController extends Controller
{
    public function index()
    {

        $db = (new Connect)->conn();

        $users = $db->table("users")->get();

        Controller::view("app", ["users" => $users]);
    }

}