<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3> Webshop </h3>
    <p> Abteilung <br/>
    <?php
    include "sc_shop.inc.php";

    for ($i=0; $i < count($abtname) ; $i++) {
      echo "<a href='sc_shop_b.php?abtnr=$i'>$abtname[$i]</a><br/>";
    };
     ?>
   </p>
   <p><a href="sc_shop_c.php">Zum Warenkorb</a></p>
  </body>
</html>
