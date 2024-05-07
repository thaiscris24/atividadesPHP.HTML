<?php
    session_start();

    $variavel = "Primeira variavel";

    $_SESSION["login"] = array(
        "usuario"   => "rodescobar@gmail.com",
        "nome"      => "Rodrigo Escobar"
    );

    $_SESSION["carrinho"] = array(
        0 => array(
            "id_produto" => 5,
            "qtd"        => 10,
            "valor"      => 40
        ),
        1 => array(
            "id_produto" => 5987,
            "qtd"        => 1.5,
            "valor"      => 10
        ),
     )

?>