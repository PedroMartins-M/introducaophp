<?PHP 

    if ($_POST['nome'] && $_POST['cpf'])  
    {

        $nome = $_POST['nome'];
        $cpfOriginal = $_POST['cpf'];

        $cpfLimpo = preg_replace('/[^0-9]/', '', $cpfOriginal);
        
        $valido = false; // Controle de validação

        
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
        echo "CPF: " . Mascara($cpfOriginal) . "<br>";

        if ($valido) 
        {
            echo "<br><br>CPF válido.";
        }  
        else 
        {
            echo "<br><br>CPF inválido.";
        }
    }

    function Mascara($cpf) 
    {
        return substr($cpf, 0, 3) . '.' . 
            substr($cpf, 3, 3) . '.' . 
            substr($cpf, 6, 3) . '-' . 
            substr($cpf, 9, 2);
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