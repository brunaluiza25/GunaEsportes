<?php
// Configurações de conexão com o banco de dados
$servername = "localhost"; // substitua pelo endereço do servidor do banco de dados
$username = "root"; // substitua pelo nome de usuário do banco de dados
$password = ""; // substitua pela senha do banco de dados
$database = "jif"; // substitua pelo nome do banco de dados

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Exemplo de inserção de dados na tabela "usuario"
$nomeUsuario = "Nome do Usuário";
$emailUsuario = "usuario@email.com";
$senhaUsuario = "senha123";
$imagemUsuario = "imagem.png";
$telefoneUsuario = "123456789";

$sqlUsuario = "INSERT INTO usuario (nome, email, senha, imagem, telefone) VALUES ('$nomeUsuario', '$emailUsuario', '$senhaUsuario', '$imagemUsuario', '$telefoneUsuario')";

if ($conn->query($sqlUsuario) === TRUE) {
    echo "Dados do usuário inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados do usuário: " . $conn->error;
}

?>