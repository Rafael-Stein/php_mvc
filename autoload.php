<?php

spl_autoload_register(function($class)
{

    //Utilizado para procurar a classe por diretórios diferentes
    if(file_exists("Controller/$class.php"))
    {
        require("Controller/$class.php");
    }
    elseif(file_exists("Model/$class.php"))
    {
        require("Model/$class.php");
    }

});
