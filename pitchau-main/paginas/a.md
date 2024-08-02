
/*
// Inicie a sessão (se ainda não estiver iniciada)
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pitchau";

// Verifique se o usuário está logado (verifique se o ID está definido na sessão)
if (!isset($_SESSION["user_id"])) {
    // Redirecione o usuário para a página de login ou exiba uma mensagem de erro
    echo "Você não está logado.";
    exit;
}

// Configurações do banco de dados (substitua com suas próprias credenciais)

// Conectar ao servidor de banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// ID do usuário atualmente logado (a partir da $_SESSION)
$user_id = $_SESSION["user_id"];

// Consulta SQL para contar a quantidade de produtos do usuário atual
$sql = "SELECT COUNT(*) as total_produtos FROM Produto WHERE id_vendedor = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Recupere a quantidade de produtos
    $row = $result->fetch_assoc();
    $totalProdutos = $row["total_produtos"];
    
    // Exiba a quantidade de produtos
    
} 
// Fechando a conexão com o banco de dados
$conn->close();
?>
*/