<?php
$host='localhost';
$dbname = 'hastane';
$username = 'postgres';
$password = 'nurburak';

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";

try{
    // create a PostgreSQL database connection
    $db = new PDO($dsn);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($db){
    }
} catch (PDOException $e){
    echo $e->getMessage();
}
?>