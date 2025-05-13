<?php
 
    include "conexap.php";

    $sql = "select * from administrador
    where login = :login and senha = :senha";

    $login - $_REQUET["login"];
    $senha - $_REQUET["senha"];

    $result = $conexao->prepare($sql);
    $resul->bindVale(":login", $login);
    $resul->bindVale(":senha", $senha);
    $result->execute();

    if ( $linha = $result >fetch(PDO::FETCH_ASSOC) )
    {
        echo "Login realixado com sucesso !";
    }
    else
    {
       session_start();
       $_SESSION["erro"] = "Login e Senha incorretos !";

       header("location: login.php");
    }


?>