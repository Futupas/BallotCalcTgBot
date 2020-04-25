<?php
    echo "index.php";
    $servername = getenv('db_server');
    $username = getenv('db_username');
    $password = getenv('db_password');
    $dbname = getenv('db_dbname');
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
echo 'Connected successfully';


$sql = 'SELECT `id`, `step` FROM `users`;';
$result = $conn->query($sql);

// echo '  '.json_encode($result).'  ';
// echo json_encode($result);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 'id: ' . $row['id']. ' - key: ' . $row['step'].'<br>';
    }
} else {
    echo '0 results';
}
$conn->close();
?>