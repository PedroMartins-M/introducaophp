<?php 

    if(isset($_POST['nome']))
    {

    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $total = $nota1 + $nota2 + $nota3;

    echo "Nome: $nome <br>";
    echo "Total: " . number_format($total, 2) . "<br>";

    $media = ($nota1 + $nota2 + $nota3) / 3;

        if($media >= 7)
        {
            echo "Média: ". number_format($media, 2). "<br>";
        }
        else if($media >= 5 && $media < 7)
        {
            echo "Média: ". number_format($media, 2). "<br>";
        }
        else
        {
            echo "Média: ". number_format($media, 2);
        }


    $situacao = "";

        if($total >= 21)
        {
            $situacao = "Aprovado";
        }
        else if($total >= 15 && $total < 21)
        {
            $situacao = "Recuperação";
        }
        else
        {
            $situacao = "Reprovado";
        }

        echo " Situação: $situacao";

    }

?>