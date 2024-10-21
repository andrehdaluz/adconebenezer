<?php
// Configuração da conexão com o banco de dados
$servername = "localhost:3306";  // Nome do servidor do banco de dados
$username = "root";      // Nome de usuário do banco de dados
$password = "";        // Senha do banco de dados
$dbname = "formulariofamilia"; // Nome do banco de dados

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtém os dados enviados pelo formulário
$nome = $_POST['nome'];
$num_pessoas = $_POST['num_pessoas'];
$empregado = $_POST['empregado'];
$menores_idade = $_POST['menores_idade'];
$matriculados = $_POST['matriculados'];

// Prepara e executa a consulta SQL para inserir os dados na tabela 'familia'
$sql = "INSERT INTO familia (nome, num_pessoas, empregado, menores_idade, matriculados)
        VALUES ('$nome', $num_pessoas, '$empregado', $menores_idade, '$matriculados')";

// Executa a consulta e verifica se os dados foram inseridos com sucesso
if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
