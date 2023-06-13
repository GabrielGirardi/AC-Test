<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "storage";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

if (isset($_POST['produto'])) {
    $produto = $_POST['produto'];

    // $sql = "DELETE FROM prod_info WHERE name = '$produto'";
    $sql = "UPDATE prod_info SET active = 0 WHERE name = '$produto'";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "missing_param";
}

$conn->close();

