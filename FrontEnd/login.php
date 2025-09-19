<?php
    session_start();
    require_once("config.php");
    $postdata = http_build_query(
        array( 'api_token' => 'TokendeTeste', 
               'api_usuario' => $_POST['usuario'], 
               'api_senha' => $_POST['senha']) );
    
    $opts = array('http' =>
        array(
            'method' => 'POST',
            'header' => 'Content-type: Application/x-www-form-urlencoded',
            'content' => $postdata ) );

    $context = stream_context_create($opts);
    $result = file_get_contents(
        $servidor . 'APILogin.php',
        false, $context);
        
    $jsonObj = json_decode($result);
    if($jsonObj->logou){
        $_SESSION['chave'] = $jsonObj->chave;
        header("Location: menu.php");
        exit();
    }
    else{
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Pagina principal </title>
    </head>
    <body>
        <h1>Usuario ou senha invalida</h1>
        <br>

    </body>
</html>
<?php
    }
?>