<?php
    const DIAS30 = 1.75;
    const DIAS45 = 1.8;
    const DIAS60 = 1.9;
    const DIAS90 = 2.1;

    $ruta = '../css';

    require_once('../html/header.html');
    
    if(!empty($_POST['monto']) && (!empty($_POST['plazo']))){
        function calcularIntereses($monto, $plazo){
            switch ($plazo) {
                case '30':
                    $ganancia = $monto * ((75/100) * 30 / 365);
                    $total = floatval($_POST['monto']) + $ganancia;
                    echo '<p> Intereses generados: $' . number_format( $ganancia, 2, ",", ".") . '</p>';
                    echo '<p> Monto total a cobrar $' . number_format( $total, 2, ",", "."). '</p>';
                    break;
                case '45':
                    $ganancia = $monto * ((80/100) * 45 / 365);
                    $total = floatval($_POST['monto']) + $ganancia;
                    echo '<p> Intereses generados: $' . number_format( $ganancia, 2, ",", ".") . '</p>';
                    echo '<p> Monto total a cobrar $' . number_format( $total, 2, ",", "."). '</p>';
                    break;
                case '60':
                    $ganancia = $monto * ((90/100) * 60 / 365);
                    $total = floatval($_POST['monto']) + $ganancia;
                    echo '<p> Intereses generados: $' . number_format( $ganancia, 2, ",", ".") . '</p>';
                    echo '<p> Monto total a cobrar $' . number_format( $total, 2, ",", "."). '</p>';
                    break;
                case '90':
                    $ganancia = $monto * ((110/100) * 90 / 365);
                    $total = floatval($_POST['monto']) + $ganancia;
                    echo '<p> Intereses generados: $' . number_format( $ganancia, 2, ",", ".") . '</p>';
                    echo '<p> Monto total a cobrar $' . number_format( $total, 2, ",", "."). '</p>';
                    break;
            }
        }   
    }
?>
<main>
    <section class="response">
        <h2>Simulacion de Plazo fijo</h2>
        <?php
            echo '<p> Monto Disponible: $' . number_format(floatval($_POST['monto']), 2, ",", ".") . '</p>';
            echo '<p> Plazo: ' . $_POST['plazo'] . ' días</p>';
            echo calcularIntereses($_POST['monto'], $_POST['plazo']);
        ?>
    </section>
</main>

<?php
    require_once('../html/footer.html');

?>