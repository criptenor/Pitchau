<?php
include_once "../consultas/flying_bubbles.php";
session_start();
if (!isset( $_SESSION["user_id"])) { //Verifica se == Usuário
    header("Location: ../index.php"); // Redirecionar para a página index
  }
  if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: ../index.php"); // Redirecionar para a página do painel após o login
  }

if (isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $deleteUser= apagar_usuarios($id);
    if($deleteUser == 1){
        header("Location: ../paginas/erro_excluirUsuario.php");
    }
} 
elseif (isset($_POST['action']) && $_POST['action'] == 'edit' && isset($_POST['id']) && isset($_POST['new_name'])) {
    $id = $_POST['id'];
    $newName = $_POST['new_name'];
    $edituser= editName_usuarios($id,$newName);
} 
elseif(isset($_POST['action']) && $_POST['action'] == 'adminuser' && isset($_POST['id'])){
        $id= $_POST['id'];
        $tornaradmin= transform_admin($id);

} 

elseif(isset($_POST['action']) && $_POST['action'] == 'user' && isset($_POST['id'])){
    $id= $_POST['id'];
    $tornaradmin= destransform_admin($id);
}
  
header("Location: ../paginas/visualizacaoUser.php"); // Redirecionar para a página do painel após o login

?>