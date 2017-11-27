<?php
require __DIR__.'/vendor/autoload.php';
if (file_exists(__DIR__.'/.env')) {
    (new Symfony\Component\Dotenv\Dotenv)->load(__DIR__.'/.env');
}
$pdo = new \PDO(
    getenv('DB_DSN'),
    getenv('DB_USER'),
    getenv('DB_PW')
);
$manager = new App\People\Service\PersonManager($pdo);
