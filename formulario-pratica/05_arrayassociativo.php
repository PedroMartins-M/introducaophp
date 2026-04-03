<?php 
    if(isset($_POST['uf']))
    {

        $endereco = 
        [
            "CEP" => $_POST['cep'],
            "RUA" => $_POST['rua'],
            "BAIRRO" => $_POST['bairro'],
            "CIDADE" => $_POST['cidade'],
            "UF" => $_POST['uf']
        ];

        echo "CEP: " . $endereco["CEP"] . "<br>";
        echo "Rua: " . $endereco["RUA"] . "<br>";
        echo "Bairro: " . $endereco["BAIRRO"] . "<br>";
        echo "Cidade: " . $endereco["CIDADE"] . "<br>";
        echo "UF: " . $endereco["UF"] . "<br>";
    }
?>