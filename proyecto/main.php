<?php

$nivel1Ordenado = array("Sol", "Dia", "Hola", "Alma", "Miel");
$nivel1Desordenado = array();

$formulario = "<form action='validar.php'>";
$cajaDeTexto = "";
//Desordenar las palabras
for ($i=0; $i < count($nivel1Ordenado); $i++) { 
    $nivel1Desordenado[$i] = str_shuffle($nivel1Ordenado[$i]);
    $cajaDeTexto .=  "<label>Escribe el valor de la posicion ".$i."</label>
    <input type='text' name='valorPosicion".$i."'><br>";
}
$botonEnviar = "<button type='submit'>Enviar</button>";
$finalFormulario = "</form>";

print_r($nivel1Desordenado);
echo $formulario.$cajaDeTexto.$botonEnviar.$finalFormulario;



?>