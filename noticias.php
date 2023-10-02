<?php


// Exemplo de inserção de dados na tabela "noticias"
$idNoticia = 1;
$categoriaNoticia = "Esportes";
$tituloNoticia = "Título da Notícia";
$dataNoticia = "2023-10-01";
$autorNoticia = "Autor da Notícia";
$imagemNoticia = "noticia.png";

$sqlNoticia = "INSERT INTO noticias (id, categoria, titulo, DataN, autor, imagem) VALUES ($idNoticia, '$categoriaNoticia', '$tituloNoticia', '$dataNoticia', '$autorNoticia', '$imagemNoticia')";

if ($conn->query($sqlNoticia) === TRUE) {
    echo "Dados da notícia inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados da notícia: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
