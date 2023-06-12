<?php
require_once './partials/conexao.php';

$sql = "SELECT * FROM prod_info";
$result = $mysql->query($sql);

if ($result->num_rows > 0) {
    $products = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $emptyStorage = 'Nenhum produto encontrado :(';
}

//echo json_decode($productName[0]['name'], true);







