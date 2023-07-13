<?php
  include("conexion.php");
  $id = $_GET["id"];
  $productos = "SELECT * FROM producto WHERE ID='$id'";
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <form class="container-table container-table__edit" action="procesar_update.php" method="post">
      <div class="table__title table__title__edit">DATOS PRODUCTOS</div>
      <div class="table__header">ID</div>
      <div class="table__header">Nombre de Producto</div>
      <div class="table__header">Referencia</div>
      <div class="table__header">Precio</div>
      <div class="table__header">Peso</div>
      <div class="table__header">Categoría</div>
      <div class="table__header">Stock</div>
      <div class="table__header">Operacion</div>
      <?php $resultado = mysqli_query($conexion,$productos);
      while($row=mysqli_fetch_assoc($resultado)){ ?>
      <input type="text" class="table__item" value="<?php echo $row["ID"] ?>" name="id">
      <input type="text" class="table__item" value="<?php echo $row["Nombre_de_producto"] ?>" name="nombre">
      <input type="text" class="table__item" value="<?php echo $row["Referencia"] ?>" name="referencia">
      <input type="text" class="table__item" value="<?php echo $row["Precio"] ?>" name="precio">
      <input type="text" class="table__item" value="<?php echo $row["Peso"] ?>" name="peso">
      <input type="text" class="table__item" value="<?php echo $row["Categoria"] ?>" name="categoria">
      <input type="text" class="table__item" value="<?php echo $row["Stock"] ?>" name="stock">
      <?php } mysqli_free_result($resultado)?>
      <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">
    </div>
  </body>
</html>