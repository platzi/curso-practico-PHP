<?php

    print_r($_REQUEST);

    $palabras = array("sol", "dia", "hola");

    if ($_REQUEST["valorPosicion0"] == $palabras[0]) {
      echo "Es correcto el primer valor";
    }
    if ($_REQUEST["valorPosicion1"] == $palabras[1]) {
      echo "Es correcto el segundo valor";
    }
    if ($_REQUEST["valorPosicion2"] == $palabras[2]) {
      echo "Es correcto el tercer valor";
    }

?>