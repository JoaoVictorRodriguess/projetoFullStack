<?php
    define( 'HOST', 'localhost' ); //A função define cria uma variável passando um valor para amesma.
    define( 'USER', 'root' ); 
    define( 'PASS', '' );
    define( 'DB', 'db_primeiro_banco' );

    $charset = 'utf8';
    $conn = mysqli_connect( HOST, USER, PASS, DB )
                or die ( 'Erro de conexão' );

/*Para se conectar ao banco de dados precisamos dequatro campos:
• HostName: nome ou IP do computador onde esta o bancode dados;
• User: usuário do banco de dados;
• Password: senha do usuário do banco de dados;
• DataBase: nome do banco de dados.*/

?>