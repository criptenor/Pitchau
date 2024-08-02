<?php
  session_start();
  include_once "../consultas/flying_bubbles.php";

  if (!isset( $_SESSION["user_id"])) { //Verifica se == Usuário
    header("Location: ../index.php"); // Redirecionar para a página index
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
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
  *{
    font-family: 'Open Sans', sans-serif;
  }
</style>
  <style>
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
    .card__wrapper{
      margin-top: 4%;
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
      margin-top: 180px;
      font-weight: 900;
      font-size: 18px;
      color: var(--main-color);
    }
    
    .card__subtitle {
      margin-top: 10px;
      font-weight: 600;
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
      width: 50px;
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
  </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Meu Perfil</title>
  
</head>

<body>
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
              menu = '<li><a class="dropdown-item" href="login.php">Fazer Login</a></li><li><a class="dropdown-item" href="cadastro.php">Se Cadastrar</a></li>';
            }
            else if(menulevel == '2'){
              menu = '<li><a class="dropdown-item" href="perfil.php">Perfil</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            else if(menulevel == '3'){
              menu = '<li><a class="dropdown-item" href="perfil.php">Perfil</a></li><li><a class="dropdown-item" href="cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="visualizacaoUser.php">Gerenciar Usuários</a></li><li><a class="dropdown-item" href="gerenciarCategoria.php">Gerenciar Categorias</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
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
// Configurações de conexão com o banco de dados
$host = 'localhost';
$usuario = 'root';
$senha = '';
$bancoDados = 'Pitchau';

// Conecta ao banco de dados
$conn = new mysqli($host, $usuario, $senha, $bancoDados);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtém a estrutura das tabelas do banco de dados
$result = $conn->query("SHOW TABLES");
$tables = array();

while ($row = $result->fetch_row()) {
    $tables[] = $row[0];
}

// Gera o script SQL
$sqlScript = "";

foreach ($tables as $table) {
    $result = $conn->query("SHOW CREATE TABLE $table");
    $row = $result->fetch_row();
    $sqlScript .= $row[1] . ";\n\n";
}
echo $sqlScript;

// Fecha a conexão
$conn->close();

// Nome do arquivo SQL de saída (com caminho absoluto)
$nomeArquivoSQL = 'backup.sql';

// Escreve o script SQL no arquivo
file_put_contents($nomeArquivoSQL, $sqlScript);

echo "Backup do banco de dados criado com sucesso. Consulte o arquivo $nomeArquivoSQL.";
?>

</body>
<?php
include('../php/footer.php');
?>
</html>