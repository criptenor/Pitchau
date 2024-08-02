<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registro_login.css">
    <title>CodigoEmail</title>
</head>
<body>
<?php
  session_start();
  include_once "../consultas/flying_bubbles.php";

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
              menu = '<li><a class="dropdown-item" href="../paginas/login.php">Fazer Login</a></li><li><a class="dropdown-item" href="../paginas/cadastro.php">Se Cadastrar</a></li>';
            }
            else if(menulevel == '2'){
              menu = '<li><a class="dropdown-item" href="../paginas/carrinho.php">Carrinho</a></li><li><a class="dropdown-item" href="../paginas/produtos_comprados.php">Prod Comprado</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            else if(menulevel == '3'){
              menu = '<li><a class="dropdown-item" href="../paginas/cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="../paginas/produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="../paginas/visualizacaoUser.php">Gerenciar Usuários</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
        </li>
      </ul>      
    </div>
  </div>
</nav>

<!-- form action não existente ainda -->
<div style="position: relative; text-align: center; background-color: beige;" class= "divin">
<form action="../php/processar_recebe_codigo_email.php" method="POST" class="form" style="background-color: rgba(255, 255, 255, 0.7); padding: 30px; border-radius: 20px; position: relative; border: solid 2px blue; margin: auto;">
  <p class="title">Alterar Senha</p>
  <p>Solicitação para Redefinição de Senha</p>
  <p>Insira o código de alteração de senha</p>

  <label>
    <input required="" placeholder="" type="password" class="input" name="email_code" id="email_code">
    <span>Código</span>
  </label>
  
  <button class="submit">Enviar</button>

  <script>
    $compara_cod_email = document.getElementById("email_code").value;
    $recebe_cod_email = document.getElementById("cod_email").value;

    if $compara_cod_email != $recebe_cod_email{
      echo 'Código incorreto<br>Reenvie o email caso ainda queira alterar sua senha';
      header("Location: ../index.php"); // Redirecionar para a página index
      break
    }
    else:
      <?php
        function nova_senha_criptografada(){
        function random_string($length) {
          $random_pin = random_bytes($length);
          $random_pin = base64_encode($random_pin);
          $random_pin = str_replace(["+", "/", "="], "", $random_pin);
          $random_pin = substr($random_pin, 0, $length);
          return $random_pin;
        }
        $sql = "ALTER TABLE Usuario (senha) VALUES ('$random_pin')";

        
        // Uso de prepared statement para evitar SQL injection
        $stmt = $conn->prepare("INSERT INTO Usuario(senha) VALUES (?,)");
        $stmt->bind_param("sss", $usuario, $email, password_hash($random_pin, PASSWORD_DEFAULT));

        /*if ($stmt->execute()) {
            header("Location: ../paginas/login.php");
            exit;
        } else {
            echo "Erro ao registrar: " . $stmt->error;
        }*/

        // Fechar a conexão com o banco de dados
        $stmt->close();
        $conn->close();

        return $random_pin;
        };
      ?>

      echo 'Não compartilhe com ninguém!'
      echo 'Sua nova senha para alteração de senha é:'
      echo '$random_pin'
      echo '<p><a href="paginas/login.php">Login</a></p>'
  </script>
</form>
</div>
</body>
    
<?php
include('../php/footer.php');
?>

</html>
