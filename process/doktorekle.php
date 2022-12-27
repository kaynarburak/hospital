<?php
include 'connect.php';
if (isset($_POST['doktorInsert'])) {
    $d_adi = $_POST['d_adi'];
    $d_soyadi= $_POST['d_soyadi'];
    $d_tcno = $_POST['d_tcno'];
    $d_dtarihi = $_POST['d_dtarihi'];
    $d_ana_adi = $_POST['d_ana_adi'];
    $d_baba_adi = $_POST['d_baba_adi'];
    $d_cep_numara = $_POST['d_cep_numara'];
    $bolum = $_POST['bolum'];

    $stmt = $db->prepare('INSERT INTO "doktor"(d_adi, d_soyadi, d_tcno, d_dtarihi, d_ana_adi, d_baba_adi, d_cep_numara, bolum) VALUES(:d_adi, :d_soyadi, :d_tcno, :d_dtarihi, :d_ana_adi, :d_baba_adi, :d_cep_numara, :bolum)');
    $stmt->execute([
        'd_adi' => $d_adi,
        'd_soyadi' => $d_soyadi,
        'd_tcno' => $d_tcno,
        'd_dtarihi' => $d_dtarihi,
        'd_ana_adi' => $d_ana_adi,
        'd_baba_adi' => $d_baba_adi,
        'd_cep_numara' => $d_cep_numara,
        'bolum' => $bolum
    ]);
    if ($stmt) {
        header("Location: ../doktorlar.php?durum=ok");
    } else {
        header("Location: ../doktorAdd.php?durum=no");
    }
}
?>