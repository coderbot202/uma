<?php
require_once __DIR__ . "/../../config/app.php";

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

if (
    !isset($_SESSION['user']) ||
    $_SESSION['user']['role'] !== 'admin'
) {

    header("Location: /uma/login.php?error=Access denied");
    exit();
}
?>