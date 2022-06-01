<h1>Login</h1>
<br>
<form class="formulario-login" method="post" action="http://localhost/php_mvc/login/validacao">
    <p>Usuário</p>
    <input type="text" name="login">
    <p>Senha</p>
    <input type="password" name="senha">
    <button>Logar</button>

    <?php
    if(isset($mensagemErro))
    {
        echo "<br><p class='mensagemErro'>$mensagemErro</span>";
    }
    ?>
</form>
