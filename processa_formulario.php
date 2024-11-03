<?php
$servername = "servidor_remoto.com";
$username = "usuario";
$password = "senha";
$dbname = "nome_do_banco";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="dados.csv"');
$output = fopen('php://output', 'w');
fputcsv($output, array('Coluna1', 'Coluna2', 'Coluna3'));

$query = "SELECT coluna1, coluna2, coluna3 FROM sua_tabela";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }
}
fclose($output);
$conn->close();
?>
