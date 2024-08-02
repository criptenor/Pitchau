<?php
  session_start();
  include_once "../consultas/flying_bubbles.php";
  if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
      header("Location: ../index.php"); // Redirecionar para a página do painel após o login
  }
?>
<!DOCTYPE html>
<html lang="en">
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
        margin:auto;s
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
      margin-top:-90vh;
    }
  </style>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
  *{
    font-family: 'Open Sans', sans-serif;
  }
</style>

<head>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cadastro_produto.css">
  <title>Cadastro de Produto</title>
</head>
<body style="display:inherit;"> 
<?php
  include_once "../consultas/flying_bubbles.php";
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
              menu = '<li><a class="dropdown-item" href="perfil.php">Perfil</a></li><li><a class="dropdown-item" href="produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="visualizacaoUser.php">Gerenciar Usuários</a></li><li><a class="dropdown-item" href="gerenciarCategoria.php">Gerenciar Categorias</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php
include_once "../consultas/flying_bubbles.php";
$conn = connect();

// Função para gerar um nome único para a imagem
function generateUniqueFileName($originalName) {
  $extension = pathinfo($originalName, PATHINFO_EXTENSION);
  $uniqueName = uniqid() . "." . $extension;
  return $uniqueName;
}

// Buscar categorias do banco de dados
$sql = "SELECT id, nome FROM Categoria";
$resultado = $conn->query($sql);
$categorias = [];
if ($resultado->num_rows > 0) {
  while ($row = $resultado->fetch_assoc()) {
    $categorias[] = $row;
  }
}

?>
  
<form class="form" style="margin:auto;" action="" method="post" enctype="multipart/form-data">
  <!-- ... (seu formulário) ... -->
  <form class="form" action="" method="post" enctype="multipart/form-data">
    <div class="centralizar">
      <div class="container">
        <div class="header" id="imagePreviewContainer">
          <img src="../img/upload.png" alt="Imagem padrão" style="width:250px;height:200px">
          
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
                imagePreviewContainer.innerHTML = '<img src="../img/upload.png" alt="Imagem padrão" style="width:250px; height:200px;">';
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
      <div class="input-container">
        <input type="text" name="nome" placeholder="Nome">
        <span></span>
      </div>
      <div class="input-container">
        <input type="text" name="desc" placeholder="Descrição">
        <span></span>
      </div>
      <div class="input-container">
        <input type="number" name="valor" placeholder="Valor">
        <span></span>
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

      <div tabindex="0" class="plusButton" onclick="exibirElementosSenha()">
        <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
          <g mask="url(#mask0_21_345)">
            <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
          </g>
        </svg>
      </div>
      
      <div class="input-container">
        <input type="number" name="quantidade" placeholder="Quantidade">
        <span></span>
      </div>

      <button class="submit" name="submit">Cadastrar</button>
    </div>
  </form>
  
  <?php 
  if (isset($_POST['submit'])) {
    // Verifica se um arquivo foi enviado
    if (isset($_FILES['foto'])) {
      $arquivo = $_FILES['foto'];

      // Verifica se não houve erro no upload
      if ($arquivo['error'] === 0) {
        // Gera um nome único para a imagem
        $fotoNome = generateUniqueFileName($arquivo['name']);
        
        // Define o caminho para a pasta de destino
        $pastaDestino = "../img/img_produto/";
        $fotoCaminho = $pastaDestino . $fotoNome;

        // Move o arquivo para a pasta de destino
        move_uploaded_file($arquivo['tmp_name'], $fotoCaminho);

        // Restante do seu código para inserir os dados no banco de dados
        $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
        $descricao = mysqli_real_escape_string($conn, $_POST["desc"]);
        $valor = mysqli_real_escape_string($conn, $_POST["valor"]);
        $categoria = mysqli_real_escape_string($conn, $_POST["categoria"]);
        $quantidade = mysqli_real_escape_string($conn, $_POST["quantidade"]);

        $sql = "INSERT INTO Produto (nome, descricao, foto, valor, categoria_id, quantidade_estoque) VALUES ('$nome', '$descricao', '$fotoNome', $valor, $categoria, $quantidade)";

        if ($conn->query($sql) === TRUE) {
          header("Location: ../index.php");
        } else {
          echo "Erro ao inserir no banco de dados: " . $conn->error;
        }
      } else {
        echo "Erro no upload de imagem: " . $arquivo['error'];
        // Lidar com erro de upload de imagem, se necessário
      }
    } else {
      echo "Nenhum arquivo enviado.";
    }
  }
  ?>

  <div class="popup">
  
  </div>
  <div class="alinhamento">
    <div class="card card_altera_senha" style="margin-left: 40%;">
    <svg xml:space="preserve" viewBox="0 0 122.88 122.25" y="0px" x="0px" id="cookieSvg" version="1.1"><g><path d="M101.77,49.38c2.09,3.1,4.37,5.11,6.86,5.78c2.45,0.66,5.32,0.06,8.7-2.01c1.36-0.84,3.14-0.41,3.97,0.95 c0.28,0.46,0.42,0.96,0.43,1.47c0.13,1.4,0.21,2.82,0.24,4.26c0.03,1.46,0.02,2.91-0.05,4.35h0v0c0,0.13-0.01,0.26-0.03,0.38 c-0.91,16.72-8.47,31.51-20,41.93c-11.55,10.44-27.06,16.49-43.82,15.69v0.01h0c-0.13,0-0.26-0.01-0.38-0.03 c-16.72-0.91-31.51-8.47-41.93-20C5.31,90.61-0.73,75.1,0.07,58.34H0.07v0c0-0.13,0.01-0.26,0.03-0.38 C1,41.22,8.81,26.35,20.57,15.87C32.34,5.37,48.09-0.73,64.85,0.07V0.07h0c1.6,0,2.89,1.29,2.89,2.89c0,0.4-0.08,0.78-0.23,1.12 c-1.17,3.81-1.25,7.34-0.27,10.14c0.89,2.54,2.7,4.51,5.41,5.52c1.44,0.54,2.2,2.1,1.74,3.55l0.01,0 c-1.83,5.89-1.87,11.08-0.52,15.26c0.82,2.53,2.14,4.69,3.88,6.4c1.74,1.72,3.9,3,6.39,3.78c4.04,1.26,8.94,1.18,14.31-0.55 C99.73,47.78,101.08,48.3,101.77,49.38L101.77,49.38z M59.28,57.86c2.77,0,5.01,2.24,5.01,5.01c0,2.77-2.24,5.01-5.01,5.01 c-2.77,0-5.01-2.24-5.01-5.01C54.27,60.1,56.52,57.86,59.28,57.86L59.28,57.86z M37.56,78.49c3.37,0,6.11,2.73,6.11,6.11 s-2.73,6.11-6.11,6.11s-6.11-2.73-6.11-6.11S34.18,78.49,37.56,78.49L37.56,78.49z M50.72,31.75c2.65,0,4.79,2.14,4.79,4.79 c0,2.65-2.14,4.79-4.79,4.79c-2.65,0-4.79-2.14-4.79-4.79C45.93,33.89,48.08,31.75,50.72,31.75L50.72,31.75z M119.3,32.4 c1.98,0,3.58,1.6,3.58,3.58c0,1.98-1.6,3.58-3.58,3.58s-3.58-1.6-3.58-3.58C115.71,34.01,117.32,32.4,119.3,32.4L119.3,32.4z M93.62,22.91c2.98,0,5.39,2.41,5.39,5.39c0,2.98-2.41,5.39-5.39,5.39c-2.98,0-5.39-2.41-5.39-5.39 C88.23,25.33,90.64,22.91,93.62,22.91L93.62,22.91z M97.79,0.59c3.19,0,5.78,2.59,5.78,5.78c0,3.19-2.59,5.78-5.78,5.78 c-3.19,0-5.78-2.59-5.78-5.78C92.02,3.17,94.6,0.59,97.79,0.59L97.79,0.59z M76.73,80.63c4.43,0,8.03,3.59,8.03,8.03 c0,4.43-3.59,8.03-8.03,8.03s-8.03-3.59-8.03-8.03C68.7,84.22,72.29,80.63,76.73,80.63L76.73,80.63z M31.91,46.78 c4.8,0,8.69,3.89,8.69,8.69c0,4.8-3.89,8.69-8.69,8.69s-8.69-3.89-8.69-8.69C23.22,50.68,27.11,46.78,31.91,46.78L31.91,46.78z M107.13,60.74c-3.39-0.91-6.35-3.14-8.95-6.48c-5.78,1.52-11.16,1.41-15.76-0.02c-3.37-1.05-6.32-2.81-8.71-5.18 c-2.39-2.37-4.21-5.32-5.32-8.75c-1.51-4.66-1.69-10.2-0.18-16.32c-3.1-1.8-5.25-4.53-6.42-7.88c-1.06-3.05-1.28-6.59-0.61-10.35 C47.27,5.95,34.3,11.36,24.41,20.18C13.74,29.69,6.66,43.15,5.84,58.29l0,0.05v0h0l-0.01,0.13v0C5.07,73.72,10.55,87.82,20.02,98.3 c9.44,10.44,22.84,17.29,38,18.1l0.05,0h0v0l0.13,0.01h0c15.24,0.77,29.35-4.71,39.83-14.19c10.44-9.44,17.29-22.84,18.1-38l0-0.05 v0h0l0.01-0.13v0c0.07-1.34,0.09-2.64,0.06-3.91C112.98,61.34,109.96,61.51,107.13,60.74L107.13,60.74z M116.15,64.04L116.15,64.04 L116.15,64.04L116.15,64.04z M58.21,116.42L58.21,116.42L58.21,116.42L58.21,116.42z"></path></g></svg>
      <p class="cookieHeading"> Criando Nova Categoria</p>
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
</form>

<script>
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