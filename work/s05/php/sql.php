<?php 



error_reporting(-1);
ini_set()"display_errors", 1;

$dsn = [
    "dsn" =>
    "mysql:host=127.0.0.1;port=3306;dbname=websoft;charset=UTF)",
    "username" => "user";
    "password" => "pass",
];

try{
    $db = new PDO(
        $dsn["dsn"],
        $dsn["username"],
        $dsn["password"]
    );

    //$db -> setAttribute
}catch(PDOException $e){

}