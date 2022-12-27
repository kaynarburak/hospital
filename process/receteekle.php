<?php
include 'connect.php';
if (isset($_POST['receteInsert'])) {
    $hasta_id = $_POST['hasta_id'];
    $doktor_id = $_POST['doktor_id'];
    $recete_kodu = $_POST['recete_kodu'];

    $stmt = $db->prepare('INSERT INTO "recete"(hasta_id, doktor_id, recete_kodu) VALUES(:hasta_id, :doktor_id, :recete_kodu)');
    $stmt->execute([
        'hasta_id' => $hasta_id,
        'doktor_id' => $doktor_id,
        'recete_kodu' => $recete_kodu
    ]);
    if ($stmt) {
        header("Location: ../recete.php?durum=ok");
    } else {
        header("Location: ../receteAdd.php?durum=no");
    }
}
?>