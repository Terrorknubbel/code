<html>
<body>

<?php 

$ziel = "C:/xampp/htdocs/wMacher/";
$zieldatei = $ziel . basename($_FILES["hochladen"]["name"]);
if(move_uploaded_file($_FILES["hochladen"]["tmp_name"], $zieldatei)) {
    echo "Datei erfolgreich hochgeladen";
}
else {
    echo "Fehler.";
}

?>
</body>
</html>