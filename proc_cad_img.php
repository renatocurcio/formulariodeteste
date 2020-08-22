<?php

session_start();

$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
    $arquivo = $_FILES['arquivo'];
    for ($cont = 0; $cont < count($arquivo['name']); $cont++) {

        $destino = "imagens/" . $arquivo['name'][$cont];

        if (move_uploaded_file($arquivo['tmp_name'][$cont], $destino)) {
            $_SESSION['msg'] = "<p style='color:green;'>Upload realizado com sucesso</p>";
            header("Location: index.php");
        } else {
            $_SESSION['msg'] = "<p style='color:red;'>Erro ao realizar upload</p>";
            header("Location: index.php");
        }
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao realizar upload</p>";
    header("Location: index.php");
}