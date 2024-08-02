<?php
include_once "../consultas/flying_bubbles.php";
session_start();
$conn= connect();

$id_produto= $_REQUEST['id_produto'];
$id_usuario= $_SESSION['user_id'];

$sql = "INSERT INTO produtocarrinho (usuario_id, produto_id)";
$sql .= "VALUES ('$id_usuario','$id_produto')";  
mysqli_query($conn,$sql);



header("Location: ../index.php");
  
?>