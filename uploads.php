<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Celke - Upload multiplo</title>
    </head> 
    <body>
        <h1>Upload de Imagem</h1>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="proc_cad_img.php" enctype="multipart/form-data" >
            
            <label for="nome">Imagens: </label>
            <input type="file" name="arquivo[]" multiple="multiple"><br><br>

            <input name="SendCadImg" type="submit" value="Cadastrar">

        </form>

    </body>
</html>