
 <?php
 
    require_once("08conta.php");
    require_once("08poupanca.php");
    require_once("08especial.php");
    require_once("08itemExtrato.php");

    // $contas = [];

    session_start();

    if( !isset($_SESSION["contas"]))
    {
        $_SESSION["contas"] = [];
    }

    // Verifica se veio via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $tipoConta = $_POST["tipoConta"];
        $agencia = $_POST["agencia"];
        $conta = $_POST["conta"];
        $saldoInicial = (float) $_POST["saldoInicial"];       

        // Instancia conforme o tipo
        if ($tipoConta == "poupanca") {

            $reajuste = (float) $_POST["reajuste"];

            //$contaObj = new Poupanca($agencia, $conta, $saldoInicial, $reajuste);

        $_SESSION["contas"][] = new Poupanca($agencia, $conta, $saldoInicial, $reajuste);
        } elseif ($tipoConta == "especial") {

            $limiteEspecial = (float) $_POST["limiteEspecial"];

            //$contaObj = new Especial($agencia, $conta, $saldoInicial, $limiteEspecial);
        $_SESSION["contas"][] = new Especial($agencia, $conta, $saldoInicial, $limiteEspecial);
        } else {
            echo "Tipo de conta inválido!";
            exit;
        }

        //$contas[] = $contaObj;

        //echo "<h3>Extrato da Conta</h3>";
        //foreach ($_SESSION["contas"] as $v_conta) {      
        //$v_conta->imprimeExtrato();    
        //}  

       echo"<br> <h2>Conta Cadastrada com sucesso!</h2> <br>
        <a href='08menu.html'>Voltar ao Menu</a>";

    }
?>

 