<?php

$salario = 3500.00; 
$inss = 0;


if ($salario <= 1412.00) {
    $inss = $salario * 0.075;
} elseif ($salario <= 2666.68) {
    $inss = ($salario * 0.09) - 21.18; 
} elseif ($salario <= 4000.03) {
    $inss = ($salario * 0.12) - 101.18;
} elseif ($salario <= 7786.02) {
    $inss = ($salario * 0.14) - 181.18;
} else {
    $inss = 908.85; 
}

echo " Folha de Pagamento <br>";
echo "Salário Bruto: R$ " . number_format($salario, 2, ',', '.') . "<br>";
echo "Desconto INSS: R$ " . number_format($inss, 2, ',', '.') . "<br>";
echo "Salário Líquido: R$ " . number_format($salario - $inss, 2, ',', '.');
?>