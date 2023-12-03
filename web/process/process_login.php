<?php
require_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST["usernameOrEmail"];
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE (username = :username OR email = :email)");
    $stmt->bindParam(':username', $usernameOrEmail, PDO::PARAM_STR);
    $stmt->bindParam(':email', $usernameOrEmail, PDO::PARAM_STR);
    $stmt->execute();
    var_dump($stmt->errorInfo());

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($user);

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        
        header("Location: ../index.php");
        exit();
    } else {
        echo '<script>alert("login gagal");</script>';
        header("Location: ../login.php?error=1");
        exit();
    }
}
?>
