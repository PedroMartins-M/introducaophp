<?php

require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");
require_once("08itemExtrato.php");

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado do Saque</title>
</head>

<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $indiceConta = $_POST["indiceConta"];
    $valor = $_POST["valor"];

    // Recupera a conta
    $conta = $_SESSION["contas"][$indiceConta];

    // Faz o saque
    $resultado = $conta->saque($valor);

    // Atualiza a sessão
    $_SESSION["contas"][$indiceConta] = $conta;

    //COOKIES
    setcookie("ultima_conta", $indiceConta, time() + 86400, "/");

    if ($resultado) {

        echo "<h2>Saque realizado com sucesso!</h2>";

    } else {

        echo "<h2>Saldo insuficiente!</h2>";
    }

} else {

    echo "<h2>Acesso inválido!</h2>";
}

?>

<br><br>

<a href="08menu.html">

    <button>
        Voltar
    </button>

</a>

</body>

</html>