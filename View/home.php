<h1>Página Inicial</h1>
<br>
<h2>Sequência de Fibonacci</h2>

<?php
$x = 1;
$y = 1;
$resultado[0] = $x;
$resultado[1] = $y;

for ($i = 2; $i < 15; $i++)
{
    $resultado[$i] = $x + $y;

    if($i % 2 == 0)
    {
        $y = $resultado[$i];
    }
    else
    {
        $x = $resultado[$i];
    }
}

for ($i = 0; $i < count($resultado); $i++)
{
    if($i == 0)
    {
        echo "<p>$resultado[$i]";
    }
    else
    {
        echo ", $resultado[$i]";

        if($i == count($resultado))
        {
            echo "</p>";
        }
    }
}

?>