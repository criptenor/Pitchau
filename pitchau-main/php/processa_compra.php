<?php
session_start();
include_once "../onsultas/flying_bubbles.php";
include_once "../paginas/carrinho.php";

if (!isset($_SESSION["user_id"])) { 
    header("Location: index.php"); 
    exit(); 
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = connect();

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$usuario_id = $_SESSION['user_id'];

$sql = "SELECT * FROM historico WHERE usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $usuario_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $valorTotal = 0;

    while ($row = $result->fetch_assoc()) {
        $id_produto = $row['id'];
        $quantidade = $row['quantidade_estoque'];

        $sqlProduto = "SELECT valor, quantidade_estoque FROM produto WHERE id = ?";
        $stmtProduto = $conn->prepare($sqlProduto);
        $stmtProduto->bind_param('i', $id_produto);
        $stmtProduto->execute();
        $resultProduto = $stmtProduto->get_result();

        if ($resultProduto->num_rows > 0) {
            $rowProduto = $resultProduto->fetch_assoc();
            $valorTotal += $rowProduto['valor'] * $quantidade;

            $estoque_atualizado = $rowProduto['quantidade_estoque'] - $quantidade;
            if ($estoque_atualizado < 0) {
                $estoque_atualizado = 0;
            }

            $sqlAtualizarEstoque = "UPDATE produto SET quantidade_estoque = ? - 1 WHERE id = ?";
            $stmtAtualizarEstoque = $conn->prepare($sqlAtualizarEstoque);
            $stmtAtualizarEstoque->bind_param('di', $estoque_atualizado, $id_produto);
            $stmtAtualizarEstoque->execute();

            if ($stmtAtualizarEstoque->affected_rows > 0) {
                echo "Estoque atualizado com sucesso para o produto com ID: $id_produto<br>";
            } else {
                echo "Erro ao atualizar o estoque para o produto com ID: $id_produto<br>";
            }

            $stmtAtualizarEstoque->close();
        } else {
            echo "Produto não encontrado para o ID: $id_produto<br>";
        }

        $stmtProduto->close();
    }

    $stmtInsertCompra = $conn->prepare("INSERT INTO Compra (usuario_id, dataehora, valor) VALUES (?, NOW(), ?)");
    $stmtInsertCompra->bind_param('id', $usuario_id, $valorTotal);

    if ($stmtInsertCompra->execute()) {
        $stmtLimparCarrinho = $conn->prepare("DELETE FROM carrinho WHERE usuario_id = ?");
        $stmtLimparCarrinho->bind_param('i', $usuario_id);
        $stmtLimparCarrinho->execute();

        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../index.php");
        exit();
    }

    $stmtInsertCompra->close();
} else {
    header("Location: ../index.php");
    exit();
}

$stmt->close();
$conn->close();
?>
