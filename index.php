<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Osobní profil</h1>

<form action="submit.php" method="post">
  <label for="jmeno">Jméno</label>
  <input id="jmeno" name='jmeno' placeholder="Jan" /> <br />
  <label for="primeni">Příjmění</label>
  <input id="primeni" name='primeni' placeholder="Novák" /> <br />
  <label for="age">Věk</label>
  <input id="age" min="1" max="100" type="number" name='age'  /> <hr />

    <input name='submit' type="submit" value="Odeslat" />


  </body>
</html>
