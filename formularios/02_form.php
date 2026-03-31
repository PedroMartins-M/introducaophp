   <?php 
        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            echo "<h2>Dados Recebidos:</h2>";
            echo "Nome: " . $nome . "<br>";
            echo "Idade: " . $idade . " anos <br><br>";

            echo '<a href="02_form.html">Voltar</a>';
        }
    ?>



