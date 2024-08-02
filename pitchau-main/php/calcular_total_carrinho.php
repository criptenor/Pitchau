<?php
// Inclua esta linha no início do seu script PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Restante do seu código aqui
?>


<?php

include_once "../consultas/flying_bubbles.php";
session_start();


function calcularTotalCarrinho() {
    $conn = connect();

    if (!isset($_SESSION['user_id'])) {
        echo "Erro: ID do usuário não está definido na sessão.";
        return;
    }

    $id_usuario = $_SESSION['user_id'];

    // Consulta para obter os IDs dos produtos no carrinho
    $sqlCarrinho = "SELECT produto_id FROM produtocarrinho WHERE usuario_id = ?";
    $stmtCarrinho = $conn->prepare($sqlCarrinho);

    if (!$stmtCarrinho) {
        echo "Erro na preparação da consulta do carrinho: " . $conn->error;
        return;
    }

    $stmtCarrinho->bind_param("i", $id_usuario);

    if ($stmtCarrinho->execute()) {
        $resultCarrinho = $stmtCarrinho->get_result();
        $total = 0;

        while ($rowCarrinho = $resultCarrinho->fetch_assoc()) {
            $id_produto = $rowCarrinho['produto_id'];

            // Consulta para obter o valor do produto
            $sqlProduto = "SELECT valor FROM produto WHERE id = ?";
            $stmtProduto = $conn->prepare($sqlProduto);

            if (!$stmtProduto) {
                echo "Erro na preparação da consulta do produto: " . $conn->error;
                return;
            }

            $stmtProduto->bind_param("i", $id_produto);

            if ($stmtProduto->execute()) {
                $resultProduto = $stmtProduto->get_result();

                if ($rowProduto = $resultProduto->fetch_assoc()) {
                    $valor_produto = $rowProduto['valor'];
                    $total += $valor_produto;
                }
            } else {
                // Tratamento de erro para consulta de produto
                echo "Erro na execução da consulta do produto: " . $stmtProduto->error;
            }

            $stmtProduto->close();
        }

        echo number_format($total, 2);
    } else {
        // Tratamento de erro para consulta de carrinho
        echo "Erro na execução da consulta do carrinho: " . $stmtCarrinho->error;
    }

    $stmtCarrinho->close();
    $conn->close();
}
calcularTotalCarrinho();

?>
