<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Carrinho de Compras</title>
</head>
<body>

<?php
  include_once "consultas/flying_bubbles.php";
  header("Location: ../index.php"); // Redirecionar para a página do painel após o login
  if (!isset( $_SESSION["user_id"])) { //Verifica se == Usuário
    header("Location: ../index.php"); // Redirecionar para a página index
  }
  if (isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == true) { //Verifica se == Administrador
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
  $id_produto = $_GET["id_produto"];
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
              menu = '<li><a class="dropdown-item" href="../paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="../paginas/produtos_comprados.php">Prod Comprado</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
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

<div class="container">
    <h1>Produtos a Comprar</h1>
    <a href="carrinho.php">Toque aqui para recarregar seu carrinho</a>

<?php 
include_once "../consultas/flying_bubbles.php";
include_once "../php/processa_compra.php"

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    // Coletar produtos
    $id_produto = $_POST["id_produto"];

elseif (isset($_GET["id_produto"])) {
    $id_produto = $_GET["id_produto"];
    $valor_total = 0;
    //$produtos[] = int;

    $card_produto = recuperar_produto_por_id($id_produto);
    if($card_produto != null){
      echo $card_produto["id"];
      //$valor_total += $card_produto("valor");
      //$produtos[] += $card_produto["id"];
      
      echo '<div class="card">';
      echo '<div class="card-img">';
      $imagem=$card_produto['foto'];
      echo '<img src="' . $imagem . '" class="d-block w-100" alt="...">';
      echo '</div>';
      echo '<div class="card-info">';
      echo '<p class="text-title">' . $card_produto["nome"] . '</p>';
      echo '</div>';
      echo '<div class="card-footer">';
      echo '<span class="text-title">$' . number_format($card_produto["valor"], 2) . '</span>';
      
      echo '<div class="card-button" id="addcart">';

      echo '<svg class="svg-icon" viewBox="0 0 20 20">';
      echo '<path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>';
      echo '<path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>';
      echo '<path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>';
      echo '</svg>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      
    } else {
    echo "Nenhum produto encontrado na tabela com este id.";

        echo '<div id="valor_total">';
        echo '<p>Valor total: $'.$valor_total;
        echo '</div>';

        /*
        <div id="total">
            <p>Total: R$ <span id="total-amount">0.00</span></p>
        </div>
        */
    }
    // Acho que esse Banco tá errado, acho que tinha que ser o ProdutoCompra
    // E o Banco Compra pra finalizar a compra
    $conn = connect($servername, $username, $password, $dbname);
    $sql = 'INSERT INTO Compra(usuario_id, datahora) VALUES ('.$_SESSION["user_id"].', NULL)';
    $result = $conn->query($sql);
    $conn->close();
}
else {
    $conn = connect($servername, $username, $password, $dbname);
    $sql = 'SELECT * FROM Compra';
    $result = $conn->query($sql);
    $array= [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc())
            array_push($array, $row);        
    }
    $conn->close();
    foreach($array as $item)
        echo '<p>'.implode(" ",$item).'</p><br>';
    
    //echo $produtos;
    
    echo '<div id="valor_total">';
    echo '<p>Valor total: $'.$valor_total;
    echo '</div>';
    
//Tem q botar no Banco de comprado        

/* Talvez usar isso p/ apresentar todos os produtos
      foreach($card_produto as $card_produto) {
        echo '<div class="card">';
        echo '<div class="card-img">';
        $imagem=$card_produto['foto'];
        echo '<img src="' . $imagem . '" class="d-block w-100" alt="...">';
        echo '</div>';
        echo '<div class="card-info">';
        echo '<p class="text-title">' . $card_produto["nome"] . '</p>';
        echo '<p class="text-body">' . $card_produto["descricao"] . '</p>';
        echo '</div>';
        echo '<div class="card-footer">';
        echo '<span class="text-title">$' . number_format($card_produto["valor"], 2) . '</span>';
        echo '</div>';
        echo '</div>';
*/

}
?>
</body>
</html>