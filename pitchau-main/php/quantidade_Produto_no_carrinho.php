<?php
  session_start();
  include_once "../consultas/flying_bubbles.php";

  if (!isset( $_SESSION["user_id"])) { //Verifica se == Usuário
    header("Location: index.php"); // Redirecionar para a página index
  }
  if (isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: index.php"); // Redirecionar para a página do painel após o login
  }

$conn = connect();
$contar= contarItensNoCarrinho($_SESSION['user_id']);
?>
