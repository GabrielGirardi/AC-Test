<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexao
 *
 * @author GG
 */

ini_set('display_errors', false);

$mysql = new mysqli('localhost', 'root', '', 'storage');

if($mysql->connect_errno) {
    echo 'Erro ao tentar conectar, tente novamente...';
    exit();
}

$sql = "SELECT * FROM prod_info";
$result = $mysql->query($sql);

if ($result->num_rows > 0) {
    $products = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $emptyStorage = 'Nenhum produto encontrado :(';
}



