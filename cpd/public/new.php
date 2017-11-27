<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"/><title>Carlinhos Vader</title></head>
<body>
<h1>Pessoas: inserir</h1>
<form method="POST" action="/save.php">
<fieldset>
  <legend>Nova pessoa</legend>
  <div>
    <label>Nome</label>
    <input name="name"/>
  </div>
  <div>
    <label>Idade</label>
    <input name="age" type="int" min="0" max="99"/>
  </div>
</fieldset>
<button type="submit">Salvar</button>
<a href="/">cancelar</a>
</form>
</body>
</html>
