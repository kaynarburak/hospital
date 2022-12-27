<?php
include 'connect.php';
if (isset($_POST['hastaInsert'])) {
    $adi = $_POST['adi'];
    $soyadi = $_POST['soyadi'];
    $tcno = $_POST['tcno'];
    $d_yeri = $_POST['d_yeri'];
    $d_tarihi = $_POST['d_tarihi'];
    $ana_adi = $_POST['ana_adi'];
    $baba_adi = $_POST['baba_adi'];
    $cep_numarasi = $_POST['cep_numarasi'];


    $stmt = $db->prepare('INSERT INTO "hasta"(adi, soyadi, tcno, d_yeri, d_tarihi, ana_adi, baba_adi, cep_numarasi) VALUES(:adi, :soyadi, :tcno, :d_yeri, :d_tarihi, :ana_adi, :baba_adi, :cep_numarasi)');
    $stmt->execute([
        'adi' => $adi,
        'soyadi' => $soyadi,
        'tcno' => $tcno,
        'd_yeri' => $d_yeri,
        'd_tarihi' => $d_tarihi,
        'ana_adi' => $ana_adi,
        'baba_adi' => $baba_adi,
        'cep_numarasi' => $cep_numarasi
    ]);
    if ($stmt) {
        header("Location: ../hasta.php?durum=ok");
    } else {
        header("Location: ../hastaAdd.php?durum=no");
    }
}
?>