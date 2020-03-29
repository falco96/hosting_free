<?php
    define('DB_NAME', 'hosting');
    define('DB_USER', 'free_developer');
    define('DB_PASSWORD', '7owr7n@xZ0wzQtGm');
    define('DB_HOST', 'localhost:3306');

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Impossibile connettersi al database " . mysqli_error());
?>