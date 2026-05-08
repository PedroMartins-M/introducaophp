<?php
// Exibir erros para sabermos se algo falhar
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$db   = 'cadastro_produto';
$usuario = 'root'; 
$senha = ''; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $usuario, $senha, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);

    if(!empty($_POST['nome']) && !empty($_POST['preco']))
    {
        // Pegamos apenas nome, preco e estoque. 
        // O 'codigo' o banco gera sozinho por ser AUTO_INCREMENT.
        $nome    = $_POST['nome'];
        $preco   = str_replace(',', '.', $_POST['preco']); // Converte vírgula em ponto
        $estoque = $_POST['estoque'];

        // Ajustado para a tabela 'produto' (singular)
        // Note que NÃO incluímos a coluna 'codigo' aqui
        $sql = "INSERT INTO produto (nome, preco, estoque) VALUES (:nome, :preco, :estoque)";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':estoque', $estoque);

        if ($stmt->execute()) {
            // Pegar o código que o banco acabou de gerar
            $idGerado = $pdo->lastInsertId();

            echo "<h3> Produto cadastrado com sucesso!</h3>";
            echo "ID do Produto: " . $idGerado . "<br>";
            echo "Nome: " . htmlspecialchars($nome) . "<br>";
            echo "Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
            echo "Estoque: " . $estoque . "<br>";
        }

        echo "<br><a href='08_cadastrarproduto.html'>Voltar</a>";
    }
    else
    {
        echo "Por favor, preencha o nome e o preço.";
        echo "<br><br><a href='08_cadastrarproduto.html'>Voltar</a>";
    }

} catch (PDOException $e) {
    echo "Erro técnico: " . $e->getMessage();
}
?>