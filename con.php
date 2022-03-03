<?php
//This is the login page
global $conn;
try
{
    $conn = new mysqli('mysql-zack242.alwaysdata.net','zack242','0661150322','zack242_bagaway');
}
catch(Exception $e)
{
            die('Erreur : '.$e->getMessage());
}
?>
