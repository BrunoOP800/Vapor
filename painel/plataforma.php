<?php 

require('./modulos/top-menu.php'); 

$nome_plataforma = $_POST['idiom'] ?? null;
$id_plataforma = $_POST['id'] ?? null;

$consultar_plataforma = "SELECT nome FROM plataforma WHERE nome = '{$nome_plataforma}' and id = '{$id_plataforma}'";

$plataforma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_plataforma));


$atualizar_plataforma = "UPDATE idioma set nome = '{$nome_plataforma}' WHERE id='{$id_plataforma}';";

if ($plataforma == null) {
    mysqli_query($conn, $atualizar_plataforma);
    header("location: atualizar-plataforma.php");
} else {
    header("location: editar-idioma.php?error= Este idioma já existe em nosso cadastro!&id={$id_plataforma}");
}

?>

<!DOCTYPE html>

<body>
    <p>aaaaaaaaaaa</p>
</body>
</html>