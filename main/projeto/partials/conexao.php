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

//ini_set('display_errors', false);

$mysql = new mysqli('localhost', 'root', '', 'storage');

if($mysql->connect_errno) {
    echo "Falha na conexão: {$mysql->connect_errno}";
    exit();
}


