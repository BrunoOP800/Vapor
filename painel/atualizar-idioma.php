<?php 

require('./modulos/top-menu.php'); 

$nome_idioma = $_POST['idiom'] ?? null;
$id_idioma = $_POST['id'] ?? null;

$consultar_idioma = "SELECT nome FROM idioma WHERE nome = '{$nome_idioma}' and id = '{$id_idioma}'";

$idioma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_idioma));


$atualizar_idioma = "UPDATE idioma set nome = '{$nome_idioma}' WHERE id ='{$id_idioma}';";


if ($idioma == null) {
    mysqli_query($conn, $atualizar_idioma);
    header("location: idiomas.php");
} else {
    header("location: editar-idioma.php?error= Esta plataforma já existe em nosso cadastro!&id={$id_idioma}");
}

?>