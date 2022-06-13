<?php

class Produto
{

    //Atributos da classe Produto
    private $id;
    private $nome;
    private $quantidade;
    private $valorUnitario;

    //Método da classe Produto
    public function getTodos()
    {
        /*
            Obtém todos os produtos de uma base de dados
            Para simplificar e não precisarmos entrar em detalhes de acesso a banco de dados,
            estaremos inserindo os dados manualmente
        */
        //Criar um array para guardar as informações de cada produto
        $produtos[] = 10;

        for($i = 0; $i < 10; $i++)
        {
            $this->id = 10 - $i;
            //Também é possível escrever a concatenação da seguinte forma "Produto_$i"
            $this->nome = 'Produto_' . $i;
            //Estamos utilizando um numero aleatório pra criar o exemplo de produto
            $this->quantidade = rand(1, 10);
            $this->valorUnitario = ($i + 1) * rand(11, 55);
            //Adicionar todos os dados de cada produto como um array
            $produtos[$i] = array($this->id, $this->nome, $this->quantidade, $this->valorUnitario);
        }

        //Retornar todos os produtos encontrados
        return $produtos;
    }

}

?>