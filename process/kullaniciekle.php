<?php
include 'connect.php';
if (isset($_POST['kullaniciInsert'])) {
    $kullanici_adi = $_POST['kullanici_adi'];
    $kullanici_sifre = $_POST['kullanici_sifre'];
    $kullanici_yetki = $_POST['kullanici_yetki'];

    $stmt = $db->prepare('INSERT INTO "kullanici"(kullanici_adi, kullanici_sifre, kullanici_yetki) VALUES(:kullanici_adi,:kullanici_sifre,:kullanici_yetki)');
    $stmt->execute([
        'kullanici_adi' => $kullanici_adi,
        'kullanici_sifre' => $kullanici_sifre,
        'kullanici_yetki' => $kullanici_yetki
    ]);
    if ($stmt) {
        header("Location: ../kullanici.php?durum=ok");
    } else {
        header("Location: ../kullaniciAdd.php?durum=no");
    }
}
?>