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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferência</title>
</head>

<body>

    <h2>Realizar Transferência</h2>

    <?php

    if (!isset($_SESSION["contas"]) || count($_SESSION["contas"]) == 0) {

        echo "Nenhuma conta cadastrada!";
    } else {

    ?>

        <form action="08transferencia.php" method="post">

            <label>Conta de Origem:</label>
            <br><br>

            <select name="Conta1" required>

                <?php

                foreach ($_SESSION["contas"] as $indice => $conta) {

                    $selecionado = "";

                    if (
                        isset($_COOKIE['ultima_conta']) &&
                        $_COOKIE['ultima_conta'] == $indice
                    ) {
                        $selecionado = "selected";
                    }

                    echo '
                    <option value="' . $indice . '" ' . $selecionado . '>
                        ' . $conta->contaFormatada() . '
                    </option>';
                }

                ?>

            </select>

            <br><br>

            <label>Conta de Destino:</label>
            <br><br>

            <select name="Conta2" required>

                <?php

                foreach ($_SESSION["contas"] as $indice => $conta) {

                    echo '
                    <option value="' . $indice . '">
                        ' . $conta->contaFormatada() . '
                    </option>';
                }

                ?>

            </select>

            <br><br>

            <label>Valor da Transferência:</label>
            <br><br>

            <input type="number" step="0.01" name="valor" required>

            <br><br>

            <button type="submit">
                Transferir
            </button>

        </form>

    <?php
    }
    ?>

</body>

</html>