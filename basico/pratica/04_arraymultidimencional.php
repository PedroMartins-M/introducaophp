<?php 
    $uf = ["SP", "BA", "RJ"];
    $cidade = [
        "São Paulo",
        "Salvador",
        "Rio de Janeiro"
    ];

    foreach ($uf as $indice => $estado)
{
        echo $estado . " - " . $cidade[$indice] . "<br>";
    }
?>