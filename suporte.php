<?php
$titulo_pagina = "Suporte";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php require('./modulos/top-menu.php');

// $id_mensagem = $_GET['id'];

// $query_mensagem = "INSERT nome, email, assunto, mensagem FROM mensagem_suporte = {$id_mensagem}";
// $mensagem = mysqli_query($conn, $query_mensagem);

// $query_categoria = "SELECT nome FROM categoria WHERE id = {$id_categoria}";
// $categoria = mysqli_fetch_assoc(mysqli_query($conn, $query_categoria));
?>

<body>
    <div id="body-container">
        <?php require('./modulos/side-menu.php') ?>
        <div id="content">
            <div id="header">SUPORTE</div>
        </div>
        <form action="./suporte-backend.php" method="POST" id="formulario-suporte">
            <div id="formulario-mensagem">
                <div id="nome-formulario">
                    <label for="nome">Nome</label>
                    <br>
                    <input type="text" id="nome" name="nome" required><br>
                </div>
                <div id="email">
                    <label for="email">E-mail</label><br>
                    <input type="email" id="email" name="email" required><br>
                </div>
                <select name="assunto" required>
                    <option value="sugestao">Sugestão</option>
                    <option value="criticas">Crítica</option>
                    <option value="elogio">Elogio</option>
                    <option value="duvida">Dúvida</option>
                    <option value="suporte">Suporte</option>
                    <option value="outros">Outros</option>
                </select> 
                <div id="mensagem">
                    <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                </div>
                <button type="submit">Envio</button>
                
            </div>




            <!-- <label for="assunto">Assunto</label><br>
                <input type="text" id="assunto" name="assunto" required> -->
            <!-- <label>Assunto da mensagem</label> <br> -->
            <br>


            

            
        </form>


</body>

</html>
</body>
</div>
</body>


</html>