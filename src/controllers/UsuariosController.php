<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {


//Criação de usuario -------------------------------------------------------------
    public function register(){
        $this->render('register');
    }

    
    public function registerAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $senha = filter_input(INPUT_POST, 'senha');

        if ($nome && $email && $senha){
            //verifica se o email já está em uso
            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data) === 0) {
                Usuario::insert([
                    'nome' => $nome,
                    'email' => $email,
                    'senha' => $senha
                ])->execute();
                $this->redirect('/');

            }
        }
        echo 'algo de arrado nao está certo!';
        $this->redirect('/registrar');
        
    }
//----------------------------------------------------------------------------------

//Editar/Atualizar Usuario ---------------------------------------------------------
    public function edit($args){


        //verifica se está logado
        if(!isset($_SESSION['id_usuario'])){
            $this->redirect('/index');
        }
        $usuarios = Usuario::select()->where('id', $args['id'])->one();
        
        $this->render('edit',[
            'usuarios' => $usuarios
        ]);
        
    }

    public function editAction($args){

        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $senha = filter_input(INPUT_POST, 'senha');

        //verifica se o email já está em uso
        
        $dup = Usuario::select()->where('id', $args['id'])->one();

        if($email != $dup['email']){   
            $data = Usuario::select()->where('email', $email)->execute();
            if(count($data) > 0)
                $this->redirect('/usuario/'.$args['id'].'/editar');
             
        }


        //atualizando dados
        if ($nome && $email && $senha){
            Usuario::update()
            ->set('nome', $nome)
            ->set('email', $email)
            ->set('senha', $senha)
            ->where('id', $args['id'])
            ->execute();


            $this->redirect('/');

        }
            $this->redirect('/usuario/'.$args['id'].'/editar');
    }

//Deletar Usuario -----------------------------------------------------------------------
    public function del($args){
        Usuario::delete()->where('id', $args)->execute();
        $this->redirect('/');

    }

}