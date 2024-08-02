
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/registro_login.css">
</head>
<body>
  
<?php
  // Resto do código...
  include_once "../consultas/flying_bubbles.php";
  session_start();
  if (isset( $_SESSION["user_id"])) { //Verifica se == Usuário
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
              menu = '<li><a class="dropdown-item" href="../paginas/login.php">Fazer Login</a>';
            }
            else if(menulevel == '2'){
              menu = '<li><a class="dropdown-item" href="../paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="../paginas/carrinho.php">Carrinho</a></li><li><a class="dropdown-item" href="../paginas/produtos_comprados.php">Prod Comprado</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            else if(menulevel == '3'){
              menu = '<li><a class="dropdown-item" href="../paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="../paginas/cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="../paginas/produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="../paginas/visualizacaoUser.php">Gerenciar Usuários</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
        </li>
      </ul>      
    </div>
  </div>
</nav>

<div style="position: relative; text-align: center; background-color: beige;" class= "divin">
<form action="../php/processar_registro.php" method="POST" class="form" style="background-color: rgba(255, 255, 255, 0.7); padding: 30px; border-radius: 20px; position: relative; border: solid 2px blue; margin: auto;">
  <p class="title">Registrar</p>
  <p class="message">Registre-se agora e tenha acesso completo ao nosso aplicativo.</p>
  <div class="flex">
    <label>
      <input required="" placeholder="" type="text" class="input" name="firstname">
      <span>Nome</span>
    </label>

    <label>
      <input required="" placeholder="" type="text" class="input" name="lastname">
      <span>Sobrenome</span>
    </label>
  </div>  
            
  <label>
      <input required="" placeholder="" type="email" class="input" name="email">
      <span>Email</span>
  </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="password">
        <span>Senha</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input" name="confirm_password">
        <span>Confirmar senha</span>
    </label>
    <button class="submit">Enviar</button>
    <p class="signin">Já tem uma conta? <a href="login.php">Entrar</a> </p>
</form>
</div>
</body>
<?php
include('../php/footer.php');
?>
</html>
