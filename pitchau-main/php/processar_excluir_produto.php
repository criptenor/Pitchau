<?php
include_once "../consultas/flying_bubbles.php";
session_start();
if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: index.php"); // Redirecionar para a página do painel após o login
  }
$id_produto = $_GET["id_produto"];
$apagar_produto= apagar_produto_por_id($id_produto);
header("Location: ../index.php");

?>