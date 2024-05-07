<?php

    session_start();

    if (!isset($_SESSION["login"]["usuario"]))
    {
        echo "Você precisa estar logado";
        exit;
    }

    echo "<h3>Seja bem vindo " .
        $_SESSION["login"]["usuario"] .
        "</h3>";
?>