<?php
require('./modulos/top-menu.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Novo_idoma</title>
</head>
<body>
<div id="novo_idioma">
        <form action="./cadastrar-idioma.php" method="post">
            <label for="nome">Novo Ididoma</label>
            <input type="text" id="idioma" name="idioma" >
            <button id="salvar">SALVAR</button>
        </form>
    </div>

</body>
</html>





