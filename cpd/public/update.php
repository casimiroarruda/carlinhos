<?php
require __DIR__.'/../bootstrap.php';
$person = $manager->getById($_POST['id']);
$person->name = $_POST['name'];
$person->age = $_POST['age'];
$person = $manager->update($person);
header('Location: /');
