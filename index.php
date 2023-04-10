<?php
ini_set('display_error', 1);


ini_set('display_strartup', 1);


error_reporting(E_ALL);

require_once('manejador_error.php');

if(true){
    trigger_error("Esto es un error a proposito");
}

echo $var;

$archivo = fopen('archivo.txt' ,'r');

#------EXCEPCIONES

// Lanzamos la Excepcion

function generarError(){
    throw new Exception("Excepcion generada manualmente <br>");
}
function noGenerarError(){
    echo "No hay error <br>";
}
 //Capturamos la excepcion

try{
    noGenerarError();
}
catch(Exception $e){
    echo "Se ha generado una excepcion <br>";
    $e->getMessage();
}
finally{
    echo"Esto pasa siempre";
}