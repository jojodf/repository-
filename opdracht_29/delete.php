<?php
$host = "localhost";
$dbname = "jouw_database";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM jouw_tabel WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    header("Location: index.php"); 
    exit;

} catch (PDOException $e) {
    die("Fout: " . $e->getMessage());
}