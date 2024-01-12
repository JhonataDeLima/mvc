<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {



    public function index() {
        $usuarios = Usuario::select()->execute();

        $this->render('home', [
            'usuarios' => $usuarios
        ]);
    
    }



    public function sobre() {

        
      /*  $email = 'galego-tp@hotmail.com';
        $senha = '162943';

        $usuarios = Usuario::select()->where('email', $email)->one();
        print_r($usuarios);
       if($usuarios['email']===$email && $usuarios['senha']===$senha ){
       echo 'voce entrou';
        }else{
            echo 'usuario ou senha incorreto';
        }

        $this->render('sobre'); */
        
        $this->render('sobre');
        
    } 

    

    public function sobreP($args) {
        print_r($args);
    }

}