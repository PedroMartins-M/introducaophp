<?PHP 

    if ($_POST['nome'] && $_POST['cpf'])  
    {

        $nome = $_POST['nome'];
        $cpfOriginal = $_POST['cpf'];

        $cpfLimpo = preg_replace('/[^0-9]/', '', $cpfOriginal);
        $valido = false; 

        
        if (strlen($cpfLimpo) == 11 && !preg_match('/(\d)\1{10}/', $cpfLimpo)) 
        {
            
            $dv1 = Calculadv($cpfLimpo, 9, 10);
            $dv2 = Calculadv($cpfLimpo, 10, 11);

            if ($dv1 == $cpfLimpo[9] && $dv2 == $cpfLimpo[10]) 
            {
                $valido = true;
            }
        }

        echo "Nome: " . $nome . "<br>";
        echo "CPF: " . Mascara($cpfLimpo) . "<br>";

        if ($valido) 
        {
            echo "<br><br>CPF válido.";
        }  
        else 
        {
            echo "<br><br>CPF inválido.";
        }

        echo "<br><br><a href='07_valida.html'>Voltar</a>";
    }

    function Mascara($cpf) 
    {
        return vsprintf("%s%s%s.%s%s%s.%s%s%s-%s%s", str_split($cpf));
    }



    function Calculadv($cpf, $digitos, $peso)
    { 

        $soma = 0;


        for ($i = 0; $i < $digitos; $i++) 
        {
            $soma += ((int)$cpf[$i] * ($peso - $i));
        }

        $resto = $soma % 11;

        $ultdigito = 0;

        if($resto >= 2)
            {
                $ultdigito = 11 - $resto;
            }
            
            return $ultdigito;
    }
?>