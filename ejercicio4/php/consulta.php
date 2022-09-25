<?php
    $ruta = '../css';
    require_once ('../html/header.html');

?> 

<main>
    <section class="sueldo">
        <?php
            if(!empty($_POST['legajo'] )) {
                $legajo = $_POST['legajo'];
                $carpeta = '../txt/';
                $nombreArchivo = 'sueldos.txt';
                $bandera = False;

                $archivo = fopen($carpeta.$nombreArchivo, 'r');
                while(!feof($archivo) && $bandera == False) {
                    $linea = fgets($archivo);
                    if($linea != '') {
                        $empleado = explode(';', $linea);
                        $txtLegajo = $empleado[0];
                        $txtApellido = $empleado[1];
                        $txtNombre = $empleado[2];
                        $txtSueldo = $empleado[3];

                        if($legajo == $txtLegajo) {
                            echo '<p> Legajo: '. $txtLegajo . '</p>';
                            echo '<p> Apellido y Nombre: ' . strtoupper($txtApellido) .', '. strtoupper($txtNombre)  .'</p>';
                            echo '<p>Sueldo a cobrar: $'. number_format(floatval($txtSueldo),2,",",".") . '</p>';
                            $bandera = True;
                        }
                    }
                }
                if($bandera == False) {
                    echo '<p> No se encontrado el legajo introducido </p>';
                }
                fclose($archivo);
            }
        ?>
    </section>
</main>

<?php
    require_once ('../html/footer.html');
?>