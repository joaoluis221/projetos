<?php

$nome = $_POST['txtnome'];
$turma = $_POST['txtturma'];
$comentario = $_POST['txtcomentario'];

echo "<h1>Comentário</h1>";
echo "<p>Nome: $nome</p>";

$sql = "INSERT into comentarios 
     (nome, turma, comentario) 
    VALUES 
     ('$nome', '$turma', '$comentario')";

$conexao = new PDO('mysql:host=192.168.15.2;dbname=pessoal', 'root', '');

$conexao->exec($sql);

echo "<p>Gravado com sucesso</p>";
?>