<?php
include 'connect.php';
if (isset($_POST['randevuInsert'])) {
    $hasta_adi = $_POST['hasta_adi'];
    $hasta_soyadi= $_POST['hasta_soyadi'];
    $hasta_tc = $_POST['hasta_tc'];
    $tarih = $_POST['tarih'];
    $saat = $_POST['saat'];
    $doktor_id = $_POST['doktor_id'];

    $stmt = $db->prepare('INSERT INTO "randevu"(hasta_adi, hasta_soyadi, hasta_tc, tarih, saat, doktor_id,durum) VALUES(:hasta_adi, :hasta_soyadi, :hasta_tc, :tarih, :saat, :doktor_id,true)');
    $stmt->execute([
        'hasta_adi' => $hasta_adi,
        'hasta_soyadi' => $hasta_soyadi,
        'hasta_tc' => $hasta_tc,
        'tarih' => $tarih,
        'saat' => $saat,
        'doktor_id' => $doktor_id
    ]);
    if ($stmt) {
        header("Location: ../doktorlar.php?durum=ok");
    } else {
        header("Location: ../doktorAdd.php?durum=no");
    }
}
?>