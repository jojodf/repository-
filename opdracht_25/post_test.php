<!-- post_test.php -->

<!DOCTYPE html>
<html lang="nl">
<head>
   
    <title>POST Test</title>
</head>
<body>

<h1>POST formulier test</h1>

<form method="POST">
    <label for="titel">Titel:</label>
    <input type="text" name="titel" >

    <button type="submit">Versturen</button>
</form>

<hr>

<h2>Inhoud van $_POST</h2>

<pre>
<?php
print_r($_POST);
?>
</pre>

<h2>Waarde van titel</h2>

<?php
if (isset($_POST['titel'])) {
    echo $_POST['titel'];
}
?>

</body>
</html>