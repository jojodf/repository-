<?php

// Wachtwoord maken en hashen
$wachtwoord = "geheim123";
$hash = password_hash($wachtwoord, PASSWORD_DEFAULT);

// Wachtwoord om te testen
$test = "geheim123";

// Controleren
if (password_verify($test, $hash)) {
    echo "Correct wachtwoord";
} else {
    echo "Onjuist wachtwoord";
}

?>