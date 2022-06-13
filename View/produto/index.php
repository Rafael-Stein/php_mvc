<h1>Produtos</h1>
<table class="tabelaProdutos">
    <tr>
        <th>ID</th> 
        <th>Nome</th> 
        <th>Quantidade</th> 
        <th>Valor Unitário</th> 
    </tr>

    <?php

        //Verificar se possui alguma informação em $dadosModel
        if(isset($dadosModel))
        {

            //Para cada produto contido em $dadosModel será repetido o código abaixo
            foreach($dadosModel as $produto)
            {
                echo '<tr>';
                echo '<td class="textoCentro">' . $produto[0] . '</td>';
                echo '<td class="textoEsquerda">' . $produto[1] . '</td>';
                echo '<td class="textoDireita">' . $produto[2] . '</td>';
                echo '<td class="textoDireita">' . number_format($produto[3], 2, ",", ".") . '</td>';
                echo '</tr>';
            }
        }

    ?>

</table>