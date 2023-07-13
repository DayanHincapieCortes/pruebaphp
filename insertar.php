<?php
include ("conexion.php");
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$referencia = $_POST["referencia"];
$precio = $_POST["precio"];
$peso = $_POST["peso"];
$categoria = $_POST["categoria"];
$stock = $_POST["stock"];
$fecha = new DateTime();
$newfecha= $fecha->format("Y-m-d");

$insertar = "INSERT INTO producto VALUES('$id','$nombre','$referencia','$precio',
'$peso','$categoria','$stock','$newfecha')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('Registrado de manera existosa'); window.location='/pruebaphp/index.php'</script>";
}else {
    echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
}