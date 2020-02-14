<?php
session_start();
require "sql/config.php";
require "sql/functions.php";


$db = connectDatabase($dsn);
$id = $_POST['id'];

$sql = "DELETE FROM tech WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$id]);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

?>