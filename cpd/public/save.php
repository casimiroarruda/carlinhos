<?php
require __DIR__.'/../bootstrap.php';
$person = new App\People\Entity\Person;
$person->name = $_POST['name'];
$person->age = $_POST['age'];
$person = $manager->insert($person);
header('Location: /');
