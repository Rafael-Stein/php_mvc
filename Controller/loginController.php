<?php
Class loginController extends Controller
{

    public function index()
    {
        $this->LoadTemplate('login/index');
    }

    public function validacao($usuario, $senha)
    {
        /*
            Como é apenas um exemplo de MVC, vou apenas simular a recuperação do usuário no banco de dados
        */

        //Limpar a variável herdada para sempre enviar somente dados pertinentes ao que o utilizador do site estiver manipulando
        $dados = array();

        //Obtém os dados de um usário simulado
        $usuario['usuarioID'] = '19';
        $usuario['usuarioLogin'] = 'rafael';
        $usuario['usuarioSenha'] = '250984';

        /*
            Caso o banco de dados retorne um registro com os dados informados pelo usuário, é pq ele existe e pode logar.
            Aqui irei comparar os dados informados pelo usuário com os dados simulados para representar um login válido ou não
        */

        if($usuario['usuarioLogin'] == $usuario && $usuario['usuarioSenha'] == $senha)
        {
            $dados = $usuario;
            $this->LoadTemplate('login/index', $dados);
        }
        else
        {
            $dados['mensagemErro'] = 'Login/Senha inválidos';
            $this->LoadTemplate('login/index', $dados);
        }

        
    }

}