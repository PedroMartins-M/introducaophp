<?php
$servidor = 'localhost';
$usuario  = 'root';
$senha    = '';
$banco    = 'escola_pedro';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao->connect_error) {
    die('Erro na conexão');
}

$sql = "SELECT id, nome, idade, uf, cidade FROM alunos";
$resultado = $conexao->query($sql);
?>

<style>
    body { font-family: 'Segoe UI', Tahoma, Geneva, sans-serif; background-color: #f4f7f6; padding: 20px; }
    
    .container-tabela { 
        box-shadow: 0 10px 30px rgba(0,0,0,0.1); 
        border-radius: 10px; 
        overflow: hidden; 
        background: white; 
    }

    .tabela-alunos { 
        width: 100%; 
        border-collapse: collapse; 
        font-size: 16px;
    }

    .tabela-alunos thead tr { 
        background-color: #2c3e50; 
        color: #ffffff; 
        text-align: left; 
        font-weight: bold; 
    }

    .tabela-alunos th, .tabela-alunos td { padding: 15px 20px; border-bottom: 1px solid #eee; }

    /* Linhas alternadas (Zebra) */
    .tabela-alunos tbody tr:nth-of-type(even) { background-color: #f9f9f9; }

    /* Efeito ao passar o mouse */
    .tabela-alunos tbody tr:hover { 
        background-color: #ecf0f1; 
        transition: 0.3s;
    }

    .badge-uf {
        background: #3498db;
        color: white;
        padding: 4px 8px;
        border-radius: 5px;
        font-size: 12px;
        font-weight: bold;
    }
</style>

<div class="container-tabela">
    <table class="tabela-alunos">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Aluno</th>
                <th>Idade</th>
                <th>Estado</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td><strong>#{$linha['id']}</strong></td>
                            <td>{$linha['nome']}</td>
                            <td>{$linha['idade']} anos</td>
                            <td><span class='badge-uf'>{$linha['uf']}</span></td>
                            <td>{$linha['cidade']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align:center'>Nenhum aluno cadastrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php $conexao->close(); ?>