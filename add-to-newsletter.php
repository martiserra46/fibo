<?php
require_once("db_config.php");
$mysqli = new mysqli($host, $user, $password, $db);
$email = $_POST["email"];
$success;
if($mysqli->query("INSERT INTO newsletter_companies VALUES(NULL, '$email')")){
    $success = true;
} else {
    $success = false;
}
echo $success ? "true" : "false";
?>