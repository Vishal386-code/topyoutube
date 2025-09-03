<?php
// Load .env file
$envPath = __DIR__ . "/../.env";
if (!file_exists($envPath)) {
    die(".env file not found!");
}

$lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
    if (strpos(trim($line), '#') === 0) continue;
    list($name, $value) = explode("=", $line, 2);
    putenv(trim($name) . "=" . trim($value));
}

// Get env variables
$host = getenv("DB_HOST");
$db   = getenv("DB_NAME");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");

// PDO Connection
try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("DB Connection Failed: " . $e->getMessage());
}
