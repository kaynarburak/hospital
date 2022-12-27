<?php

include 'connect.php';


{
    $randevu_id = $_GET['randevu_id'];
    try {

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlquery = "update randevu set durum=true where randevu_id=$randevu_id";
        $db->exec($sqlquery);
        header("Location:../randevu.php?durum=ok");
    } catch (PDOException $e) {
        header("Location:../randevu.php?durum=no");
    }
}
?>