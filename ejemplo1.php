//primer ejemplo

// Variable edad
edad = 20;

// Condicional if
if ($edad >= 18) {
    echo "Puede entrar";
}

// segundo ejemplo
edad = 15;

if ($edad >= 18) {
    echo "Puede entrar";
} else {
    echo "No puede entrar";
}

//tercer ejemplo

edad = 15;

if ($edad >= 18) {
    echo "Puede entrar";
} else {
    echo "No puede entrar";
}

//cuarto ejemplo

calificacion = 8;

if ($calificacion >= 9) {
    echo "Excelente";
} elseif ($calificacion >= 7) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}

//quinto ejemplo

dia = 3;

switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    default:
        echo "Día no válido";
}

//sexto ejemplo

for ($i = 1; $i <= 5; $i++) {
    echo "Número: ";
}

//septimo ejemplo

i = 1;

while ($i <= 5) {
    echo "Número: "i";
    $i++;
}

//octavo ejemplo

i = 1;

do {
    echo "Número: i";
    $i++;
} while ($i <= 5);

//noveno ejemplo

colores = array("Rojo", "Verde", "Azul");

foreach ($colores as $color) {
    echo $color . "";
}
