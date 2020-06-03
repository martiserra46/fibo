<?php
require_once("db_config.php");
$mysqli = new mysqli($host, $user, $password, $db);
$email = $_POST["email"];

if(!($stmt = $mysqli->prepare("INSERT INTO newsletter_companies VALUES(NULL, ?)"))) error();
if(!$stmt->bind_param("s", $email)) error();
if(!$stmt->execute()) error();

echo "success";

function error(){
    echo "error";
    die();
}
?>