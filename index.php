<?php
    echo "index.php";
    $servername = getenv('db_server');
$username = getenv('db_username');
$password = getenv('db_password');
$dbname = getenv('db_dbname');
    $conn = new mysqli($servername, $username, $password, $dbname);

    echo "index.php";
?>