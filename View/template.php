<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com MVC</title>
</head>
<body>
    <header>
        <a href="./"><img class="logo" href="image/logo.png"></a>
        <nav>
            <ul class="menuNavegacao">
                <li><a href="./">Início</a></li>
                <li><a href="./empresa">Empresa</a></li>
            </ul>
        </nav>
        <a class="contato" href="./contato"><button>Contato</button></a>
    </header>

    <section class="conteudoSite">
        <?php
            $this->LoadView($viewName, $dadosModel);
        ?>
    </section>

    <footer>
        <p>Algum texto de rodapé &copy <?php echo date("Y"); ?></p>
    </footer>

</body>
</html>