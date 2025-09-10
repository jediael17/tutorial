<?php
require("connector.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST['nome']) && !empty($_POST['sobrenome'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];

        try {
            $query = "INSERT INTO tblpessoa (nome, sobrenome) VALUES (:nome, :sobrenome)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                ':nome' => $nome,
                ':sobrenome' => $sobrenome
            ]);

            header("Location: index.php?criado=sucesso");
            exit;

        } catch (PDOException $e) {
            // Tratar erro (opcional: logar em arquivo)
            echo "Erro ao inserir: " . $e->getMessage();
        }
    } else {
        echo "Preencha todos os campos.";
    }
}
