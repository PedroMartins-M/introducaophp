<?php

require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");
require_once("08itemExtrato.php");

session_start();

$origem = $_POST["Conta1"];
$destino = $_POST["Conta2"];
$valor = $_POST["valor"];

$contaOrigem = $_SESSION["contas"][$origem];
$contaDestino = $_SESSION["contas"][$destino];

// Não permitir transferência para mesma conta
if ($origem == $destino)
{
    echo "Não é possível transferir para a mesma conta!";
    exit;
}

// Valor inválido
if ($valor <= 0)
{
    echo "Valor inválido!";
    exit;
}

// Saldo insuficiente
if ($contaOrigem->getSaldo() < $valor)
{
    echo "Saldo insuficiente!";
    exit;
}

// Transferência
$resultado = $contaOrigem->transferir($contaDestino, $valor);

// Atualiza sessão
$_SESSION["contas"][$origem] = $contaOrigem;
$_SESSION["contas"][$destino] = $contaDestino;

// Cookie
setcookie("ultima_conta", $origem, time() + (86400 * 30));

echo $resultado;

?>

<br><br>

    <a href="08menu.html">
        <button>Voltar ao Menu</button>
    </a>
