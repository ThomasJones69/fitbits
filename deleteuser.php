<?php

session_start();
include 'fitBitsFunctions.php';
echo showHeader();

$id = $_REQUEST['id'];
$sql = "DELETE FROM `tj_clients` WHERE `id` =  '$id';
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "$id";
        }
?>