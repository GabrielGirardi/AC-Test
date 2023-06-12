<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $estoque = $_POST["estoque"];
    $codigo = $_POST["code"];
    $valor = $_POST["valor"];

    if (!empty($nome) && !empty($estoque) && !empty($codigo) && !empty($valor)) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "storage";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM prod_info";
        $result = $conn->query($sql);
        $products = $result->fetch_all(MYSQLI_ASSOC);
        $id = count($products) + 1;
        $active = 1;

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO prod_info (name, amount, bar_code, price, id, active) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("siidii",$nome, $estoque, $codigo, $valor, $id, $active);

        if ($stmt->execute()) {
            echo "Produto inserido com sucesso!";
        } else {
            echo "Erro ao inserir produto: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
        header("Location: ../produtos.php");
    } else {
        echo "Existem campos vazios ou incorretos...";
    }
} else {
    echo "Não foi possível processar o formulário!";
}

