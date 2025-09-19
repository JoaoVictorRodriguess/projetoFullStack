<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Menu de Operações</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                margin: 40px;
                background-color: #f9f9f9;
            }
            h1{
                color: #333;
            }
            ul{
                list-style-type: none;
                padding: 0;
            }
            li{
                margin: 10px 0;
            }
            a{
                text-decoration: none;
                color: #007BFF;
                font-weight: bold;
            }
            a:hover{
                text-decoration: underline;
            }
        </style>
    </head>
<body>
    <h1>Escolha uma das opções: </h1>
    <ul>
        <li><a href="listaPessoas.php">Listar pessoas</a></li>
    </ul>
</body>
</html>