<?php
// Databaseverbinding
$host = "localhost";
$dbname = "jouw_database";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Testdata
    $id = 4;

    // DELETE-query met prepared statement
    $sql = "DELETE FROM jouw_tabel WHERE id = ?";
    $stmt = $pdo->prepare($sql);

    // Query uitvoeren
    $stmt->execute([$id]);

    echo "Record met id $id is verwijderd.";
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
}
?>