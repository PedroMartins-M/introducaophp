<?php

if(isset($_POST['salariobruto']))
{
    $salariobruto = $_POST['salariobruto'];
    $descontototal = 0.0;

    $tabela = [
        [0.00, 1621.00, 1621.00, 7.5],
        [1621.01, 2902.84, 1281.84, 9.0],
        [2902.85, 4354.27, 1451.43, 12.0],
        [4354.28, 8475.55, 4121.28, 14.0]
    ];

    $sobra = $salariobruto;

    for($faixa = 0; $faixa < count($tabela); $faixa++)
    {
        if($sobra > 0)
        {
            if($salariobruto > $tabela[$faixa][1])
            {
                $descontototal += $tabela[$faixa][2] * $tabela[$faixa][3] / 100;
                $sobra -= $tabela[$faixa][2];
            }
            else
            {
                $descontototal += $sobra * $tabela[$faixa][3] / 100;
                $sobra = 0;
            }
        }
    }

    $salarioliquido = $salariobruto - $descontototal;

    echo "Salário Bruto: " . number_format($salariobruto, 2, ',', '.') . "<br>";
    echo "Desconto INSS: " . number_format($descontototal, 2, ',', '.') . "<br>";
    echo "Salário Líquido: " . number_format($salarioliquido, 2, ',', '.') . "<br>";
}

?>