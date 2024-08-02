<?php
  session_start();
  include_once "consultas/flying_bubbles.php";

  if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: index.php"); // Redirecionar para a página do painel após o login
  }

// Processar o formulário quando for enviado
if ($isset($_POST['submit']) ){
    $arquivo=$_FILES['file'];
    $arquivo = explode('.', $arquivo)['name'];
    if($arquivo[sizeof($arquivo)-1] != "jpg"){
        die("Voce não pode upar esse aquivo");
    }else{

        echo "podemos continuar!";
    }


    
}
?>
