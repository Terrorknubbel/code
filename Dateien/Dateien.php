<html>
<body>
    <?php 
   $ziel = "Y:/";
   $datei = "datei.txt";
   $fh = fopen($datei, "r");
   $read = readfile($datei);

   echo $read;


    ?>

</body>
</html>