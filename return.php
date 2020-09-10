<?php
//Permitindo requisições AJAX externas, para minha API
header("Access-Control-Allow-Origin: http://resttesttest.com");
//Permitindo os métodos de requisição para a minha API
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
//O tipo de retorno da minha API sempre será no formato JSON
header("Content-Type: apllication/json");

echo json_encode($array);

exit;
?>