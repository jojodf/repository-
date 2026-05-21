<?php
// Verbinding met de database
$host = "localhost";
$dbname = "jouw_database";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




if (isset($_GET['id'])) {               /// التحقق من وجود id في الرابط

    
    $id = $_GET['id'];                  // أخذ قيمة id من الرابط

   
    $sql = "SELECT * FROM jouw_tabel WHERE id = ?";               // تجهيز استعلام البحث

    
    $stmt = $conn->prepare($sql);                                 // تحضير الاستعلام

    
    $stmt->execute([$id]);                                          // تنفيذ الاستعلام باستخدام id     

    
    $item = $stmt->fetch(PDO::FETCH_ASSOC);                          // جلب النتيجة

   
    if ($item) {
        echo "<h1>" . $item['titel'] . "</h1>";                       // إذا وجدنا العنصر
        echo "<p>" . $item['beschrijving'] . "</p>";
    } else {
        
        echo "Item niet gevonden.";                                   // العنصر غير موجود
    }

} else {
   
    echo "Geen ID opgegeven.";                                              // لم يتم إرسال id
}