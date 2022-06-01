<h1>Empresa</h1>
<br>
<h2>Número Primos</h2>

<?php
$numerosPrimos = array();
$indice = 0;
for ($numero = 0; $numero <= 100; $numero++)
{ 
    $isPrimo = true;

    for ($i = 2; $i < $numero; $i++)
    { 
        if ($numero % $i == 0) 
        {
            $isPrimo = false;
            $i = $numero;
        }
    }

    if($isPrimo)
    {
        $numerosPrimos[$indice] = $numero;
        $indice += 1;
    }
}

for ($i = 0; $i < count($numerosPrimos); $i++)
{
    if($i == 0)
    {
        echo "<p>$numerosPrimos[$i]";
    }
    else
    {
        echo ", $numerosPrimos[$i]";

        if($i == count($numerosPrimos))
        {
            echo "</p>";
        }
    }
}


?>