<?php
  include("conexion.php");
  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $referencia = $_POST["referencia"];
  $precio = $_POST["precio"];
  $peso = $_POST["peso"];
  $categoria = $_POST["categoria"];
  $stock = $_POST["stock"];

$actualizar = "UPDATE producto SET Nombre_de_producto='$nombre',
Referencia='$referencia', Precio='$precio', Peso='$peso', Stock='$stock' WHERE ID='$id'";

$resultado= mysqli_query($conexion, $actualizar);

if($resultado){
    echo "<script>alert('Se han actualizado los cambios'); window.location='/pruebaphp/index.php'</script>";
}else {
    echo "<script>alert('No se pudo actualizar los datos'); window.history.go(-1);</script>";
}
?>