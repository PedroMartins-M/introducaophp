<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'escola_pedro';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao->connect_error)
{
    die('Erro na conexão');
}

$sql = "SELECT id, nome, idade, uf, cidade from alunos";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1' style='width:100%; border-collapse: collapse; text-align: left;'>";
    echo "<thead>
            <tr style='background-color: #d3f1f3;'>
                <th>Código</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Estado</th>
                <th>Cidade</th>
            </tr>
          </thead>";
    echo "<tbody>";

    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $linha['id'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['idade'] . "</td>";
        echo "<td>" . $linha['uf'] . "</td>";
        echo "<td>" . $linha['cidade'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}
?>