<?php
include_once "../consultas/flying_bubbles.php";
session_start();
// Certifique-se de que a variável de sessão está definida antes de chamar a função
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    $apagar = Apagar_conta($user_id);
    header("Location:../paginas/visualizacaoUser.php");
    exit();
    // Verifique se a exclusão foi bem-sucedida antes do redirecionamento
    if ($apagar) {
        echo "Usuário excluído com sucesso!";
        // Redirecione para a página de logout ou outra página desejada
        header("Location:../php/logout.php");
        exit();
    } else {
        echo "<br><br>";
        echo "<p align='center'>Erro ao excluir o usuário.</p>";
        echo "<p align='center'><a href='../paginas/perfil.php'>Voltar para Perfil</a></p>";
    }
} else {
    echo "ID do usuário não está definido.";
    
}
?>