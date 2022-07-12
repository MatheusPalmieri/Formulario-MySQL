<?php

    $host = 'Localhost';
    $username = 'root';
    $password = '';
    $dataBase = 'formulario';

    $connection = new mysqli($host, $username, $password, $dataBase);

    // if($connection -> connect_errno){
    //     echo "Error!";
    // } else {
    //     echo "Conexão realizado com sucesso.";
    // }

?>