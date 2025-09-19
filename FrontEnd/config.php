<?php
    $servidor = 'http://localhost/primeiroProjeto/BackEnd/';
    $token = hash('sha256', $_SESSION['chave'] . date('Y-m-d'));
?>