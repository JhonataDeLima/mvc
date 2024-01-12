<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index(){
        
        $this->render('login');

    }

    public function loginAction(){

        $email = filter_input(INPUT_POST, 'email');
        $senha = filter_input(INPUT_POST, 'senha');

        $usuarios = Usuario::select()->where('email', $email)->one();
       
       if($usuarios['email']===$email && $usuarios['senha']===$senha ){
           
            $this->redirect('/home');

        }else{
            
            $this->redirect('/index');
        }


    }




    public function home() {
        $usuarios = Usuario::select()->execute();

        $this->render('home', [
            'usuarios' => $usuarios
        ]);
    
    }



    public function sobre() {

        $this->render('sobre');
        
    } 

    

    public function sobreP($args) {
        print_r($args);
    }

}