<?php

include 'connect.php';


{
    $kullanici_id = $_GET['kullanici_id'];
    try {

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlquery = "DELETE FROM kullanici WHERE kullanici_id=$kullanici_id";
        $db->exec($sqlquery);
        header("Location:../kullanici.php?durum=ok");
    } catch (PDOException $e) {
        header("Location:../kullanici.php?durum=no");
    }
}
?>