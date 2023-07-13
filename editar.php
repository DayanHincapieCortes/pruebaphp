<?php
  include("conexion.php");
  $productos = "SELECT * FROM producto";
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Editar datos</title>
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="container-table container-table__edit">
      <div class="table__title table__title__edit">DATOS PRODUCTOS</div>
      <div class="table__header">ID</div>
      <div class="table__header">Nombre de Producto</div>
      <div class="table__header">Referencia</div>
      <div class="table__header">Precio</div>
      <div class="table__header">Peso</div>
      <div class="table__header">Categoría</div>
      <div class="table__header">Stock</div>
      <div class="table__header">Operación</div>
      <?php $resultado = mysqli_query($conexion,$productos);
      while($row=mysqli_fetch_assoc($resultado)){ ?>
      <div class="table__item"><?php echo $row["ID"] ?></div>
      <div class="table__item"><?php echo $row["Nombre_de_producto"] ?></div>
      <div class="table__item"><?php echo $row["Referencia"] ?></div>
      <div class="table__item"><?php echo $row["Precio"] ?></div>
      <div class="table__item"><?php echo $row["Peso"] ?></div>
      <div class="table__item"><?php echo $row["Categoria"] ?></div>
      <div class="table__item"><?php echo $row["Stock"] ?></div>
      <div class="table__item">
        <a href="editardato.php?id=<?php echo $row["ID"] ?>" class="table__item__link"> Editar</a> |
        <a href="eliminardato.php?id=<?php echo $row["ID"] ?>" class="table__item__link"> Eliminar</a></div>
      <?php } mysqli_free_result($resultado); ?>
    </div>
    </body>
</html>