<?php
ob_start();


function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";


    // Criar conexão
    $conn = new mysqli($servername, $username, $password);
    $databaseName = "Pitchau";

    // Verificar a existência do banco de dados
    $query = "SHOW DATABASES LIKE '$databaseName'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $conn->close();
    } else {
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }
    
        // Ler o conteúdo do arquivo SQL
        $sqlFile = file_get_contents('consultas/pitchau.sql');
    
        // Executar script SQL para criar banco de dados e tabelas
        if ($conn->multi_query($sqlFile)) {
            echo "Script SQL executado com sucesso!";
        } else {
            echo "Erro na execução do script SQL: " . $conn->error;
        }
    
        // Fechar a conexão temporária
        $conn->close();
    

    }

    // Verificar a conexão
    
    // Conectar ao banco de dados Pitchau após a criação
$conn = new mysqli($servername, $username, $password, 'Pitchau');

// Verificar se a tabela usuario está vazia
$resultusuario = $conn->query("SELECT COUNT(*) as count FROM usuario");
$rowusuario = $resultusuario->fetch_assoc();

if($rowusuario['count'] == 0) {
    // Inserir super adm na tabela usuario
    $conn->query('INSERT INTO usuario(email, senha, nome, isAdmin) VALUES("adm@super", "$2y$10$KAseMta2Vx5CEwk9rDjACOVRHrYMBsDj4YfqThOm5KYgsBD9TVg5u", "Super Administrador", 1)');
/*
=================================

    Main Adm Info's

    Nome.: Super Administrador
    Email.: adm@super
    Senha.: adm
    
=================================
*/
}

// Verificar se a tabela Categoria está vazia
$resultCategoria = $conn->query("SELECT COUNT(*) as count FROM Categoria");
$rowCategoria = $resultCategoria->fetch_assoc();

if ($rowCategoria['count'] == 0) {
    // Inserir dados na tabela Categoria
    $conn->query("INSERT INTO Categoria(nome) VALUES('Sopro')");
    $conn->query("INSERT INTO Categoria(nome) VALUES('Cordas')");
    $conn->query("INSERT INTO Categoria(nome) VALUES('Percussão')");
    $conn->query("INSERT INTO Categoria(nome) VALUES('Teclas')");
}

// Verificar se a tabela Produto está vazia
$resultProduto = $conn->query("SELECT COUNT(*) as count FROM Produto");
$rowProduto = $resultProduto->fetch_assoc();

if ($rowProduto['count'] == 0) {
    // Inserir dados na tabela Produto
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Violão Giannini', 'Violão com cordas de aço. Para os amantes do Country.', 'violao1.png', 1500, 2, 20)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Violão Tagima', 'Violao com cordas de nylon. Perfeito para os amantes de Clássica. Acompanha duas partituras.', 'violao2.png', 1700, 2, 30)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Violão para estudo Giannini', 'Violão com cordas de aço para estudo. Acompanha material de estudo.', 'violao3.png', 1300, 2, 35)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Guitarra Fender', 'Guitarra supimpa para Blues. Acompanha palheta azul.', 'guitarra1.png', 2400, 2, 27)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Baixolão Tagima', 'Baixolao eletroacústico em marfim.', 'baixolao1.png', 2100, 2, 15)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Contrabaixo Yamaha 6 cordas', 'Contrabaixo 6 cordas em acácia.', 'contrabaixo1.png', 2400, 2, 22)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Contrabaixo para estudo Tagima', 'Contrabaixo 6 cordas para estudo. Acompanha material de estudo.', 'contrabaixo2.png', 2500, 2, 27)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Violino 4/4 Eagle', 'Violino 4/4 em maple e ébano. Acompanha arco, breu e estojo.', 'violino1.png', 1300, 2, 12)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Flauta Doce Yamaha', 'Flauta doce em marfim.', 'flauta1.png', 200, 1, 45)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Clarinete Bb Yamaha', 'Clarinete 17 chaves Bb.', 'clarinete1.png', 820, 1, 99)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES('Saxofone Alto Dolphin', 'Saxofone Alto Eb em Latão.', 'saxofone1.png', 3200, 1, 54)");    
    // Adicione mais inserções de produtos conforme necessário
}

// Verificar se a tabela Slider está vazia
$resultSlider = $conn->query("SELECT COUNT(*) as count FROM Slider");
$rowSlider = $resultSlider->fetch_assoc();

if ($rowSlider['count'] == 0) {
    // Inserir dados na tabela Slider
    $conn->query("INSERT INTO Slider(url_img) VALUES('slider.png')");
    $conn->query("INSERT INTO Slider(url_img) VALUES('slider_2.png')");
}


    // Restante do seu código para verificar e inserir dados nas tabelas

    // Fechar a conexão
    

    return $conn;
}


function carousel() {
    $conn = connect();
    
    // Consulta SQL para buscar todas as URLs de imagens da tabela "Slider"
    $sql = "SELECT url_img FROM Slider";
    $result = $conn->query($sql);
    $imagens=[];
    if ($result->num_rows > 0) {    
        while ($row = $result->fetch_assoc()) 
            array_push($imagens, $row);
    }
    // Fechando a conexão com o banco de dados
    $conn->close();
    
    //Retornando variavel para carrossel
    return $imagens;
}

function card_produtos(){
    $conn= connect();
    $sql = "SELECT * FROM Produto";
    $result = $conn->query($sql);
    $card_produto= [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc())
            array_push($card_produto, $row);
        //Fechando a conexão com o banco de dados
        $conn->close();
        //Retornanndo variavel para card de produto
        return $card_produto;
        
    }
}

function recuperar_produto_por_id($id_produto){
    $conn= connect();
    $sql = "SELECT * FROM Produto where id=$id_produto";
    $result = $conn->query($sql);
    $card_produto=null;
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $card_produto = $row;
        }
            
        //Fechando a conexão com o banco de dados
        $conn->close();
        //Retornanndo variavel para card de produto
        return $card_produto;
        
    }
}

function apagar_produto_por_id($id_produto){
    $conn= connect();
    $sql = $conn->prepare("DELETE FROM Produto WHERE id = ?");
    $sql->bind_param("i", $id_produto);
    $result = $sql->execute();
    $sql->close();
    $conn->close();

}

function criar_carrinho( $min, $max, $cod_carrinho){
    $conn= connect();
    $min = 000000;
    $max = 999999;
    $cod_carrinho = rand($min, $max);
    $sql = "INSERT INTO Compra(id) VALUES($cod_carrinho)";

}

function add_produto_carrinho( $id_produto){
    $conn= connect();
    $sql = "SELECT * FROM Produto where id=$id_produto";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $card_produto = $row;
        }
    }
}

function processar_login($email, $senha){
    $conn = connect();

    $sql = "SELECT id, nome, email, senha, isAdmin, foto FROM usuario WHERE email = '$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($senha == $row['senha']) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["foto_path"] = $row["foto"];
            $_SESSION["email"] = $email;
            $_SESSION["username"] = $row["nome"]; // Defina o nome de usuário aqui
            $_SESSION["is_admin"] = $row["isAdmin"];
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
            
        } 
        else{
            return 1;
        }
        
    }elseif($result->num_rows ==0){

        header("Location: ../paginas/login.php");
    } 
 
    
    else {
        return 2;
    }
}

function perfil(){

    // Verifica a conexão do usuario
if (isset($_SESSION["email"])) { 
    $email = $_SESSION["email"]; // Obtém o email do usuário da sessão

    // Use $emailusuario para exibir informações do usuário ou realizar operações
    
} else {
    // Se o usuário não estiver logado, redirecione-o para a página de login
    header("Location: ../paginas/login.php");
    exit;
}
$conn = connect();
$sql = "SELECT nome, email FROM usuario WHERE email = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die('Erro na preparação da consulta: ' . $conn->error);
}
$stmt->bind_param("s",$email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $perfil = $result->fetch_assoc();
        $conn->close();
        return $perfil;
    } else {
        return array('nome' => 'Usuário não encontrado', 'email' => 'Email não encontrado');
}

}

function alterar_senha(){

}

function pegar_foto($user_id) {
    $conn = connect();

    // Utilizando prepared statement para evitar injeções SQL
    $stmt = $conn->prepare("SELECT foto FROM usuario WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        echo $row["foto"];
    } else {
        // Usuário não encontrado
        return null;
    }
}


function alterar_email($email, $senha){
    $conn= connect();
    $user_id= $_SESSION["user_id"]; //Variavel de sessão
    $sql= "SELECT email, senha FROM usuario WHERE id= '$user_id'";
    $result=$conn->query($sql);
    if($result->num_rows > 0 ){
        $row= $result->fetch_assoc();
        if($senha == $row['senha']){
            $stmt=$conn->prepare("UPDATE usuario SET email= ? WHERE id= ?");
            $stmt->bind_param("si",$email, $user_id );
            if ($stmt->execute()) {
                header("Location: ../php/logout.php");
            } else {
                echo "Erro ao alterar o e-mail: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Senha incorreta. A alteração de e-mail não foi realizada.";
        }      
    } else {
        echo "Usuário não encontrado.";
        $conn->close();
    }
}

function Apagar_conta($id){
    $conn= connect();
    $user_id= $_SESSION["user_id"]; //Variavel de sessão
    $stmt = $conn->prepare("DELETE FROM usuario WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $result= $stmt->execute();
    $stmt->close();
    $conn->close();
    return $result;
}

function getuser(){
    $conn= connect();
    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);
    $usuarios = [];
    // Verificar se há resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
    }
    // Fechar a conexão
    $conn->close();

    return $usuarios;
}

function getcategoria(){
    $conn= connect();
    $sql = "SELECT * FROM Categoria";
    $result = $conn->query($sql);
    $categorias = [];
    // Verificar se há resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $categorias[] = $row;
        }
    }
    // Fechar a conexão
    $conn->close();

    return $categorias;
}

function apagar_usuarios($id){
    $conn= connect();
    $sql = $conn->prepare("DELETE FROM usuario WHERE id = ?");
    $sql->bind_param("i", $id);
    if ($sql->execute()) {
        header("Location: ../paginas/visualizacaoUser.php");
    } else {
        echo "Erro ao excluir o usuário: " . $conn->error;
        return 1;
    }
    $sql->close();
}

function apagar_categorias($id){
    $conn= connect();
    $sql = $conn->prepare("DELETE FROM Categoria WHERE id = ?");
    $sql->bind_param("i", $id);
    if ($sql->execute()) {
        header("Location: ../paginas/gerenciarCategoria.php");
    } else {
        echo "Erro ao excluir a categoria: " . $conn->error;
        return 1;
    }
    $sql->close();
}

function editName_usuarios( $id,$newName){
    $conn= connect();
    $sql = $conn->prepare("UPDATE usuario SET nome = ? WHERE id = ?");
    $sql->bind_param("si", $newName, $id);
    if ($sql->execute()) {
        header("Location: ../paginas/visualizacaoUser.php");
    } else {
        echo "Erro ao atualizar o nome do usuário: " . $conn->error;
        return 1;
        }
    $sql->close();
}

function editName_categorias( $id,$newName){
    $conn= connect();
    $sql = $conn->prepare("UPDATE Categoria SET nome = ? WHERE id = ?");
    $sql->bind_param("si", $newName, $id);
    if ($sql->execute()) {
        header("Location: ../paginas/gerenciarCategoria.php");
    } else {
        echo "Erro ao atualizar o nome da categoria: " . $conn->error;
        return 1;
        }
    $sql->close();
}

function transform_admin($id){
    $conn= connect();
    $sql = $conn->prepare("UPDATE usuario set isAdmin = 1 WHERE id = ?");
    $sql->bind_param("i", $id);
    if ($sql->execute()) {
        header("Location: ../paginas/visualizacaoUser.php");
    } else {
        echo "Erro ao tornar admin:" . $conn->error;
        return 1;
    }
    $sql->close();

}

function destransform_admin($id){
    $conn= connect();
    $sql = $conn->prepare("UPDATE usuario set isAdmin = 0 WHERE id = ?");
    $sql->bind_param("i", $id);
    if ($sql->execute()) {
        header("Location: ../paginas/visualizacaoUser.php");
    } else {
        echo "Erro ao tirar adm:" . $conn->error;
        return 1;
    }
    $sql->close();

}

function insertIntoCarrinho($id_produto, $quantidade) {
    $id_cliente= $_SESSION["user_id"];
    $conn = connect();
    
    // Prepara a consulta SQL usando placeholders para prevenção de SQL injection
    $sql = $conn->prepare("INSERT INTO produtocarrinho (usuario_id, produto_id , quantidade) VALUES (?, ?, ?)");
    
    // Associa os parâmetros aos placeholders e define os tipos de dados
    $sql->bind_param("iii", $id_cliente ,$id_produto, $quantidade);
    
    // Executa a consulta SQL
    if ($sql->execute()) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro ao inserir no carrinho: " . $sql->error;
        return 1;
    }
    
    // Fecha a declaração SQL e a conexão
    $sql->close();
    $conn->close();
}
function removeFromCarrinho($id_produto) {
    $id_cliente=$_SESSION['user_id'];
    // Substitua 'sua_tabela' pelo nome real da tabela no seu banco de dados
    $conn = connect();

    // Prepara a consulta SQL usando placeholders para prevenção de SQL injection
    $sql = $conn->prepare("DELETE FROM carrinho WHERE id_produto = ? AND id_cliente = ? LIMIT 1");

    // Associa os parâmetros aos placeholders e define os tipos de dados
    $sql->bind_param("ii", $id_produto, $id_cliente);

    // Executa a consulta SQL
    if ($sql->execute()) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro ao remover do carrinho: " . $sql->error;
        return 1;
    }

    // Fecha a declaração SQL e a conexão
    $sql->close();
    $conn->close();
}

function getProdutosCarrinho($id_cliente){
    $conn = connect();
    $produtos_no_carrinho = array(); // Inicializa um array para armazenar os produtos no carrinho

    $sql = "SELECT produto_id FROM produtocarrinho WHERE usuario_id = '$id_cliente'";
    $res = $conn->query($sql);

    if ($res) {
        while ($produto = $res->fetch_assoc()) {
            $id_produto = $produto['produto_id'];

            $sql_produto = "SELECT * FROM produto WHERE id = '$id_produto'";
            $res_produto = $conn->query($sql_produto);

            if ($res_produto) {
                while ($row_produto = $res_produto->fetch_assoc()) {
                    $produtos_no_carrinho[] = $row_produto; // Adiciona o produto ao array de produtos no carrinho
                    echo '<div class="card" style="height:350px; margin:auto;">';
                    echo '<div class="card-img">';
                    $imagem = 'img/img_produto/' . $produtos_no_carrinho['foto'];
                    echo '<img src="' . $imagem . '" class="d-block w-100" alt="...">';
                    echo '</div>';
                    echo '<div class="card-info">';
                    echo '<p class="text-title">' . $produtos_no_carrinho["nome"] . '</p>';
                    echo '<p class="text-body">' . $produtos_no_carrinho["descricao"] . '</p>';
                    echo '    <div class="custom-card__price">'. number_format($produtos_no_carrinho["valor"], 2) . '</div>';
                    echo '</div>';

                    echo '<div class="card-footer">';            
                    echo '<div class="custom-card">';
                    echo '    <div class="custom-card__price">'. number_format($produtos_no_carrinho["valor"]*$produtos_no_carrinho['quantidade'], 2) . '</div>';
                    echo '    <div class="custom-card__counter">';
                    echo '        <button class="custom-card__btn" onclick="removerDoCarrinho(' . $produtos_no_carrinho['id'] . '); maisproduto(); atualizarTotal(); atualizarNotificacaoCarrinho();">-</button>';
                    echo '        <div class="custom-card__counter-score">' .$produtos_no_carrinho['quantidade']. '</div>';
                    echo '        <button class="custom-card__btn custom-card__btn-plus" id="addcart_' . $produtos_no_carrinho['id'] . '_carrinho maisproduto" onclick="adicionarAoCarrinho(' . $produto['id'] . '); maisproduto(); atualizarTotal(); atualizarNotificacaoCarrinho();">+</button>';
                    echo '    </div>';
                    echo '</div>';
                        
                }
            } 
        }
    } 

    $conn->close();

    //return $produtos_no_carrinho;
}




function getProdutoPorId($id_produto) {
    $conn = connect();

    // Substitua 'sua_tabela_produto' pelo nome real da tabela Produto no seu banco de dados
    $sql = $conn->prepare("SELECT * FROM Produto WHERE id = ?");
    $sql->bind_param("i", $id_produto);

    $sql->execute();
    $result = $sql->get_result();

    // Obter o resultado como um array associativo
    $produto = $result->fetch_assoc();

    $sql->close();
    $conn->close();

    return $produto;
}







// flying_bubbles.php

if (isset($_GET['method'])) {
    $method = $_GET['method'];

    if ($method == 'atualizarTotal') {
        // Chame a função para calcular o total e retorne a resposta
        echo calcularTotalCarrinho();
    }
    // Outros métodos podem ser adicionados da mesma forma
}



if (isset($_GET['method']) && $_GET['method'] == 'insertIntoCarrinho') {
    // Verifique e sanitize os parâmetros necessários, e em seguida, chame a função desejada
    if (isset($_GET['id_produto'])) {
        $id_produto = $_GET['id_produto'];
        insertIntoCarrinho($id_produto, $_SESSION["user_id"], 1);
        // Pode adicionar lógica de resposta aqui, se necessário
    }
    // Outros métodos podem ser adicionados da mesma forma
}
if (isset($_GET['method']) && $_GET['method'] == 'removeFromCarrinho') {
    // Verifique e sanitize os parâmetros necessários, e em seguida, chame a função desejada
    if (isset($_GET['id_produto'])) {
        $id_produto = $_GET['id_produto'];
        removeFromCarrinho($id_produto);
        // Pode adicionar lógica de resposta aqui, se necessário
    }
    // Outros métodos podem ser adicionados da mesma forma
}

if (isset($_GET['action']) && $_GET['action'] == 'atualizar') {
    // Inclua a função contarItensNoCarrinho aqui (ou o código relevante para atualizar a consulta)
    

    // Exemplo: $id_cliente = obterIdDoCliente(); // Substitua com sua lógica para obter o ID do cliente
    $id_cliente = $_SESSION['user_id']; // Substitua pelo ID do cliente atual

    // Chama a função para contar a quantidade de itens no carrinho
    $quantidadeItens = contarItensNoCarrinho($id_cliente);

    // Retorna a quantidade como resposta AJAX
    echo $quantidadeItens;
} else {
    // Código adicional caso necessário
}



// Função para inserir na tabela Compra
function inserirCompra($valor) {
    // Inicie a sessão (se ainda não estiver iniciada)
    session_start();
    $conn = connect();

    // Verifique se o usuário está logado
    if (!isset($_SESSION['user_id'])) {
        die("Usuário não autenticado.");
    }

    // Obtém o ID do usuário da sessão
    $usuario_id = $_SESSION['user_id'];

    // Obtém a data e hora atual
    $dataehora = date('Y-m-d H:i:s');

    // Prepara a instrução SQL para inserção
    $sql = "INSERT INTO Compra (usuario_id, dataehora, valor) VALUES (?, ?, ?)";

    // Prepara a instrução SQL
    $stmt = $conn->prepare($sql);

    // Vincula os parâmetros
    $stmt->bind_param('iss', $usuario_id, $dataehora, $valor);

    // Executa a instrução SQL
    if ($stmt->execute()) {
        echo "Compra inserida com sucesso.";
    } else {
        echo "Erro ao inserir compra: " . $stmt->error;
    }

    // Fecha a instrução e a conexão
    $stmt->close();
    $conn->close();
}
function getCompra() {
    $conn = connect();
    $sql = "SELECT * FROM historico";
    $result = $conn->query($sql);

    $compras = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $compras[] = $row;
        }
    }

    return $compras;
}

function getusercompra() {
    $conn = connect();
    $cod_cliente= $_SESSION['user_id'];
    $sql = "SELECT * FROM historico WHERE usuario_id = '$cod_cliente'";
    $result = $conn->query($sql);

    $compras = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $compras[] = $row;
        }
    }

    return $compras;
}

function getUserName($id_usuario) {
    $conn = connect();
    $sql = "SELECT nome FROM usuario WHERE id = $id_usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['nome'];
    } else {
        return "Usuário não encontrado";
    }
}


function getFotoPefil($id_usuario) {
    $conn = connect();
    $sql = "SELECT foto FROM usuario WHERE id = $id_usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['foto'];
    } else {
        return "Usuário não encontrado";
    }
}

function updateFotoPerfil($id_usuario, $nova_foto) {
    $conn = connect();

    // Verifica se o usuário existe antes de tentar atualizar
    $verifica_sql = "SELECT id FROM usuario WHERE id = $id_usuario";
    $verifica_result = $conn->query($verifica_sql);

    if ($verifica_result->num_rows > 0) {
        // Atualiza o caminho da foto na base de dados
        $update_sql = "UPDATE usuario SET foto = '$nova_foto' WHERE id = $id_usuario";
        $conn->query($update_sql);

        return "Foto de perfil atualizada com sucesso.";
    } else {
        return "Usuário não encontrado.";
    }
}
?>