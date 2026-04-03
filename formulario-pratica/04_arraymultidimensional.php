<?php

    if(isset($_POST['uf']))

        $ufs = $_POST['uf'];
        $nome = $_POST['nome'];

        $estados = [];

        for($i = 0; $i < count($ufs); $i++)
        {
            if($ufs[$i] != "" && $nome[$i] != "")
            {
                $estados[] = [$ufs[$i], $nome[$i]];       
            }
        }

        echo"<h2'><strong>Estados Cadastrados</strong></h2><br><br>";   

        foreach($estados as $estado)
        {
            echo  $estado[0] . " - " . $estado[1] . "<br>";
        }

?>
