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

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("UPDATE prod_info SET name = ?, amount = ?, bar_code = ?, price = ? WHERE id = ?");
        $stmt->bind_param("siidi", $nome, $estoque, $codigo, $valor, $id);

        if ($stmt->execute()) {
            echo "Produto atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar produto: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
        header("Location: ../produtos.php");
    } else {
        header("Location: ../erro.php");
    }
} else {
    header("Location: ../erro.php");
}
