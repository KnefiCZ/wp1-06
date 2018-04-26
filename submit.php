<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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
          echo " a můžeš si koupit alkohol";
        }
        else {
            echo "Ještě si nemůžeš koupit alkohol." ;
        }
      ?>

  </body>
</html>
