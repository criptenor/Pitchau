<?php
    session_start();

    if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: index.php"); // Redirecionar para a página do painel após o login
    }

    include_once "consultas/flying_bubbles.php";

    $conn = new mysqli($servername, $username, $password, $dbname);
         
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }
    // Tansformar usuario em admim
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["transformar_admin"])) {
        $id_usuario = $_POST["id_usuario"];
    
        $sql = "UPDATE Usuario SET nivel_acesso = 'administrador' WHERE id_usuario = $id_usuario";
    
        if ($conn->query($sql) === TRUE) {
            echo "Usuário transformado em administrador com sucesso.";
        } else {
            echo "Erro ao transformar usuário em administrador: " . $conn->error;
        }
    }
    // Consultar todos os usuários do banco de dados
$query = "SELECT id_usuario, nome, nivel_acesso FROM Usuario";
$result = $conn->query($query);