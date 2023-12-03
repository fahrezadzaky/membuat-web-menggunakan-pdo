<?php
require_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchKeyword = $_POST["searchKeyword"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username LIKE :keyword");
    $stmt->bindValue(':keyword', "%$searchKeyword%", PDO::PARAM_STR);
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($users) {
        foreach ($users as $user) {
            echo "<p>{$user['username']} - {$user['email']}</p>";
        }
    } else {
        echo "Tidak ada hasil ditemukan.";
    }
    $stmt->closeCursor();
}
?>
