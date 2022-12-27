<?php

include 'connect.php';


{
    $hasta_id = $_GET['hasta_id'];
    try {

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlquery = "DELETE FROM hasta WHERE hasta_id=$hasta_id";
        $db->exec($sqlquery);
        header("Location:../hasta.php?durum=ok");
    } catch (PDOException $e) {
        header("Location:../hasta.php?durum=no");
    }
}
?><?php
