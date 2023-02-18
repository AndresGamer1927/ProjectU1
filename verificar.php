<?php
$cliente = ["name2" => "cliente", "passw1" => "123"];
$admin = ["name2" => "administrador", "passw1" => "asd"];
//if (empty($_POST["name1"]) or empty($_POST["passw"])) {
//  header("Location: error1.php");
//} else {

$elcliente = $_POST["name1"];
$password = $_POST["passw"];
print_r($elcliente);
if ($cliente["name2"] == $elcliente && $cliente["passw1"] == $password) {
    header("Location:tienda.php");
    session_start();
    $_SESSION["newUser"] = $cliente["passw1"];
} else if ($admin["name2"] == $elcliente && $admin["passw1"] == $password) {
    header("Location:admin.php");
    session_start();
    $_SESSION["newUsers"] = $admin["passw1"];
} else {
    header("Location:error2.php");
}
//}
