<?php
// Start session safely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * ENV SETTINGS
 * You can later move these to real environment variables
 * (Apache/Nginx hosting friendly)
 */
$DB_HOST = getenv('DB_HOST') ?: 'localhost';
$DB_NAME = getenv('DB_NAME') ?: 'atm';
$DB_USER = getenv('DB_USER') ?: 'root';
$DB_PASS = getenv('DB_PASS') ?: '';

try {
    $dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4";

    $pdo = new PDO($dsn, $DB_USER, $DB_PASS, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // errors
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch style
        PDO::ATTR_EMULATE_PREPARES   => false,                  // real prepares
    ]);

} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>
    