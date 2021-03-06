<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <link rel="stylesheet" href="http://localhost/php_mvc/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com MVC</title>
</head>
<body>
    <header>
        <a href="http://localhost/php_mvc/">
            <img class="logo" src="http://localhost/php_mvc/image/logo.png">
        </a>
        <nav>
            <ul class="menuNavegacao">
                <li>
                    <a href="http://localhost/php_mvc/">Início</a>
                </li>
                <li>
                    <a href="http://localhost/php_mvc/produto">Produtos</a>
                </li>
            </ul>
        </nav>
        <a href="http://localhost/php_mvc/home/contato">
            <button>Contato</button>
        </a>
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