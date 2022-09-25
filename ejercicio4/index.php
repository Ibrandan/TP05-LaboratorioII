<?php
    $ruta = 'css';
    require_once('html/header.html');
?>

<main>
    <section class="form__contenedor">
        <form action="php/consulta.php" method="post">
            <section>
                <label for="lbl-legajo">Ingrese Numero de Legajo</label>
                <input type="number" name="legajo" id="lbl-legajo" required>
            </section>
            <input type="submit" class="btn" value="Consultar">
        </form>
    </section>
</main>

<?php
    require_once('html/footer.html');
?>