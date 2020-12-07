<!DOCTYPE html>
<html>
<head>
  <title>Insert JGM</title>
  <?php echo '<p>Bienvenido</p>'; ?>
  <link rel="stylesheet" href="tienda.css">
  <script src="carrito.js" language="javascript" type="text/javascript">
  </script>
</head>

<body>
 <div class="container"></div>
 <div class="colums"></div>
 <div class="colums is-4"></div>
 <h1 class="title is-1">Insert</h1>
 <a href="index.php">Productos</a>
 <form action="insert.php" method="GET">
        <div class="control">
 <label class="label">id_Producto</label>
 <input type="text" class="input is-primary" id="id_Producto" name="id_Producto" aria-describedby="id_Producto" placeholder="Ingresa el id del producto"></div>
        <div class="control">
 <label class="label">Snack</label>
 <input type="text" class="input is-primary" id="producto" name="producto" aria-describedby="Producto" placeholder="Ingresa el producto"></div>
        <div class="control">
 <label class="label">Precio</label>
 <input type="text" class="input is-primary" id="Precio" name="Precio" aria-describedby="Precio" placeholder="Precio"></div>
        <div class="control">
 <label class="label">Existencias</label>
 <input type="text" class="input is-primary" id="Existencias" name="Existencias" aria-describedby="Existencias" placeholder="Productos en venta"></div>
 <button type="submit" class="button is-primary">Insert</button>
 </form>

 <?php
  $id_Producto = $_GET['id_Producto'];
  $Producto = $_GET['producto'];
  $Precio = $_GET['Precio'];
  $Existencias = $_GET['Existencias'];
  $insertar = new SQLite3('tienda.db');
  $insertar->exec("INSERT INTO Productos (id_Producto,Producto,Precio,Existencias) VALUES ('$id_Producto', '$Producto','$Precio','$Existencias');");
  header("Location: index.php");
 ?>
</body>
</html>
