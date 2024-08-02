<?php
include_once "../consultas/flying_bubbles.php";
//session_start();

$produto_presente = isset($_SESSION["id_produto"]);

// Verifique se o formulário foi enviado
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber id_produto presente
    $id_produto = $_POST["id_produto"];
}*/
$id_produto = $_GET["id_produto"];

    // inserir produto presente no BD - EDITAR
    $conn=connect();
    $stmt = $conn->prepare("INSERT INTO ProdutoCompra(produto_id, compra_id, quantidade) VALUES (?, ?, ?)");
    $quantidade = 1;
    $stmt->bind_param("sss", $id_produto, $compra_id, $quantidade);

    if ($stmt->execute()) {
        header("Location: ../paginas/carrinho.php?id_produto=$id_produto");
        exit;}
    else {
        echo "Erro ao registrar: " . $stmt->error;
    }

    // Fechar a conexão com o banco de dados
    $stmt->close();
    $conn->close();
//}
?>
