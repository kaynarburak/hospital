<?php
include 'connect.php';
/* @var $db PDO */
if (isset($_POST['kullaniciUpdate'])) {

    $ayarkaydet = $db->prepare("UPDATE kullanici SET
                     kullanici_adi=:kullanici_adi,
                     kullanici_sifre=:kullanici_sifre
                                WHERE kullanici_id=:kullanici_id");

    $update = $ayarkaydet->execute(array(
        'kullanici_adi' => $_POST['kullanici_adi'],
        'kullanici_sifre' => $_POST['kullanici_sifre'],
        'kullanici_id' => $_POST['kullanici_id']

    ));
    if ($update) {
        header("Location:../kullanici.php?durum=ok");
    } else {
        header("Location:../kullanici.php?durum=no");

    }


}
?>

