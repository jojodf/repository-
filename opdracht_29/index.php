<?php
$host = "localhost";
$dbname = "jouw_database";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM jouw_tabel";
    $stmt = $pdo->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Fout: " . $e->getMessage());
}
?>

<?php foreach ($items as $item): ?>
    <p>
        <strong><?= htmlspecialchars($item['titel']) ?></strong><br>
        <?= htmlspecialchars($item['beschrijving']) ?><br>

        <a href="delete.php?id=<?= $item['id'] ?>">
            Verwijderen
        </a>
    </p>
<?php endforeach; ?>