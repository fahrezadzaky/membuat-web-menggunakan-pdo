<?php
require_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userIdDelete = $_POST["userIdDelete"];

    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bindParam(1, $userIdDelete, PDO::PARAM_INT);
    $stmt->execute();

    echo '<script>alert("Account delete successfully.");</script>';
}
?>
