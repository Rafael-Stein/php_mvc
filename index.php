<?php

/*
    Chamar o arquivo autoload.php
    Ele irá fazer o REQUIRE de qualquer classe que precisar ser instanciada durante a navegação do site
*/
require 'assets/autoload.php';

/*
    Definir valores iniciais as variáveis
    Serão utilizadas para a primeira entrada no site, quando o site é acessado sem informações na URL
*/
$controller = 'homeController';
$method = 'index';
$parameters = array();

//Verificar se possui alguma informação na URL
if(isset($_GET['rss']))
{
    //Obtém as informações passadas na URL para direcionar corretamente quem está navegando pelo site
    $url = $_GET['rss'];

    //Verificar se a URL não está vazia
    if(!empty($url))
    {
        //Dividir a URL em um Array utilizando o separador '/'
        $url = explode('/', $url);
        //Obter a Classe e concatena com o nome "Controller"
        $controller = $url[0] . 'Controller';
        //Remover o primeiro elemento de um Array
        array_shift($url); 
        
        //Verificar se o método da classe existe e não está vazio
        if(isset($url[0]) && !empty($url[0]))
        {
            //Obter o método da classe que será executado
            $method = $url[0];
            //Remover o primeiro elemento de um Array
            array_shift($url);
        }

        //Verificar se existe um ou mais parâmetros
        if(count($url) > 0)
        {
            //Obter todos os parâmetros
            $parameters = $url;
        }

    }
    else
    {
        //Caso a URL esteja vazia, direcionar quem está navegando pelo site para uma página específica
        $controller = "homeController";
        $method = "index";
    }

}

/*
    Criar uma variável com o fullpath da classe que será executada
    Isso irá facilitar a visualização do que está sendo testado no IF mais abaixo
*/
$caminho = 'PHP_MVC/Controller/' . $controller . '.php';

//Verificar se a URL não existe e direcionar para uma página que informa que ela não existe
if(!file_exists($caminho) && !method_exists($controller, $method))
{
    //Direcionar para a pagina de erro (Page not Found - Erro 404)
    $controller = "homeController";
    $method = "pageNotFound";
}

/*
    Instanciar o Controller
    Cada vez que alguém navega pelo site, uma classe específica é executada para direcionar ao conteúdo.
    A todo momento que o navegador do site clica em algum link esta classe é inicializada dinamicamente, procurando pelo arquivo autoload.php (Local: assets/autoload.php)
*/
$c = new $controller;
//Chamada do Método da classe que foi instanciada
call_user_func_array(array($c, $method), $parameters);
