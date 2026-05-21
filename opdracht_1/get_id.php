<?php
// Controleer of er een id in de URL staat
if (isset($_GET['id'])) {             /////🤔 الصفحة تسأل أولًا
    $id = $_GET['id'];                     ///📦 تخزين الرقم في صندوق
    echo "Geselecteerd item: " . $id;       ////🗣️ عرض الرقم على الشاشة
} else {
    echo "Geen ID opgegeven.";
}
?>