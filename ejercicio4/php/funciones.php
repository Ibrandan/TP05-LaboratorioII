<?php
    $ruta = '../css';
    function invertirNumero($num) {
        $centena = ($num/100)%10;
        $decena = ($num/10)%10;
        $unidad = $num % 10;
        $invertido = $unidad . $decena . $centena;
        return $invertido;
    }
?> 