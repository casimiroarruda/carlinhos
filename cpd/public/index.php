<?php
require __DIR__.'/../bootstrap.php';
?><!DOCTYPE html>
<html>
<head><meta charset="UTF-8"/><title>Carlinhos Vader</title></head>
<body>
<h1>Pessoas</h1>
<a href="/new.php">Novo</a>
<ul>
<?php foreach ($manager->getAll() as $person) : ?>
    <li><a href="/edit.php?id=<?=$person->id;?>"><?=$person->name;?></a></li>
<?php endforeach ?>
</ul>
</body>
</html>
