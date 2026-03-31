<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <form method="POST">
    
        Nome: <input type="text" name="nome"><br>
        <br>
        Idade: <input type="number" name="idade"><br>

        <br>

        <input type="submit" value="Enviar">

        <button type="button"
            onclick="window.location.href=window.location.pathname;">    
            Limpar
        </button>
        
    </form>

    <?php 
        if(isset($_POST['nome'])) 
        {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            echo "<h2>Dados Recebidos:</h2>";
            echo "Nome: " . $nome . "<br>";
            echo "Idade: " . $idade . " anos <br><br>";
        }
    ?>

</body>
</html>
