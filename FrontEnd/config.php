<?php
    $servidor = 'http://localhost/primeiroProjeto/BackEnd/';
    $chave = 'ChavedeSegurança'; // mesma que no back-end
    $token = hash('sha256', $chave . date('Y-m-d'));
?>