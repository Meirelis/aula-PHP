<?php
    //entrada
    $json = file_get_contents('php://input');
    $reqbody = json_decode($json);
    $login = $reqbody ->login;
    $senha = $reqbody ->senha;

    echo($reqbody);
?>