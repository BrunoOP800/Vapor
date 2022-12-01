<?php 

require('./modulos/conexao.php');

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$assunto = $_POST['assunto'] ?? null;
$mensagem = $_POST['mensagem'] ?? null;

$query_formulario_suporte = "INSERT INTO mensagem_suporte (nome, email, assunto, mensagem) VALUES ('{$nome}', '{$email}', '{$assunto}', '{$mensagem}')";


mysqli_query($conn, $query_formulario_suporte);


if ($query_formulario_suporte != null) {
   header('location: suporte.php?success=Sua mensagem foi enviada');
}


?>