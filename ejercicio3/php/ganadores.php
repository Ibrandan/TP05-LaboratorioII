<?php
    $ruta = '../css';
    require_once ('../html/header.html');
    $carpeta = '../txt/';
    $nombreArchivo = 'puntaje.txt';
?>
<main>
    <h1>Ganadores de Black Jack</h1>
    <?php 
        $archivo = fopen($carpeta.$nombreArchivo, 'r');
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            if ($linea != '') {
                $jugador = explode(';', $linea);
                $txtNombre = $jugador[0];
                $txtPuntaje = $jugador[1];
                if ($txtPuntaje == 21) {
                    echo '<p class="ganador">' . $txtNombre . '</p>';
                }	
            }
        }

    ?>
</main>

<?php
    require_once ('../html/footer.html');
?>