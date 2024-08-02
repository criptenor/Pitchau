<?php
    include_once "../consultas/flying_bubbles.php";
    session_start();

    if (!isset( $_SESSION["user_id"])) { //Verifica se == Usuário
    header("Location: index.php"); // Redirecionar para a página index
    }
    if (isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: index.php"); // Redirecionar para a página do painel após o login
    }


    $conn= connect(); 
    $id_cliente= $_SESSION['user_id'];
    $produtos_no_carrinho = array(); // Inicializa um array para armazenar os produtos no carrinho

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
                    echo '<div class="card" style="height:350px; margin:auto;">';
                    echo '<div class="card-img">';
                    $imagem = 'img/img_produto/' .$row_produto['foto'];
                    echo '<img src="' . $imagem . '" class="d-block w-100" alt="...">';
                    echo '</div>';
                    echo '<div class="card-info">';
                    echo '<p class="text-title">' .$row_produto["nome"] . '</p>';
                    echo '<p class="text-body">' . $row_produto["descricao"] . '</p>';
                    echo '    <div class="custom-card__price">'. number_format($row_produto["valor"], 2) . '</div>';
                    echo '</div>';

                    echo '<div class="card-footer">';            
                    echo '<div class="custom-card">';
                    echo '    <div class="custom-card__price">'. number_format($row_produto['valor']*$quantidade) . '</div>';
                    echo '    <div class="custom-card__counter">';
                    echo '        <button class="custom-card__btn" onclick="removerDoCarrinho(' . $row_produto['id'] . '); maisproduto(); atualizarTotal(); atualizarNotificacaoCarrinho();">-</button>';
                    echo '        <div class="custom-card__counter-score">' .$quantidade. '</div>';
                    echo '        <button class="custom-card__btn custom-card__btn-plus" id="addcart_' . $row_produto['id'] . '_carrinho maisproduto" onclick="adicionarAoCarrinho(' . $row_produto['id'] . '); maisproduto(); atualizarTotal(); atualizarNotificacaoCarrinho();">+</button>';
                    echo '    </div>';
                    echo '</div>';
                        
                }
            } 
        }
    }   

    ?>