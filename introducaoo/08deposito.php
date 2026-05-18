<?php

require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");
require_once("08itemExtrato.php");

session_start();

// Verifica se existem contas
if (!isset($_SESSION["contas"])) {

    echo "Nenhuma conta cadastrada!";
    exit;
}

// Recupera dados
$indiceConta = $_POST["indiceConta"];
$valor = (float) $_POST["valor"];

//COOKIES
setcookie("ultima_conta", $indiceConta, time() + 86400, "/");

// Recupera conta selecionada
$conta = $_SESSION["contas"][$indiceConta];

// Realiza depósito
$conta->deposito($valor);

// Atualiza sessão
$_SESSION["contas"][$indiceConta] = $conta;

echo "<h2>Depósito realizado com sucesso!</h2>";

?>

<br><br>

<a href="08menu.html">
    <button>Voltar ao Menu</button>
</a>

