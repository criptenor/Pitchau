<?php
  session_start();

  if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: index.php"); // Redirecionar para a página do painel após o login
  }

include_once "../consultas/flying_bubbles.php";
$conn = connect();

// Processar o formulário quando for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];

    // Verificar se a categoria já existe
    $sqlVerificacao = "SELECT * FROM Categoria WHERE nome = ?";
    $stmt = $conn->prepare($sqlVerificacao);
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        echo "Uma categoria com esse nome já existe.";
    } else {
        // Inserir os dados no banco de dados
        $sqlInsercao = "INSERT INTO Categoria (nome) VALUES (?)";
        $stmtInsercao = $conn->prepare($sqlInsercao);
        $stmtInsercao->bind_param("s", $nome);

        if ($stmtInsercao->execute()) {
            header("Location: ../paginas/cadastro_produto.php");
            exit();
        } else {
            echo "Erro ao cadastrar a categoria: " . $conn->error;
        }
        $stmtInsercao->close();
    }
    $stmt->close();
}

// Fechar a conexão
$conn->close();
?>
