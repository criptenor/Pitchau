<?php
include_once "../consultas/flying_bubbles.php";
session_start();
  if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: ../index.php"); // Redirecionar para a página do painel após o login
  }

if (isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $deleteCategoria= apagar_categorias($id);
    if($deleteCategoria == 1){
        header("Location: ../paginas/erro_excluirUsuario.php");
    }
} 
elseif (isset($_POST['action']) && $_POST['action'] == 'edit' && isset($_POST['id']) && isset($_POST['new_name'])) {
    $id = $_POST['id'];
    $newName = $_POST['new_name'];
    $editcategoria= editName_categorias($id,$newName);
}
header("Location: ../paginas/gerenciarCategoria.php"); // Redirecionar para a página do painel após o login

?>