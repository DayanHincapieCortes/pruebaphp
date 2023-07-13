<?php
  include("conexion.php");
  $productos = "SELECT * FROM producto";
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
    <div class="container_add">
      <div class="container__title">REGISTRAR PRODUCTOS</div>
      <form action="insertar.php" method="post" class="container__form">
        <label for="" class="container__label">ID: </label>
        <input name="id" type="number" class="container__input">
        <label for="" class="container__label">Nombre de producto: </label>
        <input  name="nombre" type="text" class="container__input">
        <label for="" class="container__label">Referencia: </label>
        <input  name="referencia" type="text" class="container__input">
        <label for="" class="container__label">Precio: </label>
        <input  name="precio" type="number" class="container__input">
        <label for="" class="container__label">Peso: </label>
        <input  name="peso" type="number" class="container__input">
        <label for="" class="container__label">Categoria: </label>
        <input  name="categoria" type="text" class="container__input">
        <label for="" class="container__label">Stock: </label>
        <input  name="stock" type="number" class="container__input">
        <input class="container__submit" type="submit" value="Registrar">
      </form>
    </div>

    <div class="container-table">
      <div class="table__title">DATOS PRODUCTOS<a href="editar.php" class="title_edit"> Editar</a></div>
      <div class="table__header">ID</div>
      <div class="table__header">Nombre de Producto</div>
      <div class="table__header">Referencia</div>
      <div class="table__header">Precio</div>
      <div class="table__header">Peso</div>
      <div class="table__header">Categoría</div>
      <div class="table__header">Stock</div>
      <div class="table__header">Fecha de creación</div>
      <?php $resultado = mysqli_query($conexion,$productos);
      while($row=mysqli_fetch_assoc($resultado)){ ?>
      <div class="table__item"><?php echo $row["ID"] ?></div>
      <div class="table__item"><?php echo $row["Nombre_de_producto"] ?></div>
      <div class="table__item"><?php echo $row["Referencia"] ?></div>
      <div class="table__item"><?php echo $row["Precio"] ?></div>
      <div class="table__item"><?php echo $row["Peso"] ?></div>
      <div class="table__item"><?php echo $row["Categoria"] ?></div>
      <div class="table__item"><?php echo $row["Stock"] ?></div>
      <div class="table__item"><?php echo $row["Fecha_de_creacion"] ?></div>
      <?php } ?>
    </div>
  </body>
</html>