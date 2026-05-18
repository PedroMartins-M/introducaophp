<?php 
    require_once "07pessoa.php";
    require_once "07pessoafisica.php";

    $pessoaFisica = new PessoaFisica("12345678900 <br>", 20, 150.0);
    $pessoaFisica->imprimir();
?>