<?php
include "./classes/Log.php";
$name = $_REQUEST['name'] ?? "";
$firstName = $_REQUEST['firstName'] ?? "";
$mail = $_REQUEST['mail'] ?? "";
$password = $_REQUEST['password'] ?? "";
Log::logWrite("Bonjour $firstName $name dont l'adresse mail est $mail et le mot de passe $password");