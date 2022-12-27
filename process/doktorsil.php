<?php

include 'connect.php';


{
    $doktor_id = $_GET['doktor_id'];
    try {

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlquery = "DELETE FROM doktor WHERE doktor_id=$doktor_id";
        $db->exec($sqlquery);
        header("Location:../doktorlar.php?durum=ok");
    } catch (PDOException $e) {
        header("Location:../doktorlar.php?durum=no");
    }
}
?><?php
