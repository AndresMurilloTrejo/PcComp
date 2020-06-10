<?php
require_once "./conexion.php";

$email = $_POST['email'];
$mail = "SELECT * FROM usuarios WHERE email='$email'";
$result = mysqli_query($conexion, $mail);
$comprobar_mail = mysqli_num_rows($result);
// var_dump($comprobar_mail);

header('Content-Type: application/json');

if ($comprobar_mail > 0) {
    $data = ['result' => 'si'];
    echo json_encode($data);
} else {
    $data = ['result' => 'no'];
    echo json_encode($data);
}
