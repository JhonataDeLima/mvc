<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    //verifica se ja tem usuario logado se nao; envia para pagina de login
    public function index(){

        if(isset($_SESSION['id_usuario'])){
            $this->redirect('/home');
        }

        $this->render('login');

    }
    //faz a validação dos dados de login
    public function loginAction(){

        $email = filter_input(INPUT_POST, 'email');
        $senha = filter_input(INPUT_POST, 'senha');

        //recebe os dados para validação atraves do email
        $usuarios = Usuario::select()->where('email', $email)->one();

        


        //verifica se a senha digitada confere com a senha do usuario
       if($usuarios['email']===$email && $usuarios['senha']===$senha ){
            //guarda o usuario logado na sessao
            $_SESSION['id_usuario'] = $usuarios ['id'];
            $_SESSION['nome'] = $usuarios ['nome'];

            $this->redirect('/home');

        }else{

            $this->redirect('/index');
 
        }


    }


    public function logOut(){
        $_SESSION['id_usuario'] = null;
        $this->redirect('/index');
    }
    //-------------------------------------------------------------------------



    public function home() {
        $usuarios = Usuario::select()->execute();

        if(isset($_SESSION['id_usuario'])){
        $this->render('home', [
            'usuarios' => $usuarios
        ]);
        }else{

            $this->redirect('/index');
        }
    }



    public function sobre() {
        
        $this->render('sobre');
        
    } 

    

    public function sobreP($args) {
        print_r($args);
    }

}