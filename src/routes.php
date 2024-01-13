<?php
use core\Router;

$router = new Router();


//Pag Inicial / Login /logOut
$router->get('/', 'HomeController@index');
$router->post('/', 'HomeController@index');
$router->post('/login', 'HomeController@loginAction');
$router->post('/logout', 'HomeController@logOut');
//Pag após o login
$router->get('/home', 'HomeController@home');

//Registro de usuario
$router->get('/registrar','UsuariosController@register');
$router->post('/registrar','UsuariosController@registerAction');

//Editar/Atualizar informaçoes
$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');

//Excluir usuario
$router->get('/usuario/{id}/excluir', 'UsuariosController@del');




$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');

