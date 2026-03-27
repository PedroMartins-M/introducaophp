
    <?php
        $nome = "Pedro";
        $dataNascimento = "2008-02-21";
        $curso = "Sistemas de Informação";
        $idade = 2026 - substr($dataNascimento, 0, 4);

        echo "Nome: $nome <br>";
        echo "Idade: $idade <br>";
        echo "Curso: $curso <br>";
    ?>
