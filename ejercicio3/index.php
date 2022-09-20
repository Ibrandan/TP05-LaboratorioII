<?php
    $ruta = 'css';
    require_once('html/header.html');
?>

<main>
    <section>
        <form action="php/funciones.php" method="post">
            <section class="number">
                <label for="lbl-monto">Deposito inicial</label>
                <input type="number" name="monto" step="0.01" id="lbl-monto" min="1" required>
            </section>
            <section class="radio">
                <legend>Plazo</legend>
                <section>
                    <input type="radio" name="plazo" value="30" id="">
                    <label for="">30 días</label>
                </section>

                <section>
                    <input type="radio" name="plazo" value="45" id="">
                    <label for="">45 días</label>
                </section>

                <section>
                    <input type="radio" name="plazo" value="60" id="">
                    <label for="">60 días</label>
                    </section>
                <section>
                    <input type="radio" name="plazo" value="90" id="">                
                    <label for="">90 días</label>
                </section>

            </section>
            <input type="submit" class="btn" value="Simular">
        </form>
    </section>
</main>

<?php
    require_once('html/footer.html');
?>