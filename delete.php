<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuário excluído com sucesso!";
        header('Location: index.php');
    } else {
        echo "Erro ao excluir o usuário: " . $conn->error;
    }
}
?>