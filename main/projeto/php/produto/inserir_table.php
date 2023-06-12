<?php

require_once '../../../conexao.php';

$conexao = new Conexao('nome_do_banco', 'localhost', 'usuario', 'senha');
$conexao->setConexao();

// Criação da tabela de produtos
$query = "CREATE TABLE IF NOT EXISTS produtos (
            nome VARCHAR(100) NOT NULL,
            estoque INT AUTO_INCREMENT PRIMARY KEY,
            barras INT AUTO_INCREMENT PRIMARY KEY,
            preco DECIMAL(10, 2) NOT NULL
          )";

$resultado = $conexao->query($query);

if ($resultado) {
    echo 'Tabela de produtos criada com sucesso!';
} else {
    echo 'Erro ao criar tabela: ' . mysqli_error($conexao->conexao);
}

$conexao->closeConexao();