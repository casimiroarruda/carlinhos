<?php
require __DIR__.'/../bootstrap.php';
$person = $manager->getById($_GET['id']);
$manager->purge($person);
header('Location: /');
