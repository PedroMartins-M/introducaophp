<?php
if(isset($_POST['nome'])) {

    // Proteção básica contra XSS
    function limpar($dado) {
        return htmlspecialchars($dado);
    }

    $nome = limpar($_POST['nome']);
    $sobrenome = limpar($_POST['sobrenome']);
    $idade = limpar($_POST['idade']);
    $endereco = limpar($_POST['endereco']);
    $telefone = limpar($_POST['telefone']);
    $email = limpar($_POST['email']);
    $senha = limpar($_POST['senha']);
    $genero = isset($_POST['genero']) ? limpar($_POST['genero']) : "Não informado";
    $pesquisa = limpar($_POST['pesquisa']);
    $site = limpar($_POST['site']);
    $cor = limpar($_POST['cor_favorita']);

    // Hobbies (array)
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "Nenhum";

    echo "<h2>Dados Recebidos:</h2>";

    echo "Nome: $nome <br>";
    echo "Sobrenome: $sobrenome <br>";
    echo "Idade: $idade anos <br>";
    echo "Tipo de Dado (idade): " . gettype($idade) . "<br><br>";

    echo "Endereço: $endereco <br>";
    echo "Telefone: $telefone <br><br>";

    echo "Email: $email <br>";
    echo "Senha: $senha <br><br>";

    echo "Gênero: $genero <br>";
    echo "Hobbies: $hobbies <br><br>";

    echo "Pesquisa: $pesquisa <br>";
    echo "Site: $site <br>";
    echo "Cor favorita: $cor <br><br>";

    echo '<a href="03_tiposdedadosalter.html">Voltar</a>';
}
?>