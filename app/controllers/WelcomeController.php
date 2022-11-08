<?php 

namespace App\Controller;


class WelcomeController extends Controller
{
    public function index()
    {
        echo "Hello World";
    }

    public function singlePost($id)
    {
        Controller::view('app');
    }
}