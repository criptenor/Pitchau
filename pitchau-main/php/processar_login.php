<?php
  session_start();
  if (isset( $_SESSION["user_id"])) { //Verifica se == Usuário
    header("Location: index.php"); // Redirecionar para a página index
  }

include_once "../consultas/flying_bubbles.php";
$conn = connect();

$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;


$sql = "SELECT  id, nome, email, senha, isAdmin FROM Usuario WHERE email = '$email'";
$result = $conn->query($sql);
session_start();
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["email"] = $email;
        $_SESSION["username"] = $row["nome"]; // Defina o nome de usuário aqui
        $_SESSION["is_admin"] = $row["isAdmin"];
        header("Location: ../index.php"); // Redirecionar para a página do painel após o login
        exit();
        
    } 
    else{
        header("Location: ../index.php");
    }
    
}elseif($result->num_rows ==0){

    header("Location: ../paginas/login.php");
} 


else {
    header("Location: ../paginas/erro_email_invalido.php");
}
