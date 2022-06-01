<?php

//Irá fazer o REQUIRE de qualquer classe que for instanciada
require 'autoload.php';

$controller = 'homeController';
$method = 'index';
$parameters = array();

//Verificar se possui alguma informação na URL
if(isset($_GET['rss']))
{
    $url = $_GET['rss'];

    if(!empty($url))
    {
        //Dividir a URL em uma Array utilizando o separador '/':
        $url = explode('/', $url);
        //Obter a Classe. Exemplo: homeController, usuarioController, produtoController e etc.
        $controller = $url[0] . 'Controller';
        array_shift($url); //Remover o primeiro elemento de um Array

        //Obter o Método. Exemplos: index(), contato, login e etc.
        if(isset($url[0]) && !empty($url[0]))
        {
            $method = $url[0];
            array_shift($url); //Remover o primeiro elemento de um Array
        }

        //Obter os Parâmetros, se possuir
        if(count($url) > 0)
        {
            $parameters = $url;
        }

    }
    else
    {
        //Caso a URL esteja vazia, direcionar para a página inicial (Home do site)
        $controller = "homeController";
        $method = "index";
    }

}

$caminho = 'PHP_MVC/Controller/' . $controller . '.php';

//Verificar se a URL não existe
if(!file_exists($caminho) && !method_exists($controller, $method))
{
    //Direcionar para a pagina de erro (Page not Found - Erro 404)
    $controller = "pageNotFoundController";
    $method = "page_not_found";
}

//Instanciar o Controller
$c = new $controller;
//Chamada do Método do Controller.
call_user_func_array(array($c, $method), $parameters);
