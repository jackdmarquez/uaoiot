<?php


$var1=$_GET['var1'];
$var2=$_GET['var2'];
$var3=$_GET['var3'];

// conectar
$m = new MongoClient();

echo "Connection to database successfully";

// seleccionar una base de datos
$bd = $m->testuao;

echo "Database mydb selected";


// seleccionar una colección (equivalente a una tabla en una base de datos relacional)
$coleccion = $bd->linkit;

echo "coleccion";

echo $device;


// añadir un registro
//$documento = array( "device" => "App06", "registro" => 4, "valor" => 6 );
 //$coleccion->insert($documento);

$documento = array( "var1" => $var1, "var2" => $var2, "var3" => $var3 );
$coleccion->insert($documento);


// añadir un nuevo registro, con un distinto "perfil"
 //$documento = array( "le" => "XKCD", "online" => true );
 //$colección->insert($documento);

// encontrar todo lo que haya en la colección
$cursor = $coleccion->find();


echo "encontro\n";

// recorrer el resultado
foreach ($cursor as $documento) {
    echo $documento["var1"] . "\n";
}

?>
