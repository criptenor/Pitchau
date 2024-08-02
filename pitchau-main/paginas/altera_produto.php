<?php
  header("Location: ../index.php"); // Redirecionar para a página do painel após o login
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registre.css">
    <title>AlterarProduto</title>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="css/card_produtos.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
      *{
        font-family: 'Open Sans', sans-serif;
      }
    </style>
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
  session_start();
  if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
      header("Location: ../index.php"); // Redirecionar para a página do painel após o login
  }

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
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"><img src="../img/PITCHAU.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
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
              menu = '<li><a class="dropdown-item" href="../paginas/login.php">Fazer Login</a></li><li><a class="dropdown-item" href="../paginas/cadastro.php">Se Cadastrar</a></li>';
            }
            else if(menulevel == '2'){
              menu = '<li><a class="dropdown-item" href="../paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="../paginas/carrinho.php">Carrinho</a></li><li><a class="dropdown-item" href="../paginas/produtos_comprados.php">Prod Comprado</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            else if(menulevel == '3'){
              menu = '<li><a class="dropdown-item" href="paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="paginas/cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="paginas/produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="paginas/visualizacaoUser.php">Gerenciar Usuários</a></li><li><a class="dropdown-item" href="paginas/gerenciarCategoria.php">Gerenciar Categorias</a></li><li><a class="dropdown-item" href="php/logout.php">Logout</a></li>';
            }
            document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
        </li>
      </ul>      
    </div>
  </div>
</nav>

<div class="card_list">   
<?php //Cards 

  $card_produto = recuperar_produto_por_id($servername, $username, $password, $dbname, $id_produto);  
  $card_produto = card_produtos();
    if($card_produto != null){
      echo $card_produto["id"];
      echo '<div class="card" style="height:350px">';
      echo '<div class="card-img">';
      $imagem=$card_produto['foto'];
      $imagem= 'img/img_produto/' . $imagem;
      echo '<img src="' . $imagem . '" class="d-block w-100" alt="...">';
      echo '</div>';
      echo '<div class="card-info">';
      echo '<p class="text-title">' . $card_produto["nome"] . '</p>';
      echo '<p class="text-body">' . $card_produto["descricao"] . '</p>';
      echo '</div>';

      echo '<div class="card-footer"style="display:flex;">';
      echo '<span class="text-title">$' . number_format($card_produto["valor"], 2) . '</span>';
      
      echo '</div>'; #fecha footer
      echo '</div>'; #fechacard
    }
    
    else {
      echo "Nenhum produto encontrado na tabela Produto.";
    }
?>
</div>
<!--
<form class="form" action="../php/processar_altera_produto.php" method="post" enctype="multipart/form-data">
  <div class="container"> 
    <p class="title">Alterar Produto</p>
    <p>Redefinição de Produto</p>
  
    <div class="header"> 
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> 
      <path d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M7 10C7.43285 10 7.84965 10.0688 8.24006 10.1959M12 12V21M12 12L15 15M12 12L9 15" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> <p>Browse File to upload!</p>
    </div> 
    <label for="file" class="footer"> 
      <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M15.331 6H8.5v20h15V14.154h-8.169z"></path><path d="M18.153 6h-.009v5.342H23.5v-.002z"></path></g></svg> 
      <p>Selecione a foto do Produto</p> 
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.16565 10.1534C5.07629 8.99181 5.99473 8 7.15975 8H16.8402C18.0053 8 18.9237 8.9918 18.8344 10.1534L18.142 19.1534C18.0619 20.1954 17.193 21 16.1479 21H7.85206C6.80699 21 5.93811 20.1954 5.85795 19.1534L5.16565 10.1534Z" stroke="#000000" stroke-width="2"></path> <path d="M19.5 5H4.5" stroke="#000000" stroke-width="2" stroke-linecap="round"></path> <path d="M10 3C10 2.44772 10.4477 2 11 2H13C13.5523 2 14 2.44772 14 3V5H10V3Z" stroke="#000000" stroke-width="2"></path> </g></svg>
    </label> 
    <input id="file" type="file" name="foto"> 
  </div>
  <p class="form-title">Alterar o produto</p>
  <div class="input-container">
    <input type="text" name="nome" placeholder="Nome">
    <span>
    </span>
  </div>
  <div class="input-container">
    <input type="text" name="desc" placeholder="Descrição">
    <span>
    </span>
  </div>
  <div class="input-container">
    <input type="number" name="valor" placeholder="Valor">
    <span>
    </span>
  </div>
  <button type="submit" class="submit">Confirmar</button>
</form>
  -->
</body>
</html>
