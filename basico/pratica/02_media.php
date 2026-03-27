<?php 

$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 6.0;
$media = ($nota1 + $nota2 + $nota3) / 3;

if($media >= 7)
{
    echo "Aprovado". number_format($media, 2);
}
else if($media >= 5 && $media < 7)
{
    echo "Recuperação". number_format($media, 2);
}
else
{
    echo "Reprovado". number_format($media, 2);
}

?>