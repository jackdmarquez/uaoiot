<?php

$m = new mongoClient();



// seleccionar una base de datos
$bd = $m->testuao;




// seleccionar una colección (equivalente a una tabla en una base de datos relacional)
$coleccion = $bd->linkit;






// añadir un registro
//$documento = array( "device" => "App06", "registro" => 4, "valor" => 6 );
 //$coleccion->insert($documento);

$documento = array( "var1" => $var1, "var2" => $var2, "var3" => $var3 );
//rm version_compare(version1, version2)$coleccion->insert($documento);


// añadir un nuevo registro, con un distinto "perfil"
 //$documento = array( "le" => "XKCD", "online" => true );
 //$colección->insert($documento);

// encontrar todo lo que haya en la colección
$cursor = $coleccion->find();


//echo "encontro";

// recorrer el resultado
foreach ($cursor as $documento) {
    //echo $documento["var1"] . "\n";
        //echo $documento;
        echo json_encode($documento);
}

?>
