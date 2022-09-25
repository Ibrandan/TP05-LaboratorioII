<?php
    $ruta = 'css';
    require_once('html/header.html');
?>

<main>
    <section>
        <form action="php/juego.php" method="POST">
            <section>
                <label for="lbl-nombre">Nombre:</label>
                <input type="text" name="nombre" id="lbl-nombre" required>
            </section>
            <input type="submit" class="btn" value="Jugar">
        </form>
    </section>
    <a href="php/ganadores.php">Ver Ganadores</a>
</main>

<?php
    require_once('html/footer.html');
?>