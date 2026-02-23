<?php
// Se verifica si los datos se envian o no
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Se reciben los datos
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];

    // se muestran los datos
    echo "<h2>Datos recibidos</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Edad: " . $edad . "<br>";

    // condicionales
    if ($edad >= 18) {
        echo "Eres mayor de edad";
    }
    else {
        echo "Eres menor de edad";
    }
}
?>

