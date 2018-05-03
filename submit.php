<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>
      <?php
        $age = filter_input(INPUT_POST, 'age') ;
        $jmeno = filter_input(INPUT_POST, 'jmeno') ;
        $primeni = filter_input(INPUT_POST, 'primeni') ;
        ?>
        <?php
        echo "Jmenuješ se $jmeno $primeni a "
         ?>
      <?php
        echo "je ti $age" ;
      ?>
      <?php
        if ($age >= 18) {
          echo " a můžeš si koupit alkohol" ;
        }
        elseif ($age >= 15) {
          echo " a sice máš občanku, ale alohol ti neprodáme bez dozoru." ;
        }
        else {
            echo " a ještě si nemůžeš koupit alkohol." ;
        }
      ?>

  </body>
</html>
