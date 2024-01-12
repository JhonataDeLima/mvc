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
        $cidade = filter_input(INPUT_POST, 'cidade');
        $dataNascimento = filter_input(INPUT_POST, 'dataNascimento');
        $senha = filter_input(INPUT_POST, 'senha');

        if ($nome && $email && $cidade && $dataNascimento && $senha){

            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data) === 0) {
                Usuario::insert([
                    'nome' => $nome,
                    'email' => $email,
                    'cidade' => $cidade,
                    'data_nascimento' => $dataNascimento,
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
        $usuarios = Usuario::select()->where('id', $args['id'])->one();
        
        $this->render('edit',[
            'usuarios' => $usuarios
        ]);
    }

    public function editAction($args){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $cidade = filter_input(INPUT_POST, 'cidade');
        $dataNascimento = filter_input(INPUT_POST, 'dataNascimento');
        $senha = filter_input(INPUT_POST, 'senha');

        //verificar se o email já está sendo usado -------------------
        $data = Usuario::select()->where('email', $email)->execute();
        if(count($data)>0){
            $this->redirect('/usuario/'.$args['id'].'/editar');
        }
        //atualizando dados ------------------------------------------
        if ($nome && $email && $cidade && $dataNascimento && $senha){
            Usuario::update()
            ->set('nome', $nome)
            ->set('email', $email)
            ->set('cidade', $cidade)
            ->set('data_nascimento', $dataNascimento)
            ->set('senha', $senha)
            ->where('id', $args['id'])
            ->execute();


            $this->redirect('/');

        }
            $this->redirect('/usuario/'.$args['id'].'/editar');
    }


//-----------------------------------------------------------------------------------

//Deletar / Excluir Usuario ---------------------------------------------------------
    public function del($args){
        Usuario::delete()->where('id', $args)->execute();
        $this->redirect('/');

    }

}

//------------------------------------------------------------------------------------