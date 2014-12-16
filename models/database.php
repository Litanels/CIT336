<?php
    
$server ='localhost';
$dbname = 'lauranel_users';
$dsn = 'mysql:host='.$server.';dbname='.$dbname;
$username = 'lauranel';
$password = 'CnjN3ls0n@))^';

    try {
        $link = new PDO($dsn, $username, $password);
       
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('errors/db_error.php');
        exit();
    }
?>
