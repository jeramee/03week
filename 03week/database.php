<?php
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop2';
    $username = 'mgs_user';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo 'Connection failed: ' . $error_message;
        include('database_error.php');
        exit();
    }
?>