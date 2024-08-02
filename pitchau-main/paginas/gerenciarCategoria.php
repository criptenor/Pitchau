<?php
  session_start();
  include_once "../consultas/flying_bubbles.php";
  if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
      header("Location: ../index.php"); // Redirecionar para a página do painel após o login
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gerenciar Categoria</title>
<link rel="stylesheet" href="../css/visualizacaoUser.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/registre.css?v=0.8">
  <style>
     .popup{
    visibility: hidden;
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
        visibility: hidden;
        

        margin: auto;
        margin-top: -40%;
        
        position: fixed;
        width: 300px;
        height: 400px;
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
      .card_email{
        margin-top:-20%;
      }
      .card_altera_senha{
        margin-top: -30%;

      }
      .card_apagar_conta{
        margin-top: -30%;
      }
      #cookieSvg {
        margin:auto;
      }
      .buttonContainer{
        justify-content: center;
        text-align: center;
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
      .form-box {
        max-width: 300px;
        background: #f1f7fe;
        overflow: hidden;
        border-radius: 16px;
        color: #010101;
      }
      
      .form {
        position: relative;
        display: flex;
        flex-direction: column;
        padding: 32px 24px 24px;
        gap: 16px;
        text-align: center;
      }
      
      /*Form text*/
      .title {
        font-weight: bold;
        font-size: 1.6rem;
      }
      
      .subtitle {
        font-size: 1rem;
        color: #666;
      }
      
      /*Inputs box*/
      .form-container {
        overflow: hidden;
        border-radius: 8px;
        background-color: #fff;
        margin: 1rem 0 .5rem;
        width: 100%;
      }
      
      .input {
        background: none;
        border: 1px solid gray;
        margin: 2%;
        outline: 0;
        height: 40px;
        width: 95%;
        /* border-bottom: 1px solid #eee; */
        font-size: .9rem;
        border-radius: 15px;
      }
      
      .form-section {
        padding: 16px;
        font-size: .85rem;
        background-color: #e0ecfb;
        box-shadow: rgb(0 0 0 / 8%) 0 -1px;
      }
      
      .form-section a {
        font-weight: bold;
        color: #0066ff;
        transition: color .3s ease;
      }
      
      .form-section a:hover {
        color: #005ce6;
        text-decoration: underline;
      }
      
      /*Button*/
      .form button {
        background-color: #0066ff;
        color: #fff;
        border: 0;
        border-radius: 24px;
        padding: 10px 16px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color .3s ease;
      }
      
      .form button:hover {
        background-color: #005ce6;
      }
      
      /* Note that you only needs to edit the config to customize the button! */

    .plusButton {
      /* Config start */
      --plus_sideLength: 2.5rem;
      --plus_topRightTriangleSideLength: 0.9rem;
      /* Config end */
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px solid white;
      width: var(--plus_sideLength);
      height: var(--plus_sideLength);
      background-color: #000000;
      overflow: hidden;
    }

    .plusButton::before {
      position: absolute;
      content: "";
      top: 0;
      right: 0;
      width: 0;
      height: 0;
      border-width: 0 var(--plus_topRightTriangleSideLength) var(--plus_topRightTriangleSideLength) 0;
      border-style: solid;
      border-color: #0066ff #0066ff transparent #0066ff;
      transition-timing-function: ease-in-out;
      transition-duration: 0.2s;
    }

    .plusButton:hover {
      cursor: pointer;
    }

    .plusButton:hover::before {
      --plus_topRightTriangleSideLength: calc(var(--plus_sideLength) * 2);
    }

    .plusButton:focus-visible::before {
      --plus_topRightTriangleSideLength: calc(var(--plus_sideLength) * 2);
    }

    .plusButton>.plusIcon {
      fill: white;
      width: calc(var(--plus_sideLength) * 0.7);
      height: calc(var(--plus_sideLength) * 0.7);
      z-index: 1;
      transition-timing-function: ease-in-out;
      transition-duration: 0.2s;
    }

    .plusButton:hover>.plusIcon {
      fill: black;
      transform: rotate(180deg);
    }

    .plusButton:focus-visible>.plusIcon {
      fill: black;
      transform: rotate(180deg);
    }
    .input-container{
      display:flex;
    }
    .card_altera_senha{
      margin-left: -27%;
        margin-top: -11%;
    }
    .centralizar{
      margin:auto;
      padding:10px;
    }
    .form{
      max-height: 100vh;
      border:0.5px solid blue;
    }
    .alinhamento{
      margin-top:-45vh;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"><img src="../img/PITCHAU.png" alt=""></a>
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
            var menu = '';
            menu = '<li><a class="dropdown-item" href="perfil.php">Perfil</a></li><li><a class="dropdown-item" href="cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="visualizacaoUser.php">Gerenciar Usuários</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="divin">
  <div class="form">
    <div class="title">
      Listagem de Categorias
    </div>
    <div tabindex="0" class="plusButton" onclick="exibirElementosSenha()">
      <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
        <g mask="url(#mask0_21_345)">
          <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
        </g>
      </svg>
    </div>
    <table class="user-list">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
      </tr>
      <?php
        $categorias = getcategoria();
        if (!empty($categorias)) {
          foreach ($categorias as $categoria) {
            echo '<td>' . $categoria['id'];
            echo '<td>' . $categoria['nome'];
            echo '<td>';
            echo '<button class="edit-button" onclick="editCategoria('.$categoria['id'] .')">Editar</button>';
            echo '<button class="edit-button" onclick="deleteCategoria('.$categoria['id'].')">Excluir</button>';
            echo '</td>';
            echo '</tr>';
          }
        } else {
          echo '<tr><td colspan="6">Nenhuma categoria encontrada.</td></tr>';
        }
      ?>
    </table>
  </div>
</div>

<form id="edit-form" method="post" action="../php/processar_editar_categoria.php" style="display: none;">
  <input type="hidden" name="action" value="edit">
  <input type="hidden" name="id" id="edit-id">
  <input type="hidden" name="new_name" id="edit-new-name">
</form>

<form id="delete-form" method="post" action="../php/processar_editar_categoria.php" style="display: none;">
  <input type="hidden" name="action" value="delete">
  <input type="hidden" name="id" id="delete-id">
</form>


<div class="popup">
</div>
  <div class="alinhamento">
    <div class="card card_altera_senha" style="margin-left: 40%;">
      <p class="cookieHeading"> Criando Nova Categoria</p>
      <p class="cookieDescription">Criando uma nova categoria<br>você será redirecionado para <a href="../paginas/cadastro_produto.php">Criar Produto</a></p>
      <form class="form" method="POST" action="../php/processar_categoria.php">
      
        <div class="form-container">

          <input type="text" name="nome" class="input" placeholder="nome:">
        
        </div>
        <div class="buttonContainer">
        
          <button class="declineButton confirm-delete" type="submmit"  >Sim</button>
        </div>
      </form>
      <button class="acceptButton" onclick="esconderElementosSenha()">Não</button>
    </div>
  </div>


<script>
  function editCategoria(categoriaId) {
      var newName = prompt('Por favor, insira o novo nome da categoria:');
      if (newName) {
          document.getElementById('edit-id').value = categoriaId;
          document.getElementById('edit-new-name').value = newName;
          document.getElementById('edit-form').submit();
      }
  }

  function deleteCategoria(categoriaId) {
      if (confirm('Tem certeza que deseja excluir esta categoria?')) {
          document.getElementById('delete-id').value = categoriaId;
          document.getElementById('delete-form').submit();
      }
  }

  function esconderElementosSenha() {
    // Seleciona todos os elementos com a classe "popup" e "card"
    var elementosPopup = document.querySelectorAll('.popup');
    var elementosCard = document.querySelectorAll('.card_altera_senha');

    // Define a propriedade visibility para "hidden"
    elementosPopup.forEach(function(elemento) {
      elemento.style.visibility = 'hidden';
    });

    elementosCard.forEach(function(elemento) {
      elemento.style.visibility = 'hidden';
    });
  }

  function exibirElementosSenha() {
    // Seleciona todos os elementos com a classe "popup" e "card"
    var elementosPopup = document.querySelectorAll('.popup');
    var elementosCard = document.querySelectorAll('.card_altera_senha');

    // Define a propriedade visibility para "visible"
    elementosPopup.forEach(function(elemento) {
      elemento.style.visibility = 'visible';
    });

    elementosCard.forEach(function(elemento) {
      elemento.style.visibility = 'visible';
    });
  }
</script>
</body>
</html>