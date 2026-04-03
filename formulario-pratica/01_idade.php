
    <?php

        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $dataNascimento = $_POST['data_nascimento'];
            $curso = $_POST['curso'];
        

            $nascimento = new DateTime($dataNascimento);
            $hoje = new DateTime();
            $idade = $hoje->diff($nascimento);

            echo "Nome: $nome <br>";
            echo "Idade:" . $idade->y . " anos " . $idade->m. " meses e " . $idade->d . " dias <br>";
            echo "Curso: $curso <br>";
        }
    ?>