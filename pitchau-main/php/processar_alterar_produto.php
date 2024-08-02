<?php
  session_start();
  include_once "consultas/flying_bubbles.php";

  if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: index.php"); // Redirecionar para a página do painel após o login
  }

    //old CadProd

    include_once "../consultas/flying_bubbles.php";

    // Função para gerar um nome único para a imagem
    function generateUniqueFileName($originalName) {
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);
        $uniqueName = uniqid() . "." . $extension;
        return $uniqueName;
    }

    // Processar o formulário quando for enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '';
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $descricao = $_POST["desc"];
        $valor = $_POST["valor"];
        $categoria_id = $_POST["categoria"];
        $quantidade = $_POST["quantidade"];

        $id_user=$_SESSION["user_id"];// = $row["id"];
        echo $id_user;
        $sql = "SELECT * FROM Produto";

        // Verificar se uma imagem foi enviada
        $fotoNome = 0;
        if ($_FILES["foto"]["error"] == 0) {
            $fotoNome = generateUniqueFileName($_FILES["foto"]["name"]);
            echo $fotoNome;
            $fotoCaminho = "../img/img_produto/" . $fotoNome;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoCaminho);
            $sql = "UPDATE Produto SET nome = '$nome', descricao = '$descricao', valor = $valor, foto = '$fotoNome', categoria_id = $categoria_id, quantidade_estoque = $quantidade WHERE id = $id";
        }
        
        else {
            $sql = "UPDATE Produto SET nome = '$nome', descricao = '$descricao', valor = $valor, categoria_id = $categoria_id, quantidade_estoque = $quantidade WHERE id = $id";
            // Lidar com erro de upload de imagem, se necessário
        }

        // Inserir os dados no banco de dados

        // Criar conexão
        $conn= connect();
        //$sql = $conn->prepare("DELETE FROM usuario WHERE id = ?");
        if ($conn->query($sql) === TRUE) {
            echo "Produto atualizado com sucesso!";
            header("Location: ../index.php"); // Redirecionar para a página index
        } else {
            echo "Erro ao atualizar o produto: " . $conn->error;

        }
    }

    // Fechar a conexão
    $conn->close();
?>
