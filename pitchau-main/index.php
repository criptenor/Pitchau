<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br"> 
<head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
?>

<?php
// Inclua esta linha no início do seu script PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Restante do seu código aqui
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
              menu = '<li><a class="dropdown-item" href="paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="paginas/compra_usuario.php">Minhas Compras</a></li><li><a class="dropdown-item" href="php/logout.php">Logout</a></li>';
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
    <script>
       // Função para mostrar a quantidade do carrinho
    function mostrarQuantidadeCarrinho() {
        var quantidadeCarrinho = document.getElementById("quantidadeCarrinho");
        quantidadeCarrinho.style.display = 'block';
        
    }

    // Função para não mostrar a quantidade do carrinho
    function naoMostrarQuantidadeCarrinho() {
        var quantidadeCarrinho = document.getElementById("quantidadeCarrinho");

        // Oculta a div
        quantidadeCarrinho.style.display = 'none';
    }

    // Exemplo de uso:
    // Suponha que você obtenha a quantidade do carrinho de alguma forma (por exemplo, uma resposta AJAX)
    
    </script>
    <?php

      if (isset( $_SESSION["user_id"]) && !$_SESSION["is_admin"] == true){
        echo '<button data-quantity="0" class="btn-cart"  onclick=" toggleCarrinho(); atualizarTotal();" >';
        echo '  <svg class="icon-cart" viewBox="0 0 24.38 30.52" height="30.52" width="24.38" xmlns="http://www.w3.org/2000/svg">';
        echo '    <title>Sacola</title>';
        echo '    <path transform="translate(-3.62 -0.85)" d="M28,27.3,26.24,7.51a.75.75,0,0,0-.76-.69h-3.7a6,6,0,0,0-12,0H6.13a.76.76,0,0,0-.76.69L3.62,27.3v.07a4.29,4.29,0,0,0,4.52,4H23.48a4.29,4.29,0,0,0,4.52-4ZM15.81,2.37a4.47,4.47,0,0,1,4.46,4.45H11.35a4.47,4.47,0,0,1,4.46-4.45Zm7.67,27.48H8.13a2.79,2.79,0,0,1-3-2.45L6.83,8.34h3V11a.76.76,0,0,0,1.52,0V8.34h8.92V11a.76.76,0,0,0,1.52,0V8.34h3L26.48,27.4a2.79,2.79,0,0,1-3,2.44Zm0,0"></path>';
        echo '  </svg>';
        echo '</button>';
      }

    ?>
    
  </div>
</nav>


<?php



$imagens = carousel();

if ($imagens != null) {
    echo '<div id="carouselExample" class="carousel slide" style=" padding-top:15vh;   ">';
    echo '<div class="carousel-inner">';
    $first = true; // Variável para controlar o primeiro item do carrossel
    foreach ($imagens as $imagem) {
        $url_img = 'img/img_slider/' .$imagem["url_img"];
        echo '<div class="carousel-item ' . ($first ? 'active' : '') . '">';
        echo '<img src="' . $url_img . '" class="d-block w-100" alt="...">';
        echo '</div>';
        $first = false; // Desativar a flag após o primeiro item
    }

    echo '</div>';
    echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">';
    echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
    echo '<span class="visually-hidden">Previous</span>';
    echo '</button>';
    echo '<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">';
    echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
    echo '<span class="visually-hidden">Next</span>';
    echo '</button>';
    echo '</div>';
} else {
    echo "Nenhuma imagem encontrada na tabela Slider.";
}


?>
<script>
  // Função para avançar para o próximo slide
function avancarSlide() {
    var carouselElement = document.getElementById('carouselExample');
    var carousel = new bootstrap.Carousel(carouselElement);
    carousel.next();
}

// Configurar intervalo para avançar o slider a cada 5 segundos
var intervalo = setInterval(avancarSlide, 10000);

// Parar o intervalo quando a página é fechada ou quando o usuário não está mais interagindo
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        clearInterval(intervalo);
    } else {
        intervalo = setInterval(avancarSlide, 5000);
    }
});

// Certifique-se de incluir a biblioteca Bootstrap no seu projeto para utilizar o Carousel
// <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
  const maisproduto = document.getElementById('maisproduto');

  window.maisproduto = function() {
  console.log("Toggle carrinho chamado");
  
        // Fazer a requisição AJAX
        $.ajax({
            type: "POST", // Pode ser POST ou GET, dependendo da sua implementação
            url: "php/gerar_carrinho.php", // Caminho para o seu arquivo PHP
            dataType: "html", // Tipo de dados esperado de volta
            success: function(response){
                // Atualizar o conteúdo da div com a resposta do PHP
                $(".card_list_carrinho").html(response);
            },
            error: function(xhr, status, error){
                // Tratar erros, se necessário
                console.error("Erro na requisição AJAX: " + status + " - " + error);
            }
        });
    
  
  
};


  // Opcional: Fechar carrinho se clicar fora dele
  window.addEventListener('click', function (event) {
    if (event.target === maisproduto) {
      maisproduto();
    }
  });
});


</script>


<script>
  document.addEventListener('DOMContentLoaded', function () {
  const carrinhoTela = document.getElementById('carrinhoTela');

  window.toggleCarrinho = function() {
  console.log("Toggle carrinho chamado");
  
        // Fazer a requisição AJAX
        $.ajax({
            type: "POST", // Pode ser POST ou GET, dependendo da sua implementação
            url: "php/gerar_carrinho.php", // Caminho para o seu arquivo PHP
            dataType: "html", // Tipo de dados esperado de volta
            success: function(response){
                // Atualizar o conteúdo da div com a resposta do PHP
                $(".card_list_carrinho").html(response);
            },
            error: function(xhr, status, error){
                // Tratar erros, se necessário
                console.error("Erro na requisição AJAX: " + status + " - " + error);
            }
        });
    
  
  
  // Verifique se o carrinho está aberto ou fechado
  var carrinhoAberto = carrinhoTela.style.right === '0%';

  // Alterne entre abrir e fechar com base no estado atual
  carrinhoTela.style.right = carrinhoAberto ? '-100%' : '0%';
};


  // Opcional: Fechar carrinho se clicar fora dele
  window.addEventListener('click', function (event) {
    if (event.target === carrinhoTela) {
      toggleCarrinho();
    }
  });
});

</script>

<div class="card_list">   
<?php //Cards
  $card_produto = card_produtos();
    if($card_produto != null){
      foreach($card_produto as $card_produto) {
        echo '<div class="card" style="height:350px">';
        echo '<div class="card-img">';
        $imagem=$card_produto['foto'];
        $imagem= 'img/img_produto/' . $imagem;
        echo '<img src="' . $imagem . '" class="d-block w-100" alt="...">';
        echo '</div>';
        echo '<div class="card-info">';
        echo '<p class="text-title">' . $card_produto["nome"] . '</p>';
        echo '<p class="text-body">' . $card_produto["descricao"] . '</p>';
        echo '<span class="text-body">Estoque: ' . number_format($card_produto["quantidade_estoque"]) . '</span><br>';
        echo '</div>';

        echo '<div class="card-footer"style="display:flex;">';
        echo '<span class="text-title">$' . number_format($card_produto["valor"], 2) . '</span>';
        
        // Adicionando um identificador único ao botão (id_produto) e removendo a chamada direta da função PHP
        
        if (!isset( $_SESSION["user_id"])){
          echo 'Logue e compre!';
        }
        elseif (isset( $_SESSION["user_id"]) && !$_SESSION["is_admin"] == true){
          $id_produto= $card_produto['id'];
          echo '<a href="php/inserir_produto.php?id_produto='.$card_produto["id"].'">';
          echo '  <svg class="icon-cart" viewBox="0 0 24.38 30.52" height="30.52" width="24.38" xmlns="http://www.w3.org/2000/svg">';
          echo '    <title>icon-cart</title>';
          echo '    <path transform="translate(-3.62 -0.85)" d="M28,27.3,26.24,7.51a.75.75,0,0,0-.76-.69h-3.7a6,6,0,0,0-12,0H6.13a.76.76,0,0,0-.76.69L3.62,27.3v.07a4.29,4.29,0,0,0,4.52,4H23.48a4.29,4.29,0,0,0,4.52-4ZM15.81,2.37a4.47,4.47,0,0,1,4.46,4.45H11.35a4.47,4.47,0,0,1,4.46-4.45Zm7.67,27.48H8.13a2.79,2.79,0,0,1-3-2.45L6.83,8.34h3V11a.76.76,0,0,0,1.52,0V8.34h8.92V11a.76.76,0,0,0,1.52,0V8.34h3L26.48,27.4a2.79,2.79,0,0,1-3,2.44Zm0,0"></path>';
          echo '  </svg>';
          echo '</a>';
        }

        else{
          echo '<a href="exibir_produto.php?id_produto='.$card_produto["id"].'">Editar</a>';
        }

        echo '</div>'; #fecha footer
        echo '</div>'; #fechacard
      }
    }
    else {
      echo "Nenhum produto encontrado na tabela Produto.";
    }
?>

</div>

<!-- Adicionando um script JavaScript para lidar com a chamada assíncrona -->
<script>
  function adicionarAoCarrinho($id_produto) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Lógica para lidar com a resposta, se necessário
            // Fechar o carrinho após adicionar ao carrinho, por exemplo
        }
    };
    
    xmlhttp.open("REQUEST", "consultas/flying_bubbles.php?method=insertIntoCarrinho&id_produto=" + id_produto, true);
    
    xmlhttp.send();

}

function removerDoCarrinho($id_produto) {
    var xmlhttpRemove = new XMLHttpRequest(); // Usar um objeto XMLHttpRequest diferente para evitar conflitos
    xmlhttpRemove.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Lógica para lidar com a resposta, se necessário
            // Atualizar a interface após remover do carrinho, por exemplo
        }
    };
    
    xmlhttpRemove.open("GET", "consultas/flying_bubbles.php?method=removeFromCarrinho&id_produto=" + $id_produto, true);
    
    xmlhttpRemove.send();
}


    
  
</script>
<script>
atualizarNotificacaoCarrinho()
 function atualizarNotificacaoCarrinho() {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var quantidadeCarrinho = document.getElementById("quantidadeCarrinho");

            // Atualiza o resultado na página
            quantidadeCarrinho.innerText = this.responseText;

            // Verifica se a resposta é igual a 0
            if (this.responseText == '0') {
                quantidadeCarrinho.style.display = 'none'; // Se 0, oculta a div
            } else {
                quantidadeCarrinho.style.display = 'block'; // Se não 0, exibe a div
            }
        }
    };

    xmlhttp.open("GET", "php/quantidade_Produto_no_carrinho.php", true);
    xmlhttp.send();
}

// Associa a função ao evento de clique do botão


  
</script>
                                   
</div>
<div id="carrinhoTela" class="scrollable" style="border: 1px solid;">
  <button class="button"  id="fecharCarrinho" class="fecharCarrinho" onclick="toggleCarrinho();">
    <svg  class="close"xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 14.41L14.41 17 12 14.59 9.59 17 7 14.41 9.59 12 7 9.59 9.59 7 12 9.59 14.41 7 17 9.59 14.41 12 17 14.41z"/>
    </svg>
  </button>

  <div class="card_list_carrinho">
    <?php 
    $conn= connect(); 
    $id_cliente= $_SESSION['user_id'];
    $produtos_no_carrinho = array(); // Inicializa um array para armazenar os produtos no carrinho

    $sql = "SELECT * FROM produtocarrinho WHERE usuario_id = '$id_cliente'";
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
                    $imagem = 'img/img_produto/' .$row_produto['foto'];
                    echo '<img src="' . $imagem . '" class="d-block w-100" alt="...">';
                    echo '</div>';
                    echo '<div class="card-info">';
                    echo '<p class="text-title">' .$row_produto["nome"] . '</p>';
                    echo '<p class="text-body">' . $row_produto["descricao"] . '</p>';
                    echo '    <div class="custom-card__price">'. number_format($row_produto["valor"], 2) . '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<br>';
                        
                }
            } 
        }
    }   

    ?>
  </div>
  <div class="fixed-footer">
    <div class="col" id="totalCompraMaster total"style="margin:auto;padding-rigth:10%; font-size: 26px; font-weight: 800;">
      <span id="total" style="font-color:black"></span>
      <script>
        function atualizarTotal() {
          var xmlhttp_ = new XMLHttpRequest();

          xmlhttp_.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            // Atualiza o resultado na página
            document.getElementById("total").innerHTML =  this.responseText;
          }
          };

          xmlhttp_.open("GET", "php/calcular_total_carrinho.php", true);
          xmlhttp_.send();
        }
      </script>
    </div>
    <div class="col">
      <?php echo '<a class= "pagar" href="php/comprarProduto.php">Comprar</a>';
      ?>      
    </div>
  </div>
  <br><br><br>
</div>

  <!-- Conteúdo do carrinho aqui -->
  
</div>

<script>
  // Adicione um script JavaScript para lidar com os eventos do mouse
  var carrinhoTela = document.getElementById('carrinhoTela');

  carrinhoTela.addEventListener('mouseenter', function() {
    carrinhoTela.classList.add('scrollable');
  });

  carrinhoTela.addEventListener('mouseleave', function() {
    carrinhoTela.classList.remove('scrollable');
  });
  
</script>
 <!-- Máscara opaca -->
<!-- Máscara opaca para o popup -->
<div class="mask" id="mask"></div>

<!-- Conteúdo da Página -->
<div class="page-content">
  <!-- Botão para mostrar o popup -->
  

  <!-- Popup -->
  <div class="popup-container" id="popupContainer">
    <div class="card_popup">
      <button class="dismiss" type="button" id="dismissBtn">×</button>
      <div class="header">
        <div class="image">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path d="M20 7L9.00004 18L3.99994 13" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
          </svg>
        </div>
        <div class="content">
          <span class="title">Compra efetuada com Sucesso</span>
          <p class="message">Enviaremos um email de confirmação com todos os seus produtos</p>
        </div>
        <div class="actions">
          
          <form action="php/processa_compra.php" method="POST">
          <button id="btnProcessarCompra track enviarEmailBtn" class="history" onclick="processarCompra()">Encerrar Compra</button>

          <script>
          $(document).ready(function() {
              $("#enviarEmailBtn").click(function() {
                  // Fazer uma requisição AJAX para o servidor PHP
                  $.ajax({
                      type: "POST",
                      url: "php/enviar_email.php",
                      success: function(response) {
                          alert(response); // Exibir a resposta do servidor
                      },
                      error: function(error) {
                          console.error(error);
                      }
                  });
              });
          });
          </script>
          </form>
    
        </div>

<script>
    
</script>

      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
        $("#btnProcessarCompra").click(function(){
            // Chamada AJAX para processar a compra
            $.ajax({
                type: "POST",
                url: "php/processa_compra.php", // Substitua pelo nome do seu arquivo PHP
                success: function(response){
                    alert(response); // Exibe uma mensagem de sucesso ou erro
                }
            });
        });
    });
</script>

<script>
  
  document.getElementById('showPopupBtn').addEventListener('click', function() {
    document.getElementById('mask').style.display = 'flex';
    document.getElementById('popupContainer').style.display = 'block';
    
  });

  document.getElementById('dismissBtn').addEventListener('click', function() {
    document.getElementById('mask').style.display = 'none';
    document.getElementById('popupContainer').style.display = 'none';
  });
</script>

<?php
include('php/footer.php');
?>

</body>
</html>
