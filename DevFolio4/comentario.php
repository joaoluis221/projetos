<?php

$nome = $_POST['txtnome'];
$turma = $_POST['txtturma'];
$comentario = $_POST['txtcomentario'];

echo "<h1>Comentário</h1>";
echo "<p>Nome: $nome</p>";
echo "<p>Turma: $turma</p>";
echo "<p>Comentario: $comentario</p>";

$sql = "INSERT into comentarios 
     (nome, turma, comentario) 
    VALUES 
     ('$nome', '$turma', '$comentario')";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=comentarios', 'root', '');

$conexao->exec($sql);

echo "<p>Gravado com sucesso</p>";
?>
<li><a class="nav-link scrollto" href="blog-single.php">Comentarios</a></li>