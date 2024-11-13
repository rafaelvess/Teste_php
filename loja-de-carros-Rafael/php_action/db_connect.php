<?php
//Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "loja_carros";

// Definindo a variável correta para a conexão
$connect = mysqli_connect($servername, $username, $password, $db_name);

// Configurando o charset
mysqli_set_charset($connect, "utf8");

// Verificando se a conexão foi bem-sucedida
if(mysqli_connect_error()) :
    echo "Erro de conexão: ". mysqli_connect_error();
    exit(); // Caso a conexão falhe, saímos do script
endif;

// Verificando se a conexão foi bem-sucedida
if (!$connect) { 
    die("Connection failed: " . mysqli_connect_error());
}
?>
