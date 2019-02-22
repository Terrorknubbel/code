<?php
  session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     if(!isset($_GET["abtnr"])){
       echo "Keine Abteilung angegeben!";
       echo "<p><a href='sc_shop_a.php'>Zur Startseite</a></p>";
       echo "</body></html>";
       exit;
     }

     $abtnr = $_GET["abtnr"];

     include "sc_shop.inc.php";

     echo "<h3>$abtname[$abtnr]</h3>";

     echo "<p>Wählen Sie aus:</p>";
     echo "<form action='sc_shop_c.php?abtnr=$abtnr' method='post'>";
      ?>
      <table border="1">
        <tr>
          <td><b>Artikel</b></td>
          <td><b>Nr</b></td>
        </tr>
        <?php
        for($i=0; $i<count($aname[$abtnr]); $i++){
          echo "<tr>";
          echo "<td>" . $aname[$abtnr][$i]. "</td>";
          echo "<td>" . $artnr[$abtnr][$i]. "</td>";
        }
         ?>
      </table>

      <p><input type="submit" value="In den Warenkorb" /></p>
    </form>

    <p><a href="sc_shop_a.php">Zur Startseite</a></p>
   </body>
 </html>
