<?php
    $ruta = 'css';
    require_once('html/header.html');
    require('php/funciones.php');
?>

<main>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Numero</th>    
                    <th>Invertido</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($i=0; $i < 10; $i++) { 
                        echo '<tr>';
                        $num = mt_rand(100, 999);
                        echo '<td>'. $num . '</td>';
                        echo '<td>'. invertirNumero($num) . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </section>
</main>

<?php
    require_once('html/footer.html');
?>