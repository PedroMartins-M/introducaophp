<?php

require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Realizar Saque</title>
</head>

<body>

    <h2>Realizar Saque</h2>

    <?php

    if (
        !isset($_SESSION["contas"]) ||
        count($_SESSION["contas"]) == 0
    ) {

        echo "Nenhuma conta cadastrada!";

    } else {

    ?>

        <form action="08saque.php" method="post">

            <label>Selecione a Conta:</label>

            <br><br>

            <select name="indiceConta" required>

                <?php

               foreach ($_SESSION["contas"] as $indice => $conta)
                {
                    // Verifica se este índice é o mesmo que está salvo no cookie
                    $selecionado = "";
                    if (isset($_COOKIE['ultima_conta']) && $_COOKIE['ultima_conta'] == $indice) {
                        $selecionado = "selected";
                    }
 
                    echo '
                    <option value="' . $indice . '" ' . $selecionado . '>
                        ' . $conta->contaFormatada() . '
                    </option>';
                }
 

                ?>

    <?php

        if (isset($_COOKIE["ultimaConta"])) {

            echo "
            <h3>Última movimentação realizada:</h3>

            <p>
                " . $_COOKIE["ultimaConta"] . "
            </p>";
        }
    ?>

            </select>

            <br><br>

            <label>Valor do Saque:</label>

            <br><br>

            <input
                type="number"
                name="valor"
                step="0.01"
                min="0.01"
                required>

            <br><br>

            <button type="submit">
                Sacar
            </button>

        </form>

    <?php
    }
    ?>

</body>

</html>