<?php
    $ruta = '../css/';
    require_once('../html/header.html');
    echo '<main class="response">';
    if(!empty($_POST['user']) && !empty($_POST['password'])){
        $carpeta = '../txt/';
        $nombre = 'usuarios.txt';
        $user = $_POST['user'];
        $password = $_POST['password'];

        $userEncontrado = false;
        $archivo = fopen($carpeta.$nombre, 'r');
        
        while(!feof($archivo) && $userEncontrado == false){
            $linea = fgets($archivo);
            if ($linea != '') {
                $usuario = explode(';', $linea);
                $txtUser = $usuario[0];
                $txtPassword = $usuario[1];
                if (($user == $txtUser) && ($password == $txtPassword)){
                    header('refresh:0 ; url=listado.php?user=' . $user . '&password=' . $password);
                    $userEncontrado = true;
                }
            }
        }
        fclose($archivo);
        if($userEncontrado == false){
            echo '<h1> Datos Incorrectos </h1>';
        }
    }
    echo '</main>';
?>


<?php
    require_once('../html/footer.html');
?>
