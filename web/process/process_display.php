<?php
require_once("koneksi.php");

$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo "<p>{$user['username']} - {$user['email']}</p>";
}
?>
