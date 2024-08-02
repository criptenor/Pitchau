<?php
session_start();
include_once "../consultas/flying_bubbles.php";
include_once "enviar_email.php";

$conn = connect();

if (isset($_REQUEST['email'])) {
    $email = $_REQUEST['email'];

    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $res = mysqli_query($conn, $sql);
    $linhas = mysqli_num_rows($res);

    if ($linhas > 0) {
        $resultado = mysqli_fetch_array($res);

        $code = rand(100000, 999999);

        $para = $resultado['email'];
        $assunto = "Recuperação de Senha";
        $mensagem = "Sua nova senha é: $code";

        // Chama a função envia_email
        envia_email($para, $assunto, $mensagem);

        $senha_cript = password_hash($code, PASSWORD_DEFAULT);
    
        $sql_senha = "UPDATE usuario SET senha = '$senha_cript' WHERE email = '$email'";  
        mysqli_query($conn, $sql_senha);

        $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Enviamos uma nova senha para o seu email</div>";
        header("Location: ../paginas/esqueceu_senha.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger'>Email não encontrado</div>";
        header("Location: ../paginas/esqueceu_senha.php");
        exit();
    }
}
?>
