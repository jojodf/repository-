<?php
// Database gegevens
$host = "localhost";
$dbname = "jouw_database";
$username = "root";
$password = "";

// Testdata
$titel = "duur";
$id = 2;


try {
    // Verbinding maken met database
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;dbname=$dbname",
        $username,
        $password
    );

    // Errors tonen
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // UPDATE query
    $sql = "UPDATE jouw_tabel
            SET titel = ?
            WHERE id = ?";

    // Prepared statement
    $stmt = $pdo->prepare($sql);

    // Query uitvoeren
    $stmt->execute([$titel, $id]);

    echo "Record succesvol bijgewerkt!";

} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
}
?>