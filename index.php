<?php
/* Ejercicio 1 = Crea dos variables cuyos nombres sean pais y continente e imprimir por pantalla; Poner en un comentario que tipo de dato tienen. 
*Muestra por pantalla que tipos de datos son.
*/

$pais = "España";  // String
$continente = "Europa";  // String

echo "<h1>$pais - $continente</h1>";

echo gettype($pais) . "<br/>";
echo gettype($continente) . "<br/>";



// Ejercicio 2 = Escribir un script en php que nos muestre por pantalla todos los numeros pares que hay desde el 1 al 100;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br/>";
    }
}


/* Ejercicio 3 = Escribe un programa que imprima por pantalla los cuadrados un numero multiplicado por si mismo de los 40 primeros numeros naturales;
* PD: Utilizar bucle while;
*/

/*  Hecho con bucle while;
$contador = 0;
while($contador <= 40){
    $cuadrado = $contador*$contador;
    echo "<h3>El cuadrado de $contador es $cuadrado</h3>";
    $contador++;
}
*/


//Hecho con bucle for;
/*
for ($contador = 0; $contador <= 40; $contador++) {
    $cuadrado = $contador * $contador;
    echo "<h3>El cuadrado de $contador es $cuadrado</h3>";
    $contador++;
}

*/

/* Ejercicio 4 = Recoger dos numeros por la url (Parametros GET) y hacer todas las
* operaciones basicas de una calculadora (suma, resta, multiplcación y división)
*de esos dos numeros;
*/
/*
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "Suma: " . ($numero1 + $numero2) . "<br/>";
    echo "Resta: " . ($numero1 - $numero2) . "<br/>";
    echo "Multiplicación: " . ($numero1 * $numero2) . "<br/>";
    echo "División: " . ($numero1 / $numero2) . "<br/>";
} else {
    echo "<h1>Introduce  correctamente los valores por la url</h1>";
};
*/


/* Ejercicio 5 = Hacer un programa que muestre todos los numeros entre dos numeros
* que nos lleguen por la url($_GET);
*/

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        for ($i = $numero1; $i <= $numero2; $i++) {
            echo "<h4>$i</h4>";
        }
    }else{
        echo "<h3>El numero 1 debe ser menor que el numero 2</h3>";
    }
} else {
    echo "<h1>Los parametros get no existen</h1>";
}



/*  Ejercico 5 = 


*/