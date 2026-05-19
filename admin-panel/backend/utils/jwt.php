<?php

require_once __DIR__ . "/../../config/env.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$secret_key = $_ENV['JWT_SECRET'];

function generateJWT($user) {
    global $secret_key;

    $payload = [
        "iss" => "localhost",
        "iat" => time(),
        "exp" => time() + (60 * 60), // 1 hour
        "data" => [
            "id" => $user['id'],
            "email" => $user['email'],
            "role" => $user['role']
        ]
    ];

    return JWT::encode($payload, $secret_key, 'HS256');
}

function verifyJWT($token) {
    global $secret_key;

    return JWT::decode($token, new Key($secret_key, 'HS256'));
}
