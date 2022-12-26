<?php

if(isset($_GET["id"])){
    $id = $_GET["id"];

    include("../config/config.php");

    $sql = "DELETE FROM recipe WHERE id=$id";
    $connection->query($sql);

    header("location: /pages/panel.php");
    exit;
}

?>