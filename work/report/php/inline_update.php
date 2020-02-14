<?php
session_start();
require "sql/config.php";
require "sql/functions.php";

$id    = $_POST['id_val'] ?? null;
$label = $_POST['label_val'] ?? null;
$type  = $_POST['type_val'] ?? null;

var_dump($_GET);
var_dump($_POST);

$db = connectDatabase($dsn);

$sql = "UPDATE tech SET label = ?, type = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$label, $type, $id]);
    header("Location: " . $_SERVER['PHP_SELF'] . "?item=$id");
    exit;    
?>