<?php
require('../config.php');

$method = strtolower( $_SERVER['REQUEST_METHOD'] );

if( $method === 'post' ) {
    
    $title = filter_input( INPUT_POST, 'title' );
    $body = filter_input( INPUT_POST, 'body' );

    if( $title && $body ) {

        $sql = $pdo->prepare("INSERT INTO notes (title, body) VALUES (:title, :body)");
        $sql->bindValue(':title', $title);
        $sql->bindValue(':body', $body);
        $sql->execute();

        //Buscar o id
        $id = $pdo->lastInsertId();

        $array['result'] = [
            'id' => $id,
            'title' => $title,
            'body' => $body
        ];    
    } else {
        $array['error'] = 'Campos nao enviados';
    }
} else {
    $array['error'] = 'Metodo nao permitido (apenas post)';
}

require('../return.php');
?>