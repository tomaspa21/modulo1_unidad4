<?php
function manejador_error($nivel, $mensaje){
    switch($nivel){
        case 2:
            $str = "Advertencia";
            break;
        case 8:
            $str = "Notificacion";
            break;
        default:
            $str = "Error";
    }
    echo "<br> <strong> $str </strong> $mensaje <hr>";
}
//Establecemos una funcion personalizada para manejar los errores
set_error_handler('manejador_error');