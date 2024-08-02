<?php
    include_once "../consultas/flying_bubbles.php";
    session_start();



    $conn= connect(); 
    $id_cliente= $_SESSION['user_id'];
    $dataAtual = date('d/m/Y H:i');
    
    
    $produtos_no_carrinho = array(); // Inicializa um array para armazenar os produtos no carrinho


    $sql_nome = "SELECT nome FROM usuario WHERE id = '$id_cliente'";
    $res_nome = $conn->query($sql_nome);

    if ($res_nome && $res_nome->num_rows > 0) {
        $row = $res_nome->fetch_assoc();
        $nome_usuario = $row['nome'];
    } 


    $sql = "SELECT * FROM produtocarrinho WHERE usuario_id = '$id_cliente'";
    $res = $conn->query($sql);

    if ($res) {
        while ($produto = $res->fetch_assoc()) {
            $id_produto = $produto['produto_id'];
            $quantidade= $produto['quantidade'];

            $sql_produto = "SELECT * FROM produto WHERE id = '$id_produto'";
            $res_produto = $conn->query($sql_produto);

            if ($res_produto) {
                while ($row_produto = $res_produto->fetch_assoc()) {
                    $produtos_no_carrinho[] = $row_produto; // Adiciona o produto ao array de produtos no carrinho
                    $nome_produto= $row_produto['nome'];
                    $valor= $row_produto['valor'];
                    $sql_inserir= "INSERT INTO historico (usuario_id, usuario_nome, produto_nome, data_compra, valor) VALUES ('$id_cliente', '$nome_usuario ', '$nome_produto', '$dataAtual', $valor) ";
                    mysqli_query($conn,$sql_inserir);
                    


                    $sql_delete = "DELETE FROM produtocarrinho WHERE usuario_id = '$id_cliente'"; 
                    mysqli_query($conn,$sql_delete);
                    
                    



                        
                }
            } 
        }
    } 

    header("Location: ../index.php");

    




    ?>