<?php
  session_start();
  include_once "../consultas/flying_bubbles.php";

  if (!isset( $_SESSION["user_id"])) { //Verifica se == Usuário
    header("Location: ../index.php"); // Redirecionar para a página index
  }

  // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coletar dados do formulário
        $email= $_POST["email"];
        $senha = $_POST["senha"];

        $conn= connect();
        $user_id= $_SESSION["user_id"]; //Variavel de sessão
        $sql= "SELECT email, senha FROM Usuario WHERE id= '$user_id'";
        $result=$conn->query($sql);
        if($result->num_rows > 0 ){
            $row= $result->fetch_assoc();
            echo $senha . $row['senha'];
            if (password_verify($senha, $row['senha'])){
                $stmt=$conn->prepare("UPDATE Usuario SET email= ? WHERE id= ?");
                $stmt->bind_param("si",$email, $user_id );
                if ($stmt->execute()) {
                    // Supondo que $novoEmail contenha o novo e-mail
                    $_SESSION['email'] = $$email;
                    

                    // Redirecionamento com os parâmetros no cabeçalho
                    header("Location: ../php/logout.php");
                } else {
                    echo "Erro ao alterar o e-mail: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "<br><br>";
                echo "<p align='center'>Senha incorreta.</p>";
                echo "<p align='center'>A alteração de e-mail não foi realizada.</p>";
                echo "<p align='center'><a href='../paginas/perfil.php'>Voltar para Perfil</a></p>";
            }      
        } else {
            echo "Usuário não encontrado.";
            $conn->close();
        }
        
        
    }
?>
