<?php
    $ruta = '../css/';
    require_once('../html/header.html');

    $carpeta = '../txt/';
    $nombreArchivo = 'puntaje.txt';
    $jugador = $_POST['nombre'];

    $carta1 = mt_rand(1,13);
    $carta2 = mt_rand(1,13);
    $carta3 = mt_rand(1,13);

    $figura2 = mt_rand(1,4);
    $figura1 = mt_rand(1,4);
    $figura3 = mt_rand(1,4);

    $total = $carta1 + $carta2 + $carta3;
    if($total == 21) {
        $mensaje = "GANADOR!";
    }
    else {
        $mensaje = "PUNTOS OBTENIDOS: ".$total;
    }
    switch ($carta1) {
        case 1:
            $carta1 = 'A';
            break;

        case 11:
            $carta1 = 'J';
            break;

        case 12:
            $carta1 = 'Q';
            break;

        case 13:
            $carta1 = 'K';
            break;
    }
    switch ($carta2) {
        case 1:
            $carta2 = 'A';
            break;

        case 11:
            $carta2 = 'J';
            break;

        case 12:
            $carta2 = 'Q';
            break;

        case 13:
            $carta2 = 'K';
            break;
    }
    switch ($carta3) {
        case 1:
            $carta3 = 'A';
            break;

        case 11:
            $carta3 = 'J';
            break;

        case 12:
            $carta3 = 'Q';
            break;

        case 13:
            $carta3 = 'K';
            break;
    }
    switch ($figura1) {
        case 1:
            $figura1 = 'bi bi-suit-club';
            break;

        case 2:
            $figura1 = 'bi bi-suit-diamond';
            break;

        case 3:
            $figura1 = 'bi bi-suit-heart"';
            break;

        case 4:
            $figura1 = 'bi bi-suit-spade';
            break;
    }
    switch ($figura2) {
        case 1:
            $figura2 = 'bi bi-suit-club';
            break;

        case 2:
            $figura2 = 'bi bi-suit-diamond';
            break;

        case 3:
            $figura2 = 'bi bi-suit-heart';
            break;

        case 4:
            $figura2 = 'bi bi-suit-spade';
            break;
    }
    switch ($figura3) {
        case 1:
            $figura3 = 'bi bi-suit-club';
            break;

        case 2:
            $figura3 = 'bi bi-suit-diamond';
            break;

        case 3:
            $figura3 = 'bi bi-suit-heart';
            break;

        case 4:
            $figura3 = 'bi bi-suit-spade';
            break;
    }

    if(!file_exists($carpeta)){
        mkdir($carpeta);
    }


    $datosJugador = [$jugador, $total];
    $linea = implode(";", $datosJugador);
    $archivo = fopen($carpeta.$nombreArchivo, 'a');
    fputs($archivo, $linea . PHP_EOL);
    fclose($archivo);
?>
<body>
<main>
    <section class="carta__contenedor">
        <article class="carta">
            <p><?php echo $carta1; ?></p>
            <section><i class="<?php echo $figura1; ?>"></i></section>
            <p><?php echo $carta1; ?></p>
        </article>
        <article class="carta">
            <p><?php echo $carta2; ?></p>
            <section><i class="<?php echo $figura2; ?>"></i></section>
            <p><?php echo $carta2; ?></p>
        </article>
        <article class="carta">
            <p><?php echo $carta3; ?></p>
            <section><i class="<?php echo $figura3; ?>"></i></section>
            <p><?php echo $carta3; ?></p>
        </article>
    </section>
    <h2 class="resultado"><?php echo $mensaje;?></h2>
</main>
</body>
<?php
    require_once('../html/footer.html');
?>