<?php
$palabras = array("sol", "dia", "hola", "cielo", "estrellas");

for ($i=0; $i < count($palabras); $i++) { 
    echo 'Posicion'.$i.': '.str_shuffle($palabras[$i]).'<br>';
}

echo "
<form action='validar.php'>
    <label>Valor de la posicion 0</label><input type='text' name='valorPosicion0'><br>
    <label>Valor de la posicion 1</label><input type='text' name='valorPosicion1'><br>
    <label>Valor de la posicion 2</label><input type='text' name='valorPosicion2'><br>
    <button type='submit'>Enviar</button>
</form>
";

?>