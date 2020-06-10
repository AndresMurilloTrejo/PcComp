<?php
require_once "config.php";
$conexion = new mysqli("localhost", "root", "", "pccomp");

$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;

try {

    $pdo = new PDO($servidor, USUARIO, PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (PDOException $e) {}
