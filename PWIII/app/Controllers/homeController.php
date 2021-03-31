<?php
namespace App\Controllers;

use Core\Controller;

// Controller 02 - Este chama a página Home e mostra as informações

class HomeController extends Controller {
    
    public function index() { // função do framework


        $this->view('home'); // chamando a page que vai exibir 
        
    
    }
}
