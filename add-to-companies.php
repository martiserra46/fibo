<?php
require_once("db_config.php");
$mysqli = new mysqli($host, $user, $password, $db);
$mysqli->set_charset("utf8");

$comercial_name = $_POST["comercial-name"];
$person_to_contact = $_POST["person-to-contact"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$postal_code = $_POST["postal-code"];
$sector = $_POST["sector"];
$get_periodic_data = isset($_POST["get-periodic-data"]) ? 1 : 0;

if(!($stmt = $mysqli->prepare("INSERT INTO company VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)"))) error();
if(!$stmt->bind_param("ssssssi", $comercial_name, $person_to_contact, $email, $phone, $postal_code, $sector, $get_periodic_data)) error();
if(!$stmt->execute()) error();

echo "success";

function error(){
    echo "error";
    die();
}
?>