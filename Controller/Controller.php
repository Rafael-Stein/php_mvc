<?php
Class Controller
{
    //Variavel utilizada para passar as informações para a View
    public $dados;

    public function __construct()
    {
        $this->dados = array();
    }

    public function LoadTemplate($viewName, $dadosModel = array())
    {
        //Chamada da Template do Site para não precisar utilizar um REQUIRE cada vez que uma página é exibida
        $this->dados = $dadosModel;
        require("View/template.php");
    }

    public function LoadView($viewName, $dadosModel = array())
    {
        //Chamada da View pelo Template do Site
        extract($dadosModel);
        require("View/$viewName.php");
    }

}