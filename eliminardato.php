<?php
  include("conexion.php");
  $id = $_GET["id"];

$eliminar = "DELETE FROM producto WHERE ID='$id'";

$resultado= mysqli_query($conexion, $eliminar);

if($resultado){
    echo "<script>alert('Se ha eliminado el dato'); window.location='/pruebaphp/index.php'</script>";
}else {
    echo "<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}
?>