<?php
//Variáveis de db
$db_host = 'localhost';
$db_name = 'devnotes';
$db_user = 'root';
$db_pass = '';

//Conexão com db
$pdo = new PDO( "mysql:dbname=$db_name;host:$db_host", $db_user, $db_pass );

//Variável da minha API
$array = [
    'error'=> '',
    'result' => []
];
?>