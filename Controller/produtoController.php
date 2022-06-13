<?php
Class produtoController extends Controller
{

    public function index()
    {
        //Instanciar a classe Produto
        $p = new Produto;

        //Obter todos os produtos
        $this->dados = $p->getTodos();

        $this->LoadTemplate('/produto/index', $this->dados);
    }

}