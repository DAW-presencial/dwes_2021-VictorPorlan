<?php
class SigmaClass {
    public $ligma = 'Hola';
}

$clase = new SigmaClass();
$clase2 = new SigmaClass();
$clase->balls = 'probando';
$clase3 = new SigmaClass();


echo(var_dump($clase));
echo('<br>');
echo(var_dump($clase2));
echo('<br>');
echo(var_dump($clase3));
//En esta prueba se puede ver que simplemente se añade al objeto al que se lo hemos asignado. 
//No se le añade ni al resto de objetos de la misma clase que han sido isntanciados ni antes ni despues de añadirle la propiedad.
?>

