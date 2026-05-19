<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../controllers/authControllers.php";

ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 0);

$auth = new AuthController($conn);

$action = $_GET['action'] ?? '';

switch ($action) {

    case 'register':
        $auth->register();
        break;

    case 'login':
        $auth->login();
        break;

    case 'forgot':
        $auth->forgotPassword();
        break;

    case 'reset':
        $auth->resetPassword();
        break;

    case 'logout':
        $auth->logout();
        break;

    default:
        echo "Invalid action";
}