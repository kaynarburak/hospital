<?php
include 'connect.php';
if (isset($_POST['muayeneInsert'])) {
    $doktor_id = $_POST['doktor_id'];
    $hasta_id = $_POST['hasta_id'];
    $tarih = $_POST['tarih'];
    $saat = $_POST['saat'];


    $stmt = $db->prepare('INSERT INTO "muayene"(doktor_id, hasta_id, tarih,saat,randevulumu) VALUES(:doktor_id,:hasta_id,:tarih,:saat,"true")');
    $stmt->execute([
        'doktor_id' => $doktor_id,
        'hasta_id' => $hasta_id,
        'tarih' => $tarih,
        'saat' => $saat
    ]);
    if ($stmt) {
        header("Location: ../muayene.php?durum=ok");
    } else {
        header("Location: ../muayeneAdd.php?durum=no");
    }
}
?>