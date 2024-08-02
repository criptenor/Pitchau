<!DOCTYPE html>
<?php
session_start();

if (!isset( $_SESSION["user_id"])) { //Verifica se == Usuário
  header("Location: index.php"); // Redirecionar para a página index
}
if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
  header("Location: index.php"); // Redirecionar para a página do painel após o login
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/card_produtos.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pitchau</title>
    <style>
      body {
        background-color: beige;
      }
    
      .card_ {
    
          --main-color: #000;
          --submain-color: #78858F;
          --bg-color: #fff;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
          position: relative;
          width: 100vw;
          display: flex;
          flex-direction: column;
          align-items: center;
          border-radius: 20px;
          background: var(--bg-color);
          border: none;
        }
        
        .card__img {
          height: 192px;
          width: 100%;
        }
        
        .card__img svg {
          height: 100%;
          border-radius: 20px 20px 0 0;
        }
        
        .card__avatar {
          position: absolute;
          width: 114px;
          height: 114px;
          background: var(--bg-color);
          border-radius: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
          top: calc(50% - 57px);
        }
        
        .card__avatar svg {
          width: 100px;
          height: 100px;
        }
        
        .card__title {
          margin-top: 60px;
          font-weight: 500;
          font-size: 18px;
          color: var(--main-color);
        }
        
        .card__subtitle {
          margin-top: 10px;
          font-weight: 400;
          font-size: 15px;
          color: var(--submain-color);
        }
        
        .card__btn {
          margin-top: 15px;
          width: 200px;
          height: 31px;
          border: 2px solid var(--main-color);
          border-radius: 4px;
          font-weight: 700;
          font-size: 11px;
          color: var(--main-color);
          background: var(--bg-color);
          text-transform: uppercase;
          transition: all 0.3s;
        }
        
        .card__btn-solid {
          background: var(--main-color);
          color: var(--bg-color);
        }
        
        .card__btn:hover {
          background: var(--main-color);
          color: var(--bg-color);
        }
        
        .card__btn-solid:hover {
          background: var(--bg-color);
          color: var(--main-color);
        }

        .popup{
          background-color: #dadada;
          opacity: 0.8;
          position: fixed;
          /* justify-content: center; */
          bottom: 0;
          top: auto;
          width: 100vw;
          height: 100vh;
        }

        .card {
          
          
          position: fixed;
          width: 300px;
          height: 220px;
          background-color: rgb(255, 255, 255);
          border-radius: 8px;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          padding: 20px 30px;
          gap: 13px;
          position: relative;
          overflow: hidden;
          box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.062);
        }
        
        #cookieSvg {
          width: 50px;
        }
        
        #cookieSvg g path {
          fill: rgb(97, 81, 81);
        }
        
        .cookieHeading {
          font-size: 1.2em;
          font-weight: 800;
          color: rgb(26, 26, 26);
        }
        
        .cookieDescription {
          text-align: center;
          font-size: 0.7em;
          font-weight: 600;
          color: rgb(99, 99, 99);
        }
        
        .cookieDescription a {
          --tw-text-opacity: 1;
          color: rgb(59 130 246);
        }
        
        .cookieDescription a:hover {
          -webkit-text-decoration-line: underline;
          text-decoration-line: underline;
        }
        
        .buttonContainer {
          display: flex;
          gap: 20px;
          flex-direction: row;
        }
        
        .acceptButton {
          width: 80px;
          height: 30px;
          background-color: #7b57ff;
          transition-duration: .2s;
          border: none;
          color: rgb(241, 241, 241);
          cursor: pointer;
          font-weight: 600;
          border-radius: 20px;
          box-shadow: 0 4px 6px -1px #977ef3, 0 2px 4px -1px #977ef3;
          transition: all .6s ease;
        }
        
        .declineButton {
          width: 80px;
          height: 30px;
          background-color: #dadada;
          transition-duration: .2s;
          color: rgb(46, 46, 46);
          border: none;
          cursor: not-allowed;
          font-weight: 600;
          border-radius: 20px;
          box-shadow: 0 4px 6px -1px #bebdbd, 0 2px 4px -1px #bebdbd;
          transition: all .6s ease;
        }
        
        .declineButton:hover {
          background-color: #ebebeb;
          box-shadow: 0 10px 15px -3px #bebdbd, 0 4px 6px -2px #bebdbd;
          transition-duration: .2s;
        }
        
        .acceptButton:hover {
          background-color: #9173ff;
          box-shadow: 0 10px 15px -3px #977ef3, 0 4px 6px -2px #977ef3;
          transition-duration: .2s;
        }
        .scrollable {
          overflow-y: auto; /* Adiciona uma barra de rolagem vertical quando necessário */
          max-height: 100vh; /* Define uma altura máxima para o carrinho para limitar o espaço ocupado */
      } 
      #carrinhoTela {
      position: fixed;
      top: 0;
      right: -100%; /* Inicialmente fora da tela */
      width: 33.33%; /* 1/3 da largura da tela */
      height: 100vh;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
          transition: right 0.3s ease; /* Adiciona uma transição suave */
          }

          #fecharCarrinho {
          position: absolute;
          top: 10px;
          right: 10px;   
          border: none;
              background: transparent;
          }
          .fixed-footer{
            position: absolute;
              bottom: 0;
              width:100%;
              z-index: 10;
          }
          #carrinhoTela {
            z-index: 10;
            width: 33%;
            overflow-y: auto; /* Adicione rolagem vertical ao carrinho se necessário */
            height: 100vh; /* Altura total da tela */
            background-color: #f4f4f4;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Sombra para indicar a separação entre o carrinho e o conteúdo principal */
          }
          .botao-content{
            margin: auto;
            width: 33%;
        }
        .btn-cart {
              display: flex;
              align-items: center;
              justify-content: center;
              width: 50px;
              height: 50px;
              border-radius: 10px;
              border: none;
              background-color: transparent;
              position: relative;
            }

            .btn-cart::after {
                content: attr(data-quantity);
                width: fit-content;
                height: fit-content;
                position: absolute;
                font-size: 15px;
                color: white;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                opacity: 0;
                visibility: hidden;
                transition: .2s linear;
                top: 115%;
              }

              .icon-cart {
                width: 24.38px;
                height: 30.52px;
                transition: .2s linear;
              }

              .icon-cart path {
                fill: rgb(240, 8, 8);
                transition: .2s linear;
              }

              .btn-cart:hover > .icon-cart {
                transform: scale(1.2);
              }

              .btn-cart:hover > .icon-cart path {
                fill: rgb(186, 34, 233);
              }

              .btn-cart:hover::after {
                visibility: visible;
                opacity: 1;
                top: 105%;
              }

              .quantity {
                font-size: 11px;
                background-color: purple;
                color: white;
                font-weight: 800;
                width: 15px;
                height: 15px;
                /* width: auto; */
                border-radius: 100%;
                margin-top: -57%;
                            
              }

                    


            .card_list, .card_list_carrinho{
              padding: 20px;
              justify-content:center;
              padding-top: 10vh;
              padding-bottom: 10vh;
            }

            .fixed-footer {
              position: fixed;
              background-color:#fff;
              bottom: 0;
              width: 32vw ;
              color: #fff;
              padding: 10px;
              text-align: center;
            }

            /* Botão para fechar carrinho fixo na tela */
            #fecharCarrinhoFixo {
              position: fixed;
              top: 10px;
              left: 10px;
              z-index: 1; /* Garante que o botão esteja acima do conteúdo principal */
            }
            .pagar{
            position: relative;
            display: inline-block;
            margin: 15px;
            padding: 15px 30px;
            text-align: center;
            font-size: 18px;
            letter-spacing: 1px;
            text-decoration: none;
            color: #008000;
            background: transparent;
            cursor: pointer;
            transition: ease-out 0.5s;
            border: 2px solid #008000;
            border-radius: 10px;
            box-shadow: inset 0 0 0 0 #008000;
          }

          .pagar:hover {
            color: white;
            box-shadow: inset 0 -100px 0 0 #008000;
          }

          .pagar:active {
            transform: scale(0.9);
          }
          /* Máscara opaca */
              /* Máscara opaca para o popup */
        .mask {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
          display: none;
          justify-content: center;
          align-items: center;
          z-index: 999;
        }

        /* Conteúdo da Página
        .page-content {
          
        }
        Estilos do conteúdo da página aqui */

        /* Popup estilizado */
        .popup-container {
          z-index:1000;
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background-color: white;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
          display: none;
        }

        /* Resto do seu CSS para o popup */

        .card_popup {
          overflow: hidden;
          position: relative;
          text-align: left;
          border-radius: 0.5rem;
          max-width: 290px;
          box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
          background-color: #fff;
        }

        .dismiss {
          position: absolute;
          right: 10px;
          top: 10px;
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 0.5rem 1rem;
          background-color: #fff;
          color: black;
          border: 2px solid #D1D5DB;
          font-size: 1rem;
          font-weight: 300;
          width: 30px;
          height: 30px;
          border-radius: 7px;
          transition: .3s ease;
        }

        .dismiss:hover {
          background-color: #ee0d0d;
          border: 2px solid #ee0d0d;
          color: #fff;
        }

        .header {
          padding: 1.25rem 1rem 1rem 1rem;
        }

        .image {
          display: flex;
          margin-left: auto;
          margin-right: auto;
          background-color: #e2feee;
          flex-shrink: 0;
          justify-content: center;
          align-items: center;
          width: 3rem;
          height: 3rem;
          border-radius: 9999px;
          animation: animate .6s linear alternate-reverse infinite;
          transition: .6s ease;
        }

        .image svg {
          color: #0afa2a;
          width: 2rem;
          height: 2rem;
        }

        .content {
          margin-top: 0.75rem;
          text-align: center;
        }

        .title {
          color: #066e29;
          font-size: 1rem;
          font-weight: 600;
          line-height: 1.5rem;
        }

        .message {
          margin-top: 0.5rem;
          color: #595b5f;
          font-size: 0.875rem;
          line-height: 1.25rem;
        }

        .actions {
          margin: 0.75rem 1rem;
        }

        .history {
          display: inline-flex;
          padding: 0.5rem 1rem;
          background-color: #1aa06d;
          color: #ffffff;
          font-size: 1rem;
          line-height: 1.5rem;
          font-weight: 500;
          justify-content: center;
          width: 100%;
          border-radius: 0.375rem;
          border: none;
          box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .track {
          display: inline-flex;
          margin-top: 0.75rem;
          padding: 0.5rem 1rem;
          color: #242525;
          font-size: 1rem;
          line-height: 1.5rem;
          font-weight: 500;
          justify-content: center;
          width: 100%;
          border-radius: 0.375rem;
          border: 1px solid #D1D5DB;
          background-color: #fff;
          box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        @keyframes animate {
          from {
            transform: scale(1);
          }

          to {
            transform: scale(1.09);
          }
        }
            
        .card__counter {
          display: flex;
          flex-direction: row;
          align-items: center;
          gap: 15px;
          padding: 5px;
          background: #666;
          border-radius: 50px;
        }
        
        .card__counter-score, .card__btn {
          font-weight: 600;
          font-size: 22px;
          color: var(--main-color);
        }
        
        .card__btn {
          width: 30px;
          height: 30px;
          border-radius: 100%;
          border: none;
          background: transparent;
        }
        
        .card__btn-plus {
          background: var(--bg-color);
        }
        .custom-card {
          display: flex;
          flex-direction: row;
          justify-content: space-between;
          align-items: center;
        }

        .custom-card__back svg, .custom-card__menu svg {
            width: 20px;
            height: 20px;
        }

        .custom-card__img {
            width: 170px;
            height: 170px;
            background: linear-gradient(90deg, #fff8f79a, #f0f7dfa2);
            border-radius: 100%;
            margin-inline: auto;
        }

        .custom-card__img svg {
            height: 150px;
            transform: rotate(-45deg) translate(15px, 0px);
        }

        .custom-card__title {
            font-weight: 600;
            font-size: 25px;
            color: var(--main-color);
        }

        .custom-card__subtitle {
            font-weight: 400;
            font-size: 15px;
            color: var(--main-color);
            letter-spacing: 0.5px;
        }

        .custom-card__price {
            font-weight: 600;
            font-size: 22px;
            margin-right:3%;
            color: var(--main-color);
        }

        .custom-card__counter {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 15px;
            padding: 5px;
            background: #9d9797;
            border-radius: 50px;
        }

        .custom-card__counter-score, .custom-card__btn {
            font-weight: 600;
            font-size: 22px;
            color: var(--main-color);
        }

        .custom-card__btn {
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: none;
            background: transparent;
        }

        .custom-card__btn-plus {
            background: #ffcaa6;
        }
        li a{
          text-decoration:none;
          color:black;
        }
    </style>
</head>
<body>
<?php
  include_once "consultas/flying_bubbles.php";

  if (!isset($_SESSION["user_id"]) && !isset($_SESSION["is_admin"])) { //Verifica se == Usuário Logado ou == Administrador
    echo "<input type='hidden' id='menulevel' value='1'/>"; //Torna em visitante
    $menulevel = 1;
  }
  if (isset($_SESSION["user_id"])) { //Verifica se == Usuário Logado
    if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]== 1 ) { //Verifica se == Administrador
      echo "<input type='hidden' id='menulevel' value='3'/>"; //Torna em administrador
      $menulevel = 3;
  }
  else echo "<input type='hidden' id='menulevel' value='2'/>"; //Torna em usuário
  $menulevel = 2;
  }
  $id_produto = $_GET["id_produto"];
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/PITCHAU.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
          <div id="menu"></div>
          <script>
            menulevel = document.getElementById("menulevel").value;
            var menu = '';
            if(menulevel == '1'){
              menu = '<li><a class="dropdown-item" href="paginas/login.php">Fazer Login</a></li><li><a class="dropdown-item" href="paginas/cadastro.php">Se Cadastrar</a></li>';
            }
            else if(menulevel == '2'){
              menu = '<li><a class="dropdown-item" href="paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="paginas/produtos_comprados.php">Prod Comprado</a></li><li><a class="dropdown-item" href="php/logout.php">Logout</a></li>';
            }
            else if(menulevel == '3'){
              menu = '<li><a class="dropdown-item" href="paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="paginas/cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="paginas/produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="paginas/visualizacaoUser.php">Gerenciar Usuários</a></li><li><a class="dropdown-item" href="paginas/gerenciarCategoria.php">Gerenciar Categorias</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Página do Produto -->
<div class="card_list">
<?php
$card_produto = recuperar_produto_por_id($id_produto);
  if($card_produto != null){
    echo $card_produto["id"];
    echo '<div class="card" style="height:350px">';
    echo '<div class="card-img">';
    $imagem=$card_produto['foto'];
    echo '<img src="' . "img/img_produto/" . $imagem . '" class="d-block w-100" alt="...">';
    echo '</div>';
    echo '<div class="card-info">';
    //<button class="card__btn card__btn-solid" onclick="exibirElementosSenha() ">Trocar a Senha</button>
    echo '<p class="text-title">' . $card_produto["nome"] . '</p>';
    echo '<p class="text-body">' . $card_produto["descricao"] . '</p>';
    echo '<span class="text-body">Estoque: ' . number_format($card_produto["quantidade_estoque"]) . '</span><br>';
    echo '</div>';
    echo '<div class="card-footer">';
    echo '<span class="text-title">$' . number_format($card_produto["valor"], 2) . '</span>';
    echo '<div class="card-button">';
    // Terminar Depois - Editar Produto
//      echo '<a href="altera_produto.php?id_produto='.$card_produto["id"].'">Alterar Produto</a>';

//      echo '<form action="php/processar_produto.php" method="GET" class="form">'; //echo '<a href="exibir_produto.php?id_produto='.$card_produto["id"].'">Ir</a>';
//      echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    
  } 
  else {
    echo "Nenhum produto encontrado na tabela com este id.";
  }

$conn= connect();
// Buscar categorias do banco de dados
$sql = "SELECT id, nome FROM Categoria";
$resultado = $conn->query($sql);
$categorias = [];
if ($resultado->num_rows > 0) {
  while ($row = $resultado->fetch_assoc()) {
    $categorias[] = $row;
  }
}
$conn->close();
?>
<!-- --------------------------------------- -->
<form class="form" action="php/processar_alterar_produto.php" method="post" enctype="multipart/form-data">
  <div class="container"> 
    <p class="title">Alterar Produto</p>
    <p>Redefinição de Produto</p>
      <div class="header" id="imagePreviewContainer">
        <img src="upload.png" alt="Imagem padrão" style="width:250px;height:200px">
        <script>
          function previewImage(input) {
            var imagePreviewContainer = document.getElementById('imagePreviewContainer');
            var file = input.files[0];
            if (file) {
              var reader = new FileReader();
              reader.onload = function (e) {
                imagePreviewContainer.innerHTML = '<img src="' + e.target.result + '" alt="Imagem a ser carregada" style="width:300px;height:200px;">';
              };
              reader.readAsDataURL(file);
            } 
            else {
              // Se nenhum arquivo foi selecionado, exibe a imagem padrão
              imagePreviewContainer.innerHTML = '<img src="upload.png" alt="Imagem padrão" style="width:250px; height:200px;">';
            }
          }
        </script>
      </div> 
      <label for="foto" class="footer">
        <!-- ... (seu código SVG) ... -->
        <p>Selecione a foto do Produto</p>
        <!-- ... (seu código SVG) ... -->
      </label>
      <input id="foto" type="file" name="foto" onchange="previewImage(this)">
      
    </div>
    <p>Obs.: Use dimensões: 163px x 63px<br>para melhor qualidade.</p>
  <p class="form-title">Alterar o produto</p>
  <input type="hidden" name="id" value="<?php echo $id_produto;?>">
  <div class="input-container">
    <input type="text" name="nome" placeholder="Nome" value="<?php echo $card_produto['nome'];?>">
    <span>
    </span>
  </div>
  <div class="input-container">
    <input type="text" name="desc" placeholder="Descrição" value="<?php echo $card_produto['descricao'];?>">
    <span>
    </span>
  </div>
  <div class="input-container">
    <input type="number" name="valor" placeholder="Valor" value="<?php echo $card_produto['valor'];?>">
    <span>
    </span>
  </div>
  <div class="input-container">
    <select name="categoria">
      <?php foreach ($categorias as $categoria): ?>
        <option value="<?php echo $categoria['id']; ?>">
          <?php echo $categoria['nome']; ?>
        </option>
      <?php endforeach; ?>
    </select>.      
  </div>
  <div class="input-container">
    <input type="number" name="quantidade" placeholder="Quantidade" value="<?php echo $card_produto['quantidade_estoque'];?>">
    <span></span>
  </div>  
  <button type="submit" class="submit">Confirmar</button>
  <br><br>
  <?php echo '<a href="php/processar_excluir_produto.php?id_produto='.$card_produto["id"].'">Excluir</a>';?>
</form>
<script>
	//  add_cart = document.getElementById("addcart").innerHTML = menu;
	//add_cart = document.getElementById("id").innerHTML = menu;
//	document.body.innerHTML += "<input type='hidden' id='menulevel' value='2'/>";
</script>
</div>
</div>
</div>

</body>
<?php
include('/php/footer.php');
?>
</html>