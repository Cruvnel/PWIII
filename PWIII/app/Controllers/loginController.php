<?php
namespace App\Controllers;

// Controller 01

use Core\Controller;

class LoginController extends Controller { 
    
    public function index() {

        $this->view('login');  // chamando a page Login

    }
}
