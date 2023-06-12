<?php

require_once '../../../conexao.php';

$conexao = new Conexao('', 'localhost', 'root', '');
$conexao->setConexao();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $query = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

    $resultado = $conexao->query($query);

    if ($resultado) {
        echo 'Produto inserido com sucesso!';
    } else {
        echo 'Erro ao inserir produto: ' . mysqli_error($conexao->conexao);
    }
}

$conexao->closeConexao();