


<?php
//Archivo que permite el registro de nuevos dispositivos en la BD

$device=$_GET['device'];

// conectar
$m = new MongoClient();

echo "Connection to database successfully";

// seleccionar una base de datos
$bd = $m->testuao;

echo "Database mydb selected";


// seleccionar una colección (equivalente a una tabla en una base de datos relacional)
$coleccion = $bd->dispositivos;

echo "coleccion";

echo $device;


// añadir un registro
//$documento = array( "device" => "App06", "registro" => 4, "valor" => 6 );
 //$coleccion->insert($documento);

$documento = array( "device" => $device );
$coleccion->insert($documento);


// añadir un nuevo registro, con un distinto "perfil"
 //$documento = array( "le" => "XKCD", "online" => true );
 //$colección->insert($documento);

// encontrar todo lo que haya en la colección
$cursor = $coleccion->find();


echo "encontro";

// recorrer el resultado
foreach ($cursor as $documento) {
    echo $documento["device"] . "\n";
}

?>
