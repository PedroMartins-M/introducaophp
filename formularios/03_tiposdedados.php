<?php
 if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $idade = $_POST['idade'];

            echo "<h2>Dados Recebidos:</h2>";
            echo "Nome: " . $nome . "<br>";
            echo "Sobrenome: " . $sobrenome . "<br>";
            echo "Idade: " . $idade . " anos <br>";
            echo "Endereço: " . $_POST['endereco'] . "<br><br>";
            echo "Telefone: " . $_POST['telefone'] . "<br>";
            echo "Email: " . $_POST['email'] . "<br>";
            echo "Senha: " . $_POST['senha'] . "<br><br>";
            echo "Gênero: " . $_POST['genero'] . "<br><br>";
            echo "Hobbies: " . implode(", ", $_POST['hobbies']) . "<br><br>";
            echo "Pesquisa: " . $_POST['pesquisa'] . "<br><br>";
            echo '<a href="03_tiposdedados.html">Voltar</a>';
        }
?>