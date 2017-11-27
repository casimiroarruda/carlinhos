<?php
require __DIR__.'/../bootstrap.php';
$person = $manager->getById($_GET['id']);
?><!DOCTYPE html>
<html>
<head><meta charset="UTF-8"/><title>Carlinhos Vader</title></head>
<body>
<h1>Pessoas: editar #<?=$person->id;?></h1>
<form method="POST" action="/update.php">
<fieldset>
  <legend>Editar pessoa</legend>
  <div>
    <label>Nome</label>
    <input name="name" value="<?=$person->name;?>"/>
  </div>
  <div>
    <label>Idade</label>
    <input name="age" type="number" min="0" max="99" value="<?=$person->age;?>"/>
  </div>
  <input type="hidden" name="id" value="<?=$person->id;?>"/>
</fieldset>
<button type="submit">Salvar</button>
<a href="/delete.php?id=<?=$person->id;?>">excluir</a> | 
<a href="/">cancelar</a>

</form>
</body>
</html>
