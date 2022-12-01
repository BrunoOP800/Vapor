<?php 

require('./painel/conexao.php');

$id_formulario_suporte = $_GET['id'] ?? null;


$query_exluir_mensagem = "SELECT nome, email, assunto, mensagem FROM mensagem_suporte WHERE id = '{$id_formulario_suporte}';";

// $query_exluir_mensagem = "SELECT nome, email, assunto, mensagem FROM mensagem_suporte WHERE id = '{$id_formulario_suporte}';";

mysqli_query($conn, $query_idioma); 

header('location:suporte.php');

?>
